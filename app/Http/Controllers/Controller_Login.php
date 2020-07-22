<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Login extends Controller
{
    public function openLogin(){
    	return view('View_Login'); 	
    }
    public function openChooseLogin(){
    	return view('View_Login5ChooseRole'); 	
    }
}
