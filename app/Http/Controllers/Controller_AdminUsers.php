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
    	return view('View_AdminUsers', compact('users', 'levels', 'data_users'));
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
    	User::create($request->all());

    	return redirect('/admin/users');
    }
}
