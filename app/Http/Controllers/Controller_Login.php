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

    public function authenticate(Request $request){
        // dd($request->all());
        $ldap_con = ldap_connect("10.90.2.253");
        $ldap_uname = $request->username;
        $ldap_password = $request->password;

        if(ldap_bind($ldap_con, $ldap_uname, $ldap_password)){
            echo "Bind Successfull";
        } else{
            echo "Bind Fail";
        }
    }

    public function postLogin(Request $request){
    	// dd($request->all());
    	$username = $request->username;
    	$password = $request->password;
    }

    
}
