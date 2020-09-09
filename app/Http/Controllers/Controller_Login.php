<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Controller_Login extends Controller
{
    public function openLogin(){
    	return view('View_Login'); 	
    }
    
    public function openChooseLogin(){
    	return view('View_Login5ChooseRole'); 	
    }


    public function postLogin(Request $request){
    	// dd($request->all());
    	$username = $request->username;
    	$password = $request->password;
    }
}
