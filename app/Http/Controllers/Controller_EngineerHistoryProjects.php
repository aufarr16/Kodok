<?php

namespace App\Http\Controllers;

use DataTables;
use App\Project;
use App\Projects_Stat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_EngineerHistoryProjects extends Controller
{
    public function openPage(){
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 3 || $userLevel == 5){
            return view('Pages.Engineer.View_EngineerHistoryProjects');
        }
        else{
            return redirect('/logout');
        }
    }

    public function dataTable()
    {
        $userId = auth()->id();
        $project = $this->getProjectData($userId);
        $pstat = Projects_Stat::where('id', '!=', 1)->get();
        return DataTables::of($project)
            ->addIndexColumn()
            ->rawColumns()
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
        ->where('id_pstat', "=", '5')->where('id_pstat', "=", '7')
        ->orderBy('tanggal_assign', 'desc')
        ->get();
    }
}
