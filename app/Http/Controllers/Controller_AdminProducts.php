<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_AdminProducts extends Controller
{
    public function openPage(){
    	$data_products = DB::select("select * from products");
    	//dump($data_products);
    	return view('View_AdminProducts', ['data_products' => $data_products]);
    }
}
