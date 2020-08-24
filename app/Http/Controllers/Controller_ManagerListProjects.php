<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class Controller_ManagerListProjects extends Controller
{
    public function openPage(){
    	$data_projek = DB::select("select a.inisial_user, a.nama_user, b.nama_product, c.nama_ptype, d.nama_mitra, e.nama_project, e.waktu_assign_project, f.id_pstat, f.nama_pstat from users as a, products as b, projects_types as c, mitras as d, projects as e, projects_stats as f where e.id_user = a.id_user and e.id_product = b.id_product and e.id_ptype = c.id_ptype and e.ABA = d.ABA and e.id_pstat = f.id_pstat");
    	//dump($data_projek);
    	return view('View_ManagerListProjects', ['data_projek' => $data_projek]); 	
    }
}
