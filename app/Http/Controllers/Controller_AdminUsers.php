<?php

namespace App\Http\Controllers;

use App\User;
use App\Users_Level;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_AdminUsers extends Controller
{
	public function openPage(){
		return view('Pages.Admin.View_AdminUsers');
	}

	  /**
	 *
	 *
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */

    public function create() {
		$model = new User();
		$levels = Users_Level::all()->pluck('nama_ulevel')->prepend(' ');
		
		return view('Layouts.FormUsers', compact('model','levels'));  
    }

	public function store(Request $request){
		$request->validate([
			'inisial_user' => 'required|unique:users|min:3',
			'nama_user' => 'required',
			'id_ulevel' => 'required',
			'email_user' => 'required|email|unique:users|regex:/^[A-Za-z\.]*@(artajasa)[.](co)[.](id)$/'
		],
		$message = [
			'inisial_user.required' => 'Mohon isi Inisial',
				'inisial_user.unique' => 'Inisial sudah terdaftar',
				'inisial_user.min' => 'Mohon isi inisial dengan benar (3 huruf)',
			'nama_user.required' => 'Mohon isi Nama',
			'id_ulevel.required' => 'Mohon isi Role',
			'email_user.required' => 'Mohon isi Email',
				'email_user.regex'=>'Mohon isi format email dengan benar (domain @artajasa.co.id)',
				'email_user.unique'=>'Email sudah terdaftar oleh user lain',
		]);

		User::create($request->all());
		
		return redirect('/admin/users')->with('success','Data User berhasil disimpan');
	}

    public function destroy($id){
        User::where('id', $id)->delete();
        $userData['data'] = User::orderby("id", "asc")->get();

        return response()->json($userData);
    }

    public function edit($id)
    {
      $model = user::where('id', $id)->firstOrFail();
      dd($model);

      // return view('Layouts.FormUsers', compact('model'));
    }

    public function update(Request $request, $id){
    	$request->validate([
			'inisial_user' => 'required|unique:users|min:3',
			'nama_user' => 'required',
			'id_ulevel' => 'required',
			'email_user' => 'required|email|unique:users|regex:/^[A-Za-z\.]*@(artajasa)[.](co)[.](id)$/'
		],
		$message = [
			'inisial_user.required' => 'Mohon isi Inisial',
				'inisial_user.unique' => 'Inisial sudah terdaftar',
				'inisial_user.min' => 'Mohon isi inisial dengan benar (3 huruf)',
			'nama_user.required' => 'Mohon isi Nama',
			'id_ulevel.required' => 'Mohon isi Role',
			'email_user.required' => 'Mohon isi Email',
				'email_user.regex'=>'Mohon isi format email dengan benar (domain @artajasa.co.id)',
				'email_user.unique'=>'Email sudah terdaftar oleh user lain',
		]);

		$model = User::where('id', $id)->firstOrFail();
		$model->inisial_user = $request->inisial_user;
		$model->nama_user = $request->nama_user;
        $model->id_ulevel = $request->id_ulevel;
        $model->nama_product = $request->nama_product;
        $model->save();
    }

	public function dataTable()
    {
        $model = DB::select("select a.id, a.nama_user, a.inisial_user, b.nama_ulevel, a.added_by, a.modified_by from users as a, users_levels as b where a.id_ulevel = b.id");
        return DataTables::of($model)
            ->addColumn('action', function($model){
                return view('Layouts.ActionUser',[
                    'model'=> $model,
                    'url_edit' => route('users.edit', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
