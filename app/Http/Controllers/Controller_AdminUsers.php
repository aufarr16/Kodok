<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_AdminUsers extends Controller
{
    public function openPage(){
    	return view('View_AdminUsers');
    }
}
