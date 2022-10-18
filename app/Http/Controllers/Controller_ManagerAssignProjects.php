<?php

namespace App\Http\Controllers;

use App\Project;
use App\Projects_Handover;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerAssignProjects extends Controller
{
    public function openPage(){             //buka halaman Manager - Assign
        //Autentikasi level user yg boleh msk
        $this->authorize('isManager', auth()->user());

        $userLevel = auth()->user()->id_ulevel;
        $products = DB::select("select * from products order by nama_product asc");     //ngambil data semua product
        $mitras = DB::select("select * from mitras order by nama_mitra asc");           //ngambil data semua mitra
        $ptypes = DB::select("select * from projects_types order by nama_ptype asc");   //ngambil data semua project type
        $users = $this->getUser();                                                      //ngambil data engineer dan adminxengineer
        
        return view('Pages.Manager.View_ManagerAssignProjects', compact('userLevel', 'users', 'products','mitras','ptypes'));
    }

    public function storeNew(Request $request){                         //tambah data projek baru
        $this->authorize('isManager', auth()->user());

        $request->validate([                                            //validasi data input projek
            'id_user' => 'required',
            'id_product' => 'required',
            'id_ptype' => 'required',
            'id_mitra' => 'required',
            'nama_project' => 'required|max:256',
        ],
        $message = [
            'id_user.required' => 'Mohon pilih PIC',
            'id_product.required' => 'Mohon pilih product',
            'id_ptype.required' => 'Mohon pilih jenis project',
            'id_mitra.required' => 'Mohon pilih nama mitra',
            'nama_project.required' => 'Mohon isi nama project',
                'nama_project.max' => 'Nama project max 201 kata',
        ]);

        $project_dir = $this->getProjectDirectory($request->id_product, $request->id_mitra, $request->id_user, $request->nama_project);

        $newproject = Project::create([                                 //bikin data project baru    
            'id_current_pic' => $request->id_user,
            'id_original_pic' => $request->id_user,
            'id_product' => $request->id_product,
            'id_ptype' => $request->id_ptype,
            'id_mitra' => $request->id_mitra,
            'nama_project' => $request->nama_project,
            'direktori_project' => $project_dir
        ]);

    	return redirect('/manager/assign')->with('success','Project berhasil di assign');
    }

    public function storeHandover(Request $request){                    //tambah data handover baru
        $this->authorize('isManager', auth()->user());
        
        $request->validate([                                            //validasi data input handover
            'id_user1' => 'required',
            'nama_project2' => 'required',
            'PIChandover' => 'required',
        ],
        $message = [
            'id_user1.required' => 'Mohon pilih PIC Utama',
            'nama_project2.required' => 'Mohon pilih project',
            'PIChandover.required' => 'Mohon pilih PIC handover',
        ]);

        $handoveredproject = Project::where('id', $request->nama_project2)->firstOrFail();  //ngambil data projek yg mau dihandover
        if($request->PIChandover == $handoveredproject->id_original_pic){                   //kalo pic handover = pic original
            $this->autoDoneLastHandover($request->nama_project2);

            $handoveredproject->id_current_pic = $handoveredproject->id_original_pic;       //ubah pic skrng jadi pic original
            $handoveredproject->status_handover = 0;                                        //statusnya menjadi tidak handover
            $handoveredproject->save();

            return redirect('/manager/assign')->with('success','Project berhasil di handover');
        }

        $handoveredproject->id_current_pic = $request->PIChandover;                         //ubah pic skrng jadi pic handover
        $handoveredproject->status_handover = 1;                                            //ubah status handover jadi true
        $handoveredproject->handover_counter = $handoveredproject->handover_counter + 1;    //tambah counter handovernya    
        $handoveredproject->save();                                                         //save perubahan data projek

        $this->autoDoneLastHandover($request->nama_project2);                                //auto done kalo handover sebelumnya blm didone

        $newhandover = Projects_Handover::create([                                          //bikin data handover baru
            'id_user' => $request->PIChandover,
            'id_project' => $request->nama_project2,
            'handover_order' => $handoveredproject->handover_counter
        ]);

        return redirect('/manager/assign')->with('success','Project berhasil di handover');
    }

    public function fillProject($userId=0){                         //function autofill dropdown projek yg dimiliki user yg mau dihandoverin projeknya
        $projData['data'] = Project::orderby("nama_project","asc")
        ->select('id', 'nama_project')
        ->where('id_current_pic', $userId)
        ->whereNotIn('id_pstat', [5,7,4])
        ->get();

        return response()->json($projData);
    }

    public function fillNewPIC($userId=0){                          //function autofill dropdown user handover 
        $userData['data'] = User::orderby("nama_user","asc")
        ->select('id', 'nama_user')
        ->where('id', '!=', $userId)
        ->whereIn('id_ulevel', [3,5,10])
        ->get();

        return response()->json($userData);
    }

    public function getUser(){                                      //ngambil data user engineer dan adminxengineer
        return User::select(DB::raw('*'))->whereIn('id_ulevel', [3, 5, 10])->get();
    }

    public function autoDoneLastHandover($id){
         if($prevhandover = Projects_Handover::where('id_project', $id)->orderby('handover_order', 'desc')->first()){
            $prevhandover->is_active = 0;                                                   //handover sebelumnya dibuat otomatis done
            $prevhandover->save();                                                          //save perubahan data handover
        }
    }

    public function getProjectById($id){                                        //ngamabil data projek berdasarkan idnya
        return Project::where('id', $id)->firstOrFail();
    }

    public function getProjectDirectory($product, $mitra, $user, $nama_project){
        $year = strval(Carbon::now()->format('Y'));
        $nama_product = DB::table('products')
                  ->select(DB::raw('products.nama_product'))
                  ->where('id', $product)
                  ->get()
                  ->implode('nama_product'); 

        $inisial_user = DB::table('users')
                        ->select(DB::raw('users.inisial_user'))
                        ->where('id', $user)
                        ->get()
                        ->implode('inisial_user');

        $project_dir = 'Documents/' . $year . '/' . $nama_product . '/' . '[' . $inisial_user . '] ' . $nama_project;

        return $project_dir; 
    }
}
