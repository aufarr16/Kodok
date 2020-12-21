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
    	$projects = $this->getHandovertData($userId);
        $pstat = Projects_Stat::where('id', '!=', 1)->get();

    	return view('Pages.Engineer.View_EngineerHandoverProjects', compact('projects', 'pstat'));
    }

    public function changeStatus(Request $request){
        // dd($request);

        $project = Project::where('id', $request->id)->firstOrFail();
        $project->id_pstat = $request->id_pstat;

        if($request->id_pstat == 3){
            $project->pketerangan_status = "Menunggu Approval Pengujian Done";
        }
        else if($request->id_pstat == 4){
            $project->pketerangan_status = "Menunggu Approval Projek Done";
        }
        else {
            $project->pketerangan_status = "";
        }

        $project->save();

        return redirect('/engineer/handover');
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
}
