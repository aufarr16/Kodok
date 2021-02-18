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
    public function openPage(){
        //Autentikasi level user yg boleh msk
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 2){
            return view('Pages.Manager.View_ManagerListProjects');  
        }
        else{
            return redirect('/logout');
        }
    }

    public function export(){
        return (new ProjectsExport)->download('Data All Project.xlsx');
    }

    public function seeDetail(Request $request){
        $idproject = $request->id;
        $picori = $this->getOriginalPIC($idproject);
        $piccurrent = $this->getCurrentPIC($idproject);
        $historypic = $this->getHistoryPIC($idproject);
        $picbisnis = $this->getPICBisnis($idproject);
        $progress = $this->getProgress($idproject);

        return view('Layouts.DetailProject', compact('picori', 'piccurrent', 'historypic', 'picbisnis', 'progress'));
    }

    public function dataTable()
    {
        $data = DB::select("select e.id, a.inisial_user, b.nama_product, c.nama_ptype, d.nama_mitra, e.nama_project, DATE(e.waktu_assign_project) as waktu, f.id as id_pstat from users as a, products as b, projects_types as c, mitras as d, projects as e, projects_stats as f where e.id_current_pic = a.id and e.id_product = b.id and e.id_ptype = c.id and e.id_mitra = d.id and e.id_pstat = f.id");
        return DataTables::of($data)
            ->addColumn('nama_project', function($data){
                return view('Layouts.ClickableText',[
                    'data'=> $data,
                ]);
            })
            ->addColumn('id_pstat', function($data){
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

    public function getPICBisnis($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_pic_product, projects.id_pic_am, projects.id_pic_pm'))
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
