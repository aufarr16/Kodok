<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_EngineerSearchDocuments extends Controller
{
    public function openPage(){
    	$data_search = DB::select("select nama_mitra, nama_project, inisial_user, YEAR(waktu_assign_project) as tahun from mitras as a, projects as b, users as c where b.ABA = a.ABA and b.id_user = c.id_user");
    	return view('View_EngineerSearchDocuments', ['data_search' => $data_search]);
    }
}
