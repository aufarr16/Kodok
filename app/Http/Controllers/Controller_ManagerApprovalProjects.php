<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerApprovalProjects extends Controller
{
    public function openPage(){
    	$data_approval = DB::select("select a.nama_project, b.inisial_user, c.nama_product, d.nama_ptype, e.nama_pstat from projects as a, users as b, products as c, projects_types as d, projects_stats as e where a.id_user = b.id_user and a.id_product = c.id_product and a.id_ptype = d.id_ptype and a.id_pstat = e.id_pstat and a.id_pketerangan = 2 and (e.id_pstat = 3 or e.id_pstat = 4) order by a.waktu_assign_project asc");
    	//dump($data_approval);
    	return view('Pages.Manager.View_ManagerApprovalProjects', ['data_approval' => $data_approval]); 	
    }
}
