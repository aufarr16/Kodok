<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        if(@ldap_bind($ldap_con, $email, $password)){
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

            $user->password = $password;
            $user->save();

            $credentials = array('email_user' => $email, 'password' => $password); 

            // dd(Auth::attempt($credentials)); //check auth status
            if(Auth::attempt($credentials)){    //auth laravel
                // $name = Auth::user()->nama_user;
                // dd($name);
                switch($user->id_ulevel){
                    case '1':
                        return redirect('/admin/searchdocs');
                    case '2':
                        return view('Pages.Manager.View_ManagerHome', compact('user'));
                    case '3':
                        return view('Pages.Engineer.View_EngineerYourProjects', compact('user'));
                    case '4':
                        return view('Pages.Guest.View_GuestSearchDocuments', compact('user'));
                    case '5':
                        return redirect('/login/choose');
                }

            } 
        } else{
            return redirect("/");
        }
    }
}
