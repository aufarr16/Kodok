<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_ManagerHome extends Controller
{
    public function openPage(){
    	return view('Pages.Manager.View_ManagerHome'); 	
    }
}
