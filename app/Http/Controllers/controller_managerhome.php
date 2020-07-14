<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller_managerhome extends Controller
{
    public function openPage(){
    	return view('view_managerhome'); 	
    }
}
