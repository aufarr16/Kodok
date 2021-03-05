<?php

namespace App\Http\Controllers;

use DataTables;
use App\User;
use App\Project;
use App\Projects_Stat;
use App\Projects_Handover;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_EngineerYourProjects extends Controller
{
    public function openPage(){         //buka halaman Engineer - Project Own Going (Own Project)
        //Autentikasi level user yg boleh msk
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 3 || $userLevel == 5){
            return view('Pages.Engineer.View_EngineerYourProjects', compact('userLevel'));
        }
        else{
            return redirect('/logout');
        }
    }

    public function changeStatus(Request $request){     //ganti status projek
        $id = $request->input('id');                    //nyimpen id projek yg mau diubah statusnya
        $pstat = $request->input('pstat');              //nyimpen statusnya mau diganti jadi apa
        $project = $this->getProjectById($id);          //ngambil projek yg mau diganti statusnya

        if($pstat == 3){                                                        //kalo statnys mau diganti ke pengujian done, maka
            $project->stats_temp = $pstat;                                      //naro status yg mau digantinya jadi apa ke temp dulu, nunggu di approve manager
            $project->pketerangan_status = "Menunggu Approval Pengujian Done";  //ngubah keterangannya
            $project->id_pketerangan = 2;                                       //ubah keterangannya jadi menunggu approval
        }
        else if($pstat == 5){                                                   //kalo statnya mau diganti ke projek done, maka
            $project->stats_temp = $pstat;                                      //naro status yg mau digantinya jadi apa ke temp dulu, nunggu di approve manager
            $project->pketerangan_status = "Menunggu Approval Projek Done";     //ngubah keterangannya
            $project->id_pketerangan = 2;                                       //ubah keterangannya jadi menunggu approval
        }
        else if($pstat == 7){                                                   //kalo statnya mau diganti ke drop, maka
            $project->id_pstat = $pstat;                                        //status langsung diubah ke drop
            $project->pketerangan_status = "Projek Drop";                       //ngubah keterangannya

            if($project->status_handover == 1){                                 //kalo dia projek handoveran, maka
                $handover = Projects_Handover::where('id_project', $id)->orderBy('handover_order', 'desc')->firstOrFail();  //ambil data projek handoverannya
                $handover->is_active = 0;                                       //is_activenya dibikin 0 karena projek dianggap selesai
                $handover->save();                                              //simpen perubahan data projek handover
            }

            $project->status_handover = 0;                                      //di projek, status handoverannya dianggap selsai
        }
        else {
            $project->id_pstat = $pstat;                                        //selain pengujian done, projek done, ato drop, maka
            if($project->id_pketerangan != 3){                                  //kalo approval tidak di decline, maka
                $project->pketerangan_status = "";                              //keterangan dikosongkan
                $project->id_pketerangan = 1;                                   //keterangan diubah menjadi approved
            }
        }

        $project->save();                                                       //save perubahan data 
    }

    public function editProgress($id){                                          //nyiapin form Edit Progress
        $project = $this->getProjectById($id);                                  //ngambil data projek yg mau diubah progressnya
        $sit = $project->progress_sit;                                          //ngambil progress sit
        $uat = $project->progress_uat;                                          //ngambil progress uat 

        return view('Layouts.FormProgress', compact('project', 'sit', 'uat'));  //buka formnya dengan data2 yg udh disiapin sebelumnya
    }

    public function updateProgress(Request $request, $id){                      //update data setelah nginput di form
        $request->validate([                                                    //validasi input
            'progress_sit' => 'required|lte:100|regex:/^[0-9.]*$/',
            'progress_uat' => 'required|lte:100|regex:/^[0-9.]*$/',
        ],
        $message = [
            'progress_sit.required' => ' Mohon isi Progress SIT',
              'progress_sit.lte' => ' Progress SIT maks. 100',
              'progress_sit.regex' => ' Progress SIT hanya berisi angka',
            'progress_uat.required' => ' Mohon isi Progress UAT',
              'progress_uat.lte' => ' Progress UAT maks. 100',
              'progress_uat.regex' => ' Progress UAT hanya berisi angka',
        ]);
        
        $project = $this->getProjectById($id);                                  //cari projek yg datanya mau diubah

        $project->progress_sit = $request->progress_sit;                        //ganti progress sit
        $project->progress_uat = $request->progress_uat;                        //ganti progress uat

        $project->save();                                                       //simpan perubahan
    }

    public function editBussinessPIC($id){                                      //edit pic bisnis            
        $project = $this->getProjectById($id);                                  //ngambil data projek yg mau ditempel di form Edit PIC Bisnis

        //ngambil data product buat ngisi dropdown
        if($project->id_pic_product == NULL){  //kalo pic blm ada ato placeholder, maka ambil data yg pake placeholder
            $listproduct = $this->getPICData($id, 0, 6);                        
        }
        else{
            $listproduct = $this->getPICData($id, 1, 6);
        }

        //ngambil data am buat ngisi dropdown
        if($project->id_pic_am == NULL){            //kalo pic blm ada ato placeholder, maka ambil data yg pake placeholder
            $listam = $this->getPICData($id, 0, 7); 
        }
        else{
            $listam = $this->getPICData($id, 1, 7);
        }

        //ngambil data pm buat ngisi dropdown
        if($project->id_pic_pm == NULL){            //kalo pic blm ada ato placeholder, maka ambil data yg pake placeholder
            $listpm = $this->getPICData($id, 0, 8); 
        }
        else{
            $listpm = $this->getPICData($id, 1, 8);
        }
        
        return view('Layouts.FormPIC', compact('project', 'listproduct', 'listam', 'listpm'));  //buka form edit pic dengan data2 yg sudah disiapkan
    }

    public function updateBussinessPIC(Request $request, $id){                  //update data pic bisnis
        $project = $this->getProjectById($id);                                  //ambil projek yg mau diubah pic bisnisnya

        $project->id_pic_product = $request->id_pic_product;                    //ubah pic product
        $project->id_pic_am = $request->id_pic_am;                              //ubah pic am
        $project->id_pic_pm = $request->id_pic_pm;                              //ubah pic pm

        $project->save();                                                       //save perubahan
    }

    public function editNotes($id){
        $project = $this->getProjectById($id);                                  //ambil data projek
        $notes = $project->notes_project;                                       //ambil data notesnya

        return view('Layouts.FormNotes', compact('notes'));                     //buka form notes dengan data notes yg mau diedit
    }

    public function updateNotes(Request $request, $id){
        $project = $this->getProjectById($id);                                  //ambil data projek yg mau diubah notesnya

        $project->notes_project = $request->notes_project;                      //ubah notes
        $project->save();                                                       //save perubahan
    }

    public function dataTable(){                                                //generate table di halaman Engineer - Project Own Going (Own Project)
        $userId = auth()->id();                                                 //ambil id user yg lagi login
        $project = $this->getProjectData($userId);                              //ambil data2 projek user yg lagi login
        $pstat = Projects_Stat::where('id', '!=', 1)->get();                    //ambil list status kecuali reserve untuk ditampilin di dropdown status
        return DataTables::of($project)                                         //bikin table berdasarkan data2 yg udh diambil
            ->addColumn('status', function($project) use ($pstat){              //tambah kolom status buat ganti status
                return view('Layouts.StatusProject',[
                    'project'=> $project,
                    'pstat'=> $pstat
                ]);
            })
            ->addColumn('keterangan', function($project){                       //tambah kolom keterangan
                return view('Layouts.KeteranganProject',[
                    'project'=> $project
                ]);
            })
            ->addColumn('action', function($project){                           //tambah kolom action
                return view('Layouts.ActionProject',[                           //menggunakan layout di file ActionProject
                    'project'=> $project,           
                    'url_pic' => route('pic.edit', $project->id),               //melempar link untuk tombol edit pic beserta id projek yg mau diubah
                    'url_progress' => route('progress.edit', $project->id)      //melempar link untuk tombol edit progress beserta id projek yg mau diubah
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['status', 'keterangan','action'])
            ->make(true);
    }

    public function getProjectData($id){                                     //ngambil data buat ditamplin di halaman Engineer - Project Own Going (Own Project)
    	return DB::table('projects')
    	->select(DB::raw('projects.id, projects.nama_project, projects.pketerangan_status, projects.pketerangan_note, products.nama_product, projects_types.nama_ptype, projects.id_pstat, projects_stats.nama_pstat, mitras.nama_mitra, date(projects.waktu_assign_project) as tanggal_assign'))
    	->leftjoin('products', 'projects.id_product', '=', 'products.id')
    	->leftjoin('projects_types', 'projects.id_ptype', '=', 'projects_types.id')
        ->leftjoin('projects_stats', 'projects.id_pstat', '=', 'projects_stats.id')
    	->leftjoin('mitras', 'projects.id_mitra', '=', 'mitras.id')
    	->where('id_current_pic', $id)
        ->where('status_handover', '=', '0')
        ->whereNotIn('id_pstat', [5,7])
    	->orderBy('tanggal_assign', 'desc')
    	->get();
    }

    public function getProjectById($id){                                        //ngamabil data projek berdasarkan idnya
        return Project::where('id', $id)->firstOrFail();
    }

    public function getPICData($id, $flag, $level){                             //ngambil data untuk ditampilkan di dropdown form Edit PIC
        if($flag == 0){
            return User::where('users.id_ulevel', $level)
            ->orderBy('id', 'asc')
            ->get()
            ->pluck('nama_user', 'id')
            ->toArray();
        }
        else{
            return DB::table('users')
            ->select(DB::raw('count(projects.id) as jml, users.id, users.nama_user'))
            ->leftjoin('projects', function($join) use ($id) {
                $join->on('projects.id_pic_product', '=', 'users.id')
                ->where('projects.id', $id);
            })
            ->where('users.id_ulevel', $level)
            ->groupBy('users.id','users.nama_user')
            ->orderBy('jml','DESC')
            ->get()
            ->pluck('nama_user', 'id')
            ->toArray();
        }
    }
}
