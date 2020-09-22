<?php

namespace App\Http\Controllers;

use App\User;
use App\Users_Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_AdminUsers extends Controller
{
	public function openPage(){
		$users = User::all();
		$levels = Users_Level::all();
    	$data_users = DB::select("select a.nama_user, a.inisial_user, b.nama_ulevel, a.added_by, a.modified_by from users as a, users_levels as b where a.id_ulevel = b.id_ulevel");
		//dump($data_users);
    	return view('Pages.Admin.View_AdminUsers', compact('users', 'levels', 'data_users'));
    }

      /**
	 *
	 *
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
    public function store(Request $request){
    	//return $request;

    	$request->validate([
    		'inisial_user' => 'required',
    		'nama_user' => 'required',
    		'id_ulevel' => 'required',
    		'email_user' => 'required',
        ],
        [
            'inisial_user.required' => 'Mohon isi Inisial',
            'nama_user.required' => 'Mohon isi Nama',
            'id_ulevel.required' => 'Mohon isi Role',
            'email_user.required' => 'Mohon isi Email'
    	]);

    	User::create($request->all());

    	return redirect('/admin/users')->with('status','Data User berhasil disimpan');
    }
}
