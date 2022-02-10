<?php

namespace App\Http\Controllers;

use DataTables;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_EngineerListProjects extends Controller
{
    public function openPage(){         //buka halaman Engineer - Project Own Going (Own Project)
        //Autentikasi level user yg boleh msk
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 3 || $userLevel == 5 || $userLevel == 10){
            return view('Pages.Engineer.View_EngineerListProjects', compact('userLevel'));
        }
        else{
            return redirect('/logout');
        }
    }

    public function detail($id){                     //buka detail projek
        $project = $this->getProjectById($id);       //ambil data projek yg mau diliat
        $picori = $this->getOriginalPIC($id);        //ambil data original pic 
        $piccurrent = $this->getCurrentPIC($id);     //ambil data current pic
        $historypic = $this->getHistoryPIC($id);     //ambil data history pic
        $picproduct = $this->getProductPIC($id);     //ambil data pic product 
        $picam = $this->getAMPIC($id);               //ambil data pic am 
        $picpm = $this->getPMPIC($id);               //ambil data pic pm 
        $pbn = $this->getPBN($id);                   //ambil data progress + bobot + notes

        // dd($project);
        
        return view('Layouts.FormEngineerListProject', compact('picori', 'piccurrent', 'historypic', 'picproduct', 'picam', 'picpm', 'pbn', 'project'));
    }

    public function dataTable(){                            //generate table untuk halaman Manager - List Project
        $data = DB::select("select e.id, a.inisial_user, b.nama_product, c.nama_ptype, d.nama_mitra, e.nama_project, DATE(e.waktu_assign_project) as waktu, f.id as id_pstat from users as a, products as b, projects_types as c, mitras as d, projects as e, projects_stats as f where e.id_current_pic = a.id and e.id_product = b.id and e.id_ptype = c.id and e.id_mitra = d.id and e.id_pstat = f.id order by waktu desc");    //ambil data buat ditempel di table
        return DataTables::of($data)                        //bikin table berdasarkan data yg udh diambi;
            ->addColumn('nama_project', function($data){    //tambah kolom nama project yg bisa diklik
                return view('Layouts.ClickableText',[
                    'data'=> $data,
                    'url_detail' => route('engineerlistprojects.detail', $data->id)
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

    public function getProjectById($id){
        return Project::where('id', $id)->firstOrFail();
    }

    public function getOriginalPIC($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_original_pic, users.nama_user'))
        ->leftjoin('users', 'projects.id_original_pic', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->first();
    }

    public function getCurrentPIC($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_current_pic, users.nama_user'))
        ->leftjoin('users', 'projects.id_current_pic', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->first();
    }

    public function getHistoryPIC($id){
        return DB::table('projects_handovers')
        ->select(DB::raw('projects_handovers.id_project, projects_handovers.id_user, projects_handovers.handover_order, users.nama_user'))
        ->leftjoin('users', 'projects_handovers.id_user', '=', 'users.id')
        ->where('projects_handovers.id_project', '=', $id)
        ->orderBy('projects_handovers.handover_order', 'asc')
        ->get();
    }

    public function getProductPIC($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_pic_product, users.nama_user'))
        ->leftjoin('users', 'projects.id_pic_product', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->first();
    }

    public function getAMPIC($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_pic_am, users.nama_user'))
        ->leftjoin('users', 'projects.id_pic_am', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->first();
    }

    public function getPMPIC($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_pic_pm, users.nama_user'))
        ->leftjoin('users', 'projects.id_pic_pm', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->first();
    }

    public function getPBN($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.progress_sit, projects.progress_uat, projects.notes_project, projects.bobot_project', 'projects.nodin_in', 'projects.nodin_out', 'projects.no_bako', 'projects.no_bae', 'projects.no_bato'))
        ->where('projects.id', '=', $id)
        ->first();
    }

}
