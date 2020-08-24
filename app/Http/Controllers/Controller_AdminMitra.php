<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_AdminMitra extends Controller
{
    public function openPage(){
    	$data_mitra = DB::select("select * from mitras");
    	//dump($data_mitra);
    	return view('View_AdminMitra', ['data_mitra' => $data_mitra]);
    }
}
