<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_ManagerApprovalProjects extends Controller
{
    public function openPage(){
    	return view('View_ManagerApprovalProjects'); 	
    }
}
