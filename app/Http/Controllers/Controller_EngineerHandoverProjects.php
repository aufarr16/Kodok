<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_EngineerHandoverProjects extends Controller
{
    public function openPage(){
    	return view('Pages.Engineer.View_EngineerHandoverProjects');
    }
}
