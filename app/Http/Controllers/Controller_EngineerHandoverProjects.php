<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_EngineerHandoverProjects extends Controller
{
    public function openPage(){
    	return view('Pages.Engineer.View_EngineerHandoverProjects');
    }

    // return redirect('/engineer/handover')->with('success','Handover sudah selesai');

    // return redirect('/engineer/handover')->with('success','Document berhasil di upload');
}
