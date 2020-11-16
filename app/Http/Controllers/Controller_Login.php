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

        // dd(ldap_bind($ldap_con, $email, $password));
        if(@ldap_bind($ldap_con, $email, $password)){
            // echo "Bind Successfull";

            $user = User::where('email_user', $email)->first();
            if($user == null){
                $user = User::create([
                    'id_ulevel' => '4',
                    'nama_user' => 'Guest',
                    'email_user' => $email,
                    'inisial_user' => 'GST',
                    'password' => $password
                ]);
                
                $user = User::where('email_user', $email)->firstOrFail();
            }

            if($user->password == NULL){
                $user->password = $password;
                $user->save();
            }

            $credentials = array('email_user' => $email, 'password' => $password); 

            // dd(Auth::attempt($credentials));
            if(Auth::attempt($credentials)){
                // dd($user);
                switch($user->id_ulevel){
                    case '1':
                        return view('Pages.Admin.View_AdminSearchDocuments', compact('user'));
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

    public function insertGuestData(){

    }
}
