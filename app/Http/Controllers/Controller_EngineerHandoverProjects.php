<?php

namespace App\Http\Controllers;

use App\Project;
use App\Projects_Stat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_EngineerHandoverProjects extends Controller
{
    public function openPage(){
    	$userId = auth()->id();

    	return view('Pages.Engineer.View_EngineerHandoverProjects');
    }

    public function changeStatus(Request $request){
        // dd($request);

        $project = $this->getProjectById($request->id);
        $project->id_pstat = $request->id_pstat;

        if($request->id_pstat == 3){
            $project->pketerangan_status = "Menunggu Approval Pengujian Done";
            $project->id_pketerangan = 2;
        }
        else if($request->id_pstat == 4){
            $project->pketerangan_status = "Menunggu Approval Projek Done";
            $project->id_pketerangan = 2;
        }
        else {
            $project->pketerangan_status = "";
            $project->id_pketerangan = 1;
        }

        $project->save();

        return redirect('/engineer/handover');
    }

    public function handoverDone(Request $request){
        $project = $this->getProjectById($request->input('id'));

        $project->id_current_pic = $project->id_original_pic;
        $project->status_handover = 0;
        $project->save();
    }

    public function dataTable()
    {
        $userId = auth()->id();
        $project = $this->getHandovertData($userId);
        $pstat = Projects_Stat::where('id', '!=', 1)->get();
        return DataTables::of($project, $pstat)
            ->addColumn('status', function($project){
                return view('Layouts.StatusHandover',[
                    'project'=> $project,
                    'pstat' => $pstat
                ]);
            })
            ->addColumn('keterangan', function($project){
                return view('Layouts.KeteranganHandover',[
                    'project'=> $project
                ]);
            })
            ->addColumn('action', function($project){
                return view('Layouts.ActionHandover',[
                    'project'=> $project
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['status', 'keterangan', 'action'])
            ->make(true);
    }

    public function getHandovertData($id){
    	return DB::table('projects')
        ->select(DB::raw('projects.id, projects.nama_project, projects.pketerangan_status, projects.pketerangan_note, products.nama_product, projects_types.nama_ptype, projects_stats.nama_pstat, mitras.nama_mitra, date(projects.waktu_assign_project) as tanggal_assign'))
        ->leftjoin('products', 'projects.id_product', '=', 'products.id')
        ->leftjoin('projects_types', 'projects.id_ptype', '=', 'projects_types.id')
        ->leftjoin('projects_stats', 'projects.id_pstat', '=', 'projects_stats.id')
        ->leftjoin('mitras', 'projects.id_mitra', '=', 'mitras.id')
        ->where('id_current_pic', $id)
        ->where('status_handover', '=', '1')
        ->orderBy('tanggal_assign', 'desc')
        ->get();
    }

    public function getProjectById($id){
        return Project::where('id', $id)->firstOrFail();
    }
}
