<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller_adminarchivedocuments extends Controller
{
    public function openPage(){
    	return view('view_adminarchivedocuments');
    }
}