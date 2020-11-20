<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerHome extends Controller
{
    public function openPage(){
    	return view('Pages.Manager.View_ManagerHome'); 	
    }

    public function getAllData(){
    	// DATA APA SAJA YG DIBUTUHKAN UNTUK CARD PROJEK
    	// 1. Projek Reserved
    	$preserved = DB::select("select count(*) from projects where id_pstat = '1'");

    	// 2. Projek On Progress
    	$ponprogress = DB::select("select count(*) from projects where id_pstat = '2'");

    	// 3. Projek Done
    	$pdone = DB::select("select count(*) from projects where id_pstat = '4'");

    	// 4. Projek Hold
    	$phold = DB::select("select count(*) from projects where id_pstat = '5'");

    	// 5. Projek Drop
    	$pdrop = DB::select("select count(*) from projects where id_pstat = '6'");

    	// 6. Jumlah All Projek
    	$projects = Project::select('id')->count();


    	// DATA APA SAJA YG DIBUTUHKAN UNTUK GRAPH??
    	// 1. jumlah p_stat dari masing2 produk
    	$pstatperproduct = DB::select("select ps.nama_pstat, count(*) as jumlah_pstat, pr.nama_product from projects p, projects_stats ps, products pr where p.id_pstat = ps.id and p.id_product = pr.id group by p.id_pstat, pr.nama_product");

    	// 2. jumlah p_stat dari masing2 p_type
    	$pstatperptype = DB::select("select ps.nama_pstat, count(*) as jumlah_pstat, pt.nama_ptype from projects p, projects_stats ps, projects_types pt where p.id_pstat = ps.id and p.id_ptype = pt.id group by p.id_pstat, pt.nama_ptype");
    	
    	// 3. total all projek berdasarkan produk
    	$projectperproduct = DB::select("select pr.nama_product, count(*) as jumlah_project from projects p, products pr where p.id_product = pr.id group by pr.nama_product order by pr.id asc");
    	
    	// 4. total all projek berdasarkan p_type
    	$projectperptype = DB::select("select pt.nama_ptype, count(*) as jumlah_project from projects p, projects_types pt where p.id_ptype = pt.id group by pt.nama_ptype order by pt.id asc");
    	
    	// 5. total projek per orang berdasarkan p_stat
    	$projectperptype = DB::select("select u.inisial_user, ps.nama_pstat, count(*) jumlah_projek from users u, projects p, projects_stats ps where u.id = p.id_user and ps.id = p.id_pstat group by ps.id, u.id order by u.inisial_user asc, ps.id asc");
    	
    	// 6. total prokek per orang berdasarkan p_type
    	$projectperptype = DB::select("select u.inisial_user, pt.nama_ptype, count(*) jumlah_projek from users u, projects p, projects_types pt where u.id = p.id_user and pt.id = p.id_ptype group by pt.id, u.id order by u.inisial_user asc, pt.id asc");
    }
}
