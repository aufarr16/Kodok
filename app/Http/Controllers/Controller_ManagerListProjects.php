<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_ManagerListProjects extends Controller
{
    public function openPage(){
    	return view('View_ManagerListProjects'); 	
    }
}
