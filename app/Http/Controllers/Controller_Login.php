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
    public function openLogin(){                                //buka halaman login
    	return view('View_Login');
    }
    
    public function openChooseLogin(){                          //buka halaman buat milih hak akses khusus admin x engineer
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 5){                                    //jika yang login admin x eengineer, maka diarahkan ke halaman choose login
            return view('View_Login5ChooseRole');   
        }
        else{
            return redirect('/logout');                         
        }
    }

    public function openDeveloperHub(){
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 11){                            
            return view('View_DeveloperHub');   
        }
        else{
            return redirect('/logout');
        }
    }

    public function authenticate(Request $request){             //autentikasi data login
        // dd($request->all()); 
        $request->validate([                                    //validasi data login    
            'email' => 'required|email|regex:/^[A-Za-z\.]*@(artajasa)[.](co)[.](id)$/',
            'password' => 'required'
        ],
        $message = [                                            //jika format data yang dimasukkan salah, maka akan mengeluarkan warning seperti dibawah
            'email.required' => 'Mohon isi Email',              //jika email tidak diisi
                'email.regex'=>'Mohon isi format email dengan benar (domain @artajasa.co.id)',  //jika email yang dimasukkan bukan domain artajasa
            'password.required' => "Mohon isi Password",        //jika password kosong
        ]);

        $ldap_con = ldap_connect("10.90.2.253");                //inisialisasi ip koneksi ldap
        $email = $request->email;                               //menyimpan data email dari input login
        $password = $request->password;                         //menyimpan data password dari input login

        if(@ldap_bind($ldap_con, $email, $password)){           //start koneksi ldap, if true (data email dan password match), maka
            $hashedpassword = Hash::make($password);            //buat password tersebut menjadi bentuk hash untuk dimasukkan ke tabel user

            $user = User::where('email_user', $email)->first(); //ambil data user berdasarkan email
            if($user == null){                                  //kalo datanya tidak ada di db kodok, maka
                $user = User::create([                          //simpan data baru dan set role user sebagai Guest   
                    'id_ulevel' => '4',
                    'nama_user' => 'Guest',
                    'email_user' => $email,
                    'inisial_user' => 'GST',
                    'password' => $password
                ]);
                
                $user = User::where('email_user', $email)->firstOrFail();   //ngambil data user karena $user isinya NULL makanya butuh diisi lagi dengan data baru
            }

            $user->password = $hashedpassword;                  //masukkan password yg sudah dihash
            $user->save();                                      //save data user

            $credentials = array('email_user' => $email, 'password' => $password);  //buat variabel untuk autentikasi dari laravel

            if(Auth::attempt($credentials)){                    //auth laravel
                switch($user->id_ulevel){                       //redirect berdasarkan level user yg login
                    case '1':                                   //1 = admin
                        return redirect('/admin/users');
                    case '2':                                   //2 = manager
                        return redirect('/manager/home');
                    case '3':                                   //3 = engineer
                        return redirect('/engineer/projects');
                    case '4':                                   //4 = guest
                        return redirect('/logout');
                    case '5':                                   //5 = admin x engineer
                        return redirect('/login/choose');
                    case '6':                                   //6 = product
                        return redirect('/logout');
                    case '7':                                   //7 = AM
                        return redirect('/logout');
                    case '8':                                   //8 = PM
                        return redirect('/logout');
                    case '9':                                   //9 = eksekutif
                        return redirect('/eksekutif/home');
                    case '10':                                  //10 = POH
                        return redirect('/engineer/listprojects');
                    case '11':                                  //11 = developer
                        return redirect('/login/developer');
                }
            } 
            
        } else{                                                 //jika email dan password tidak match, maka akan mengeluarkan warning
            return redirect("/")->withErrors('Username / Password yang Anda Masukkan Salah');
        }
    }

    public function logout(){
        Auth::logout();                                         //menjalankan fungsi logout bawaan laravel

        return redirect('/');                                   //redirect ke halaman login
    }
}
