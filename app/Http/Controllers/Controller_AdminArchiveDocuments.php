<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_AdminArchiveDocuments extends Controller
{
    public function openPage(){
    	$data_archive = DB::select("select a.inisial_users, b.nama_ptype, c.nama_projek from users as a, projects_types as b, projects as c where a.id_user = c.id_user and b.id_ptype = c.id_ptype");
    	//dump($data_archive);
    	return view('View_AdminArchiveDocuments', ['data_archive' => $data_archive]);
    }
}