<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_GuestSearchDocuments extends Controller
{
    public function openPage(){
    	$data_search = DB::select("select nama_mitra, nama_projek, inisial_users, YEAR(waktu_assign_projek) as tahun from mitras as a, projects as b, users as c where b.ABA = a.ABA and b.id_user = c.id_user");
    	//dump($data_search);
    	return view('View_GuestSearchDocuments', ['data_search' => $data_search]);
    }
}
