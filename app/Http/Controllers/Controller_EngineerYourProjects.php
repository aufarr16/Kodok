<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_EngineerYourProjects extends Controller
{
    public function openPage(){
    	return view('Pages.Engineer.View_EngineerYourProjects');
    }

    // return redirect('/engineer/handover')->with('success','Document berhasil di upload');
}
