<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\MessageBag;

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
        $request->validate([
            'email' => 'required|email|regex:/^[A-Za-z\.]*@(artajasa)[.](co)[.](id)$/',
            'password' => 'required'
        ],
        $message = [
            'email.required' => 'Mohon isi Email',
                'email.regex'=>'Mohon isi format email dengan benar (domain @artajasa.co.id)',
            'password.required' => "Mohon isi Password",
        ]);

        $ldap_con = ldap_connect("10.90.2.253");
        $email = $request->email;
        $password = $request->password;

        if(@ldap_bind($ldap_con, $email, $password)){
            $hashedpassword = Hash::make($password);

            $user = User::where('email_user', $email)->first();
            if($user == null){  //insert new guest data
                $user = User::create([
                    'id_ulevel' => '4',
                    'nama_user' => 'Guest',
                    'email_user' => $email,
                    'inisial_user' => 'GST',
                    'password' => $password
                ]);
                
                $user = User::where('email_user', $email)->firstOrFail();
            }

            $user->password = $hashedpassword;
            $user->save();

            $credentials = array('email_user' => $email, 'password' => $password); 

            // dd(Auth::attempt($credentials)); //check auth status
            if(Auth::attempt($credentials)){    //auth laravel
                switch($user->id_ulevel){
                    case '1':
                        return redirect('/admin/users');
                    case '2':
                        return redirect('/manager/home');
                    case '3':
                        return redirect('/engineer/projects');
                    case '4':
                        return redirect('/guest/searchdocs');
                    case '5':
                        return redirect('/login/choose');
                }

            } 
            
        } else{
            return redirect("/")->withErrors('Username / Password yang Anda Masukkan Salah');
        }
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}
