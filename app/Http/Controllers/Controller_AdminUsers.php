<?php

namespace App\Http\Controllers;

use App\User;
use App\Users_Level;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
		$levels = Users_Level::all()->pluck('nama_ulevel','id')->toArray();

		return view('Layouts.FormUsers', compact('model', 'levels'));  
    }

	public function store(Request $request){
		dd($request);

		$request->validate([
			'inisial_user' => 'required|unique:users|min:3',
			'nama_user' => 'required',
			'nama_ulevel' => 'required',
			'email_user' => 'required|email|unique:users|regex:/^[A-Za-z\.]*@(artajasa)[.](co)[.](id)$/'
		],
		$message = [
			'inisial_user.required' => 'Mohon isi Inisial',
				'inisial_user.unique' => 'Inisial sudah terdaftar',
				'inisial_user.min' => 'Mohon isi inisial dengan benar (3 huruf)',
			'nama_user.required' => 'Mohon isi Nama',
			'nama_ulevel.required' => 'Mohon isi Role',
			'email_user.required' => 'Mohon isi Email',
				'email_user.regex'=>'Mohon isi format email dengan benar (domain @artajasa.co.id)',
				'email_user.unique'=>'Email sudah terdaftar oleh user lain',
		]);

		$added_by = Auth::user()->inisial_user;
		$level = Users_Level::where('id', $request->id_ulevel)->firstOrFail();
		User::create([
			'nama_user' => $request->nama_user,
			'inisial_user' => $request->inisial_user,
			'id_ulevel' => $level->id,
			'email_user' => $request->email_user,
			'added_by' => $added_by
		]);
		
		return redirect('/admin/users')->with('success','Data User berhasil disimpan');
	}

    public function destroy($id){
        User::where('id', $id)->delete();
        $userData['data'] = User::orderby("id", "asc")->get();

        return response()->json($userData);
    }

    public function edit($id){
    	$model = User::where('id', $id)->firstOrFail();
      $levels = $this->getrole($id);

      return view('Layouts.FormUsers', compact('model','levels'));
    }

    public function getrole($id){
    	$userid = $id;
    	return DB::table('users_levels')
      ->select(DB::raw('count(users.id) as jml, users_levels.id, users_levels.nama_ulevel'))
      ->leftjoin('users', function($join) use ($userid) {
      	$join->on('users.id_ulevel', '=', 'users_levels.id')
      	->where('users.id',$userid);
      })
      ->groupBy('users_levels.id','users_levels.nama_ulevel')
      ->orderBy('jml','DESC')
      ->get()
      ->pluck('nama_ulevel')
      ->toArray();
    }

    public function update(Request $request, $id){
    	$request->validate([
			'inisial_user' => 'required|min:3|unique:users,inisial_user,' .$id,
    	// 'inisial_user' => 'required|min:3|unique:users,inisial_user,',
			'nama_user' => 'required',
			'id_ulevel' => 'required',
			// 'email_user' => 'required|email|regex:/^[A-Za-z\.]*@(artajasa)[.](co)[.](id)$/'
			'email_user' => 'required|unique:users,email_user,'.$id,'|email|regex:/^[A-Za-z\.]*@(artajasa)[.](co)[.](id)$/'
		],
		$message = [
			'inisial_user.required' => 'Mohon isi Inisial',
				// 'inisial_user.unique' => 'Inisial sudah terdaftar',
				'inisial_user.min' => 'Mohon isi inisial dengan benar (3 huruf)',
			'nama_user.required' => 'Mohon isi Nama',
			'id_ulevel.required' => 'Mohon isi Role',
			'email_user.required' => 'Mohon isi Email',
				'email_user.regex'=>'Mohon isi format email dengan benar (domain @artajasa.co.id)',
				'email_user.unique'=>'Email sudah terdaftar oleh user lain',
		]);

    	$modified_by = Auth::user()->inisial_user;
    	$level = Users_Level::where('id', $request->id_ulevel)->firstOrFail();
			$model = User::where('id', $id)->firstOrFail();
				$model->inisial_user = $request->inisial_user;
				$model->nama_user = $request->nama_user;
	      $model->id_ulevel = $level->id;
	      $model->modified_by = $modified_by;
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
