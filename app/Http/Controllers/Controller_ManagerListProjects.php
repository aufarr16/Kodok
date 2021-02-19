<?php

namespace App\Http\Controllers;

use App\Project;
use DataTables;
use App\Exports\ProjectsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class Controller_ManagerListProjects extends Controller
{
    public function openPage(){                             //buka halaman Manager - List Project
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 2){                                //Autentikasi level user yg boleh msk
            return view('Pages.Manager.View_ManagerListProjects');  
        }
        else{
            return redirect('/logout');
        }
    }

    public function export(){                               //Export list project ke dalam excel
        return (new ProjectsExport)->download('Data All Project.xlsx');
    }

    public function detail(Request $request){               //buka detail projek
        $idproject = $request->id;                          //ambil id projek yg mau diliat detailnya
        $picori = $this->getOriginalPIC($idproject);        //ambil data original pic
        $piccurrent = $this->getCurrentPIC($idproject);     //ambil data current pic
        $picproduct = $this->getProductPIC($idproject);     //ambil data pic product 
        $picam = $this->getAMPIC($idproject);               //ambil data pic am 
        $picpm = $this->getPMPIC($idproject);               //ambil data pic pm 
        $picbisnis = $this->getPICBisnis($idproject);       //ambil data pic bisnis
        $progress = $this->getProgress($idproject);         //ambil data progress

        return view('Layouts.DetailProject', compact('picori', 'piccurrent', 'historypic', 'picproduct', 'picam', 'picpm', 'progress'));
    }

    public function dataTable(){                            //generate table untuk halaman Manager - List Project
        $data = DB::select("select e.id, a.inisial_user, b.nama_product, c.nama_ptype, d.nama_mitra, e.nama_project, DATE(e.waktu_assign_project) as waktu, f.id as id_pstat from users as a, products as b, projects_types as c, mitras as d, projects as e, projects_stats as f where e.id_current_pic = a.id and e.id_product = b.id and e.id_ptype = c.id and e.id_mitra = d.id and e.id_pstat = f.id");    //ambil data buat ditempel di table
        return DataTables::of($data)                        //bikin table berdasarkan data yg udh diambi;
            ->addColumn('nama_project', function($data){    //tambah kolom nama project yg bisa diklik
                return view('Layouts.ClickableText',[
                    'data'=> $data,
                    'url_detail' => route('listprojects.detail', $data->id)
                ]);
            })
            ->addColumn('id_pstat', function($data){        //tambah kolom status biar ada iconnya
                return view('Layouts.Status',[
                    'data'=> $data,
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['nama_project', 'id_pstat'])
            ->make(true);
    }

    public function getOriginalPIC($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_original_pic, users.nama_user'))
        ->leftjoin('users', 'projects.id_original_pic', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->get();
    }

    public function getCurrentPIC($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_current_pic, users.nama_user'))
        ->leftjoin('users', 'projects.id_current_pic', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->get();
    }

    public function getHistoryPIC($id){
        return DB::table('projects_handover')
        ->select(DB::raw('projects_handover.id_project, projects_handover.id_user, users.nama_user'))
        ->leftjoin('users', 'projects_handover.id_user', '=', 'users.id')
        ->where('projects_handover.id_project', '=', $id)
        ->orderBy('projects_handover.handover_order', 'asc')
        ->get();
    }

    public function getPICProduct($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_pic_product, users.nama_user'))
        ->leftjoin('users', 'projects.id_pic_product', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->get();
    }

    public function getPICAM($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_pic_am, users.nama_user'))
        ->leftjoin('users', 'projects.id_pic_am', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->get();
    }

    public function getPICPM($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_pic_pm, users.nama_user'))
        ->leftjoin('users', 'projects.id_pic_pm', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->get();
    }

    public function getProgress($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.progress_sit, progress_uat'))
        ->where('projects.id', '=', $id)
        ->get();
    }
}
