<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerHome extends Controller
{
    public function openPage(){
    	return view('Pages.Manager.View_ManagerHome'); 	
    }
}
