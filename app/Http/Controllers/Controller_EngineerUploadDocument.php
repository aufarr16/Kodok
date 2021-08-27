<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_EngineerUploadDocument extends Controller
{
	public function openPage(){
		return view('Pages.Engineer.View_EngineerUploadDocument');
	}

    public function upload(){

    }
}
