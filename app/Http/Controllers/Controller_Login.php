<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $email = $request->email;
        $password = $request->password;

        if(ldap_bind($ldap_con, $email, $password)){
            // echo "Bind Successfull";

            $user = User::where('email_user', $email)->firstOrFail();
            if($user->password == NULL){
                $user->password = $password;
                $user->save();
            }

            $credentials = array('email_user' => $email, 'password' => $password); 

            // dd(Auth::attempt($credentials));
            if(Auth::attempt($credentials)){

                switch($user->id_ulevel){
                    case '1':
                        return redirect('/admin/searchdocs')->with(compact('user'));
                    case '2':
                        return redirect('/manager/home')->with(compact('user'));
                    case '3':
                        return redirect('/engineer/projects')->with('user', $user);
                    case '4':
                        return redirect('/guest/searchdocs')->with(compact('user'));
                    case '5':
                        return redirect('/login/choose');
                }

            } 
        } else{
            return redirect('/');
        }
    }
}
