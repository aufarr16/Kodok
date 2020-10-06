<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_EngineerHandoverProjects extends Controller
{
    public function openPage(){
    	return view('Pages.Engineer.View_EngineerHandoverProjects');
    }

    // Notif ketika klik button upload file
    // return redirect('/engineer/handover')->with('success','Dokumen berhasil di upload');
	// return redirect('/engineer/handover')->with('error','Mohon upload file dengan format:docx|doc|xls|xlsx|jpg|jpeg|png|pdf|zip|rar'');

	// Notif ketika klik button selesai handover
	// return redirect('/engineer/handover')->with('success','Handover sudah selesai. Terimakasih');
 	// return redirect('/engineer/handover')->with('info','Tetap handover. Semangat');
}
