<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_AdminUsers extends Controller
{
	public function openPage(){
    	$data_users = DB::select("select a.nama_users, a.inisial_users, b.nama_ulevel, a.added_by, a.modified_by from users as a, users_levels as b where a.id_ulevel = b.id_ulevel");
		//dump($data_users);
    	return view('View_AdminUsers', ['data_users' => $data_users]);
    }
}
