<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_AdminProducts extends Controller
{
    public function openPage(){
    	return view('View_AdminProducts');
    }
}
