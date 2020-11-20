<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerHome extends Controller
{
    public function openPage(){
    	// CARD DATA
    	$preserved = Project::select('id')->where('id_pstat', '1')->count();
    	$ponprogress = Project::select('id')->where('id_pstat', '2')->count();
    	$pdone = Project::select('id')->where('id_pstat', '4')->count();
    	$phold = Project::select('id')->where('id_pstat', '5')->count();
    	$pdrop = Project::select('id')->where('id_pstat', '6')->count();
    	$projects = Project::select('id')->count();
    	
    	return view('Pages.Manager.View_ManagerHome', compact('preserved', 'projects')); 	
    }

    public function getAllData(){
    	// DATA APA SAJA YG DIBUTUHKAN UNTUK CARD PROJEK
    	// 1. Projek Reserved
    	$preserved = Project::select('id')->where('id_pstat', '1')->count();

    	// 2. Projek On Progress
    	$ponprogress = Project::select('id')->where('id_pstat', '2')->count();

    	// 3. Projek Done
    	$pdone = Project::select('id')->where('id_pstat', '4')->count();

    	// 4. Projek Hold
    	$phold = Project::select('id')->where('id_pstat', '5')->count();

    	// 5. Projek Drop
    	$pdrop = Project::select('id')->where('id_pstat', '6')->count();

    	// 6. Jumlah All Projek
    	$projects = Project::select('id')->count();


    	// DATA APA SAJA YG DIBUTUHKAN UNTUK GRAPH??
    	// 1. jumlah p_stat dari masing2 produk
    	$pstatperproduct = DB::select("select ps.nama_pstat, count(*) as jumlah_pstat, pr.nama_product from projects as p, projects_stats as ps, products as pr where p.id_pstat = ps.id and p.id_product = pr.id group by p.id_pstat, pr.nama_product, ps.nama_pstat");

    	// 2. jumlah p_stat dari masing2 p_type
    	$pstatperptype = DB::select("select ps.nama_pstat, count(*) as jumlah_pstat, pt.nama_ptype from projects as p, projects_stats as ps, projects_types as pt where p.id_pstat = ps.id and p.id_ptype = pt.id group by p.id_pstat, pt.nama_ptype, ps.nama_pstat");
    	
    	// 3. total all projek berdasarkan produk
    	$projectperproduct = DB::select("select pr.nama_product, count(*) as jumlah_project from projects as p, products as pr where p.id_product = pr.id group by pr.nama_product order by pr.id asc");
    	
    	// 4. total all projek berdasarkan p_type
    	$projectperptype = DB::select("select pt.nama_ptype, count(*) as jumlah_project from projects as p, projects_types as pt where p.id_ptype = pt.id group by pt.nama_ptype order by pt.id asc");
    	
    	// 5. total projek per orang berdasarkan p_stat
    	$userprojectperpstat = DB::select("select u.inisial_user, ps.nama_pstat, count(*) jumlah_projek from users as u, projects as p, projects_stats as ps where u.id = p.id_user and ps.id = p.id_pstat group by ps.nama_pstat, u.inisial_user order by u.inisial_user asc, ps.id asc");
    	
    	// 6. total prokek per orang berdasarkan p_type
    	$userprojectperptype = DB::select("select u.inisial_user, pt.nama_ptype, count(*) jumlah_projek from users as u, projects as p, projects_types as pt where u.id = p.id_user and pt.id = p.id_ptype group by pt.nama_ptype, u.inisial_user order by u.inisial_user asc, pt.id asc");

    	$alldata[] = [$preserved, $ponprogress, $pdone, $phold, $pdrop, $projects, $pstatperproduct, $pstatperptype, $projectperproduct, $projectperptype, $userprojectperpstat, $userprojectperptype];

    	// return $alldata; 
    }

    public function getFilteredData(){

    }
}
