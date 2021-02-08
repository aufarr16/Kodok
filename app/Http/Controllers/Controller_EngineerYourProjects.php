<?php

namespace App\Http\Controllers;

use DataTables;
use App\Project;
use App\Projects_Stat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_EngineerYourProjects extends Controller
{
    public function openPage(){
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 3 || $userLevel == 5){
            return view('Pages.Engineer.View_EngineerYourProjects', compact('userLevel'));
        }
        else{
            return redirect('/logout');
        }
    }

    public function changeStatus(Request $request){
        // dd($request);

        $project = $this->getProjectById($request->input('id'));

        if($request->input('pstat') == 3){
            $project->stats_temp = $request->input('pstat');
            $project->pketerangan_status = "Menunggu Approval Pengujian Done";
            $project->id_pketerangan = 2;
        }
        else if($request->input('pstat') == 5){
            $project->stats_temp = $request->input('pstat');
            $project->pketerangan_status = "Menunggu Approval Projek Done";
            $project->id_pketerangan = 2;
        }
        else if($request->input('pstat') == 7){
            $project->id_pstat = $request->input('pstat');
            $project->pketerangan_status = "Projek Drop";
            $project->status_handover = 0;
        }
        else {
            $project->id_pstat = $request->input('pstat');
            if($project->id_pketerangan != 3){
                $project->pketerangan_status = "";
                $project->id_pketerangan = 1;
            }
        }
        
        $project->save();
    }

    public function changeProgress(Request $request){
        $project = getProjectById($request->id);

        $project->progress_sit = $request->progress_sit;
        $project->progress_uat = $request->progerss_uat;

        $project->save();
    }

    public function changeBussinessPIC(Request $request){
        $project = getProjectById($request->id);

        $model = new changeBussinessPIC();
        return view('Layouts.FormPic', compact('model'));

        $project->id_pic_product = $request->id_pic_product;
        $project->id_pic_am = $request->id_pic_am;
        $project->id_pic_pm = $request->id_pic_pm;

        $project->save();
    }

    public function dataTable()
    {
        $userId = auth()->id();
        $project = $this->getProjectData($userId);
        $pstat = Projects_Stat::where('id', '!=', 1)->get();
        return DataTables::of($project)
            ->addColumn('status', function($project) use ($pstat){
                return view('Layouts.StatusProject',[
                    'project'=> $project,
                    'pstat'=> $pstat
                ]);
            })
            ->addColumn('keterangan', function($project){
                return view('Layouts.KeteranganProject',[
                    'project'=> $project
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['status', 'keterangan'])
            ->make(true);
    }

    public function getProjectData($id){
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

    public function getProjectById($id){
        return Project::where('id', $id)->firstOrFail();
    }
}
