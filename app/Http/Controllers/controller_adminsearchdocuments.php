<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_AdminSearchDocuments extends Controller
{
    public function openPage(){
    	return view('View_AdminSearchDocuments');
    }
}
