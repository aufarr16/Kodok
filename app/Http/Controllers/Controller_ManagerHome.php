<?php

namespace App\Http\Controllers;

use Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerHome extends Controller
{
    public function openPage(){
    	return view('Pages.Manager.View_ManagerHome'); 	
    }

    public function getAllData(){
    	// DATA APA AJA YG HARUS DIPASSING?
    	// 1. jumlah p_stat dari masing2 produk
    	$pstatperproduct = DB::select("select ps.nama_pstat, count(*) as jumlah_pstat, pr.nama_product from projects p, projects_stats ps, products pr where p.id_pstat = ps.id and p.id_product = pr.id group by p.id_pstat, pr.nama_product");

    	// 2. jumlah p_stat dari masing2 p_type
    	$pstatperptype = DB::select("select ps.nama_pstat, count(*) as jumlah_pstat, pt.nama_ptype from projects p, projects_stats ps, projects_types pt where p.id_pstat = ps.id and p.id_ptype = pt.id group by p.id_pstat, pt.nama_ptype");
    	
    	// 3. total all projek berdasarkan produk
    	$projectperproduct = DB::select("select pr.nama_product, count(*) as jumlah_project from projects p, products pr where p.id_product = pr.id group by pr.nama_product order by pr.id asc");
    	
    	// 4. total all projek berdasarkan p_type
    	$projectperptype = DB::select("select pt.nama_ptype, count(*) as jumlah_project from projects p, projects_types pt where p.id_ptype = pt.id group by pt.nama_ptype order by pt.id asc");
    	
    	// 5. total projek per orang berdasarkan p_stat
    	$projectperptype = DB::select("select u.nama_user, ps.nama_pstat, count(*) jumlah_projek from users u, projects p, projects_stats ps where u.id = p.id_user and ps.id = p.id_pstat group by ps.id, u.id order by u.nama_user asc, ps.id asc");
    	
    	// 6. total prokek per orang berdasarkan p_type
    	$projectperptype = DB::select("select u.nama_user, pt.nama_ptype, count(*) jumlah_projek from users u, projects p, projects_types pt where u.id = p.id_user and pt.id = p.id_ptype group by pt.id, u.id order by u.nama_user asc, pt.id asc");
    }
}
