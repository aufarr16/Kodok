<?php

namespace App\Http\Controllers;

use App\Projects_Stat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_EngineerYourProjects extends Controller
{
    public function openPage(){
    	$userId = auth()->id();
    	$projects = $this->getProjectData($userId);
        $pstat = Projects_Stat::where('id', '!=', 1)->get();

    	return view('Pages.Engineer.View_EngineerYourProjects', compact('projects', 'pstat'));
    }

    public function getProjectData($id){
    	return DB::table('projects')
    	->select(DB::raw('projects.id, projects.nama_project, projects.pketerangan_status, projects.pketerangan_note, products.nama_product, projects_types.nama_ptype, projects_stats.nama_pstat, mitras.nama_mitra, date(projects.waktu_assign_project) as tanggal_assign'))
    	->leftjoin('products', 'projects.id_product', '=', 'products.id')
    	->leftjoin('projects_types', 'projects.id_ptype', '=', 'projects_types.id')
        ->leftjoin('projects_stats', 'projects.id_pstat', '=', 'projects_stats.id')
    	->leftjoin('mitras', 'projects.id_mitra', '=', 'mitras.id')
    	->where('id_current_pic', $id)
        ->where('status_handover', '=', '0')
    	->orderBy('tanggal_assign', 'desc')
    	->get();
    }

}
