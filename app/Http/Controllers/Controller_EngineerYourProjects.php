<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_EngineerYourProjects extends Controller
{
    public function openPage(){
    	return view('Pages.Engineer.View_EngineerYourProjects');
    }

    	// notif ketika submit file
    	// return redirect('/engineer/projects')->with('success','Dokumen berhasil di upload');
    	// return redirect('/engineer/projects')->with('error','Mohon upload file dengan format:docx|doc|xls|xlsx|jpg|jpeg|png|pdf|zip|rar');

    	// Notif ketika klik button ok (merubah status)
}
