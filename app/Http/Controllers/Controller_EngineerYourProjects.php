<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_EngineerYourProjects extends Controller
{
    public function openPage(){
    	$userId = auth()->id();
    	$data = $this->getProjectData($userId);

    	return view('Pages.Engineer.View_EngineerYourProjects', compact('data'));
    }

    public function getProjectData($id){
    	return DB::table('projects')
    	->select(DB::raw('projects.id, products.nama_product, projects_types.nama_ptype, mitras.nama_mitra, date(projects.waktu_assign_project) as tanggal_assign'))
    	->leftjoin('products', 'projects.id_product', '=', 'products.id')
    	->leftjoin('projects_types', 'projects.id_ptype', '=', 'projects_types.id')
    	->leftjoin('mitras', 'projects.id_mitra', '=', 'mitras.id')
    	->orderBy('tanggal_assign', 'desc')
    	->get();
    }

}
