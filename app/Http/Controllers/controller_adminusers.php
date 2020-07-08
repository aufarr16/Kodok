<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller_adminusers extends Controller
{
    public function openPage(){
    	return view('view_adminusers');
    }
}
