<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_EngineerDocumentsTools extends Controller
{
    public function openPage(){
    	return view('Pages.Engineer.View_EngineerDocumentsTools');
    }

    // return redirect('/engineer/doctools')->with('success','Folder berhasil dibuat');
}
