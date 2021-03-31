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
	public function openPage(){		//buka halaman Admin - User
		//Autentikasi level user yg boleh msk
		$userLevel = auth()->user()->id_ulevel;
		if($userLevel == 1 || $userLevel == 5){
            return view('Pages.Admin.View_AdminUsers', compact('userLevel'));
        }
        else{
            return redirect('/logout');
        }
	}

	  /**
	 *
	 *
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */

    public function create() {		//nyipain form 
		$model = new User();		//bikin objek baru buat dilempar ke form
		$levels = Users_Level::all()->pluck('nama_ulevel','id')->prepend("Pilih Role")->toArray();	//ngambil list buat ditampilin di dropdown role

		return view('Layouts.FormUsers', compact('model', 'levels'));  
    }

	public function store(Request $request){			//masukkin data baru ke tabel dari form Tambah User
		$request->validate([							//validasi input
			'inisial_user' => 'required|unique:users|max:3|min:2',
			'nama_user' => 'required|regex:/^[a-zA-Z ]*$/|max:50',
			'nama_ulevel' => 'gt:0',
			'email_user' => 'required|max:50|unique:users|regex:/^[A-Za-z\.]*@(artajasa)[.](co)[.](id)$/|'
		],

		$message = [
			'inisial_user.required' => ' Mohon isi Inisial',
				'inisial_user.unique' => ' Inisial sudah terdaftar',
				'inisial_user.max' => ' Mohon isi inisial dengan benar (max. 3 huruf)',
				'inisial_user.min' => ' Mohon isi inisial dengan benar (min. 2 huruf)',
			'nama_user.required' => ' Mohon isi Nama',
				'nama_user.max' => ' Nama maksimal 50 huruf',
				'nama_user.regex' => ' Nama hanya boleh berisi huruf',
				'nama_user.string' => ' Nama hanya boleh berisi huruf',
			'nama_ulevel.gt' => ' Mohon isi Role',
			'email_user.required' => ' Mohon isi Email',
				'email_user.max' => ' Email maksimal 50 huruf',
				'email_user.regex'=>' Mohon isi email dengan benar dan hanya berisi huruf (domain @artajasa.co.id)',
				'email_user.unique'=>' Email sudah terdaftar oleh user lain',
		]);

		$added_by = Auth::user()->inisial_user;										//ngambil inisial buat ditambah ke added_by di tabel User
		$level = Users_Level::where('id', $request->nama_ulevel)->firstOrFail();	//ngambil level yg udh dipilih di form 
		User::create([																//bikin data user baru
			'nama_user' => $request->nama_user,
			'inisial_user' => $request->inisial_user,
			'id_ulevel' => $level->id,
			'email_user' => $request->email_user,
			'added_by' => $added_by
		]);
		
		return redirect('/admin/users');
	}

    public function destroy($id){						//delete data
    	if(auth()->id() != $id){						//pembatas agar user gak bisa ngapus data sendiri
    		User::where('id', $id)->delete();		    //delete data yg dipilih
    	}

    	$userData['data'] = User::orderby("id", "asc")->get();	//ngambil data yg lain setelah delete data

	    return response()->json($userData);						//balikin data yg udh diambil ke js buat refresh table
        
    }

    public function edit($id){						   //nyiapin form Edit User
    	$model = User::where('id', $id)->firstOrFail();//ngambil data yg mau diedit
    	$levels = $this->getrole($id); 				   //ngambil data 

      	return view('Layouts.FormUsers', compact('model','levels'));
    }

    public function update(Request $request, $id){	   //edit data dari form Edit User
    	$request->validate([						   //validasi input
			'inisial_user' => "required|min:2||max:3|unique:users,inisial_user, " . $id,
			'nama_user' => 'required|regex:/^[a-zA-Z ]*$/|max:50',
			'nama_ulevel' => 'gt:0',
			'email_user' => 'required|max:50|regex:/^[A-Za-z\.]*@(artajasa)[.](co)[.](id)$/'
		],
		$message = [
			'inisial_user.required' => ' Mohon isi Inisial',
				'inisial_user.unique' => ' Inisial sudah terdaftar',
				'inisial_user.min' => ' Mohon isi inisial dengan benar (min. 2 huruf)',
				'inisial_user.max' => ' Mohon isi inisial dengan benar (max. 3 huruf)',
			'nama_user.required' => ' Mohon isi Nama',
				'nama_user.max' => ' Nama maksimal 50 huruf',
				'nama_user.regex' => ' Nama hanya boleh berisi huruf',
			'nama_ulevel.get' => ' Mohon isi Role',
			'email_user.required' => ' Mohon isi Email',
				'email_user.alpha' => ' Email hanya boleh berisi huruf',
				'email_user.max' => ' Email maksimal 50 huruf',
				'email_user.regex'=>' Mohon isi email dengan benar dan hanya berisi huruf (domain @artajasa.co.id)',
				'email_user.unique'=>' Email sudah terdaftar oleh user lain',
		]);

    	$modified_by = Auth::user()->inisial_user;	   								//ngambil inisial buat nanti dimasukkin ke modified_by di tabel User
    	$level = Users_Level::where('id', $request->nama_ulevel)->firstOrFail();	//ngambil id level berdasarkan inputan
		$model = User::where('id', $id)->firstOrFail();								//cari data user yg mau di edit
		$model->inisial_user = $request->inisial_user;								//edit inisial
		$model->nama_user = $request->nama_user;									//edit nama
		$model->email_user = $request->email_user;									//edit email
	    $model->id_ulevel = $level->id;												//edit level
	    $model->modified_by = $modified_by;											//edit modified_by
	    $model->save();																//save perubahan data
    }

	public function dataTable(){					  //generate table di halaman Admin - User
        $model = DB::select("select a.id, a.nama_user, a.inisial_user, b.nama_ulevel, a.added_by, a.modified_by from users as a, users_levels as b where a.id_ulevel = b.id and a.id_ulevel != 9");//ngambil data buat nanti ditampilin di table halaman Admin - User
        return DataTables::of($model)				  //membuat datatable berdasarkan data yg udh diambil
            ->addColumn('action', function($model){	  //nambahin yg gak ada di query, disini yg ditambah action
                return view('Layouts.ActionUser',[
                    'model'=> $model,
                    'url_edit' => route('users.edit', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function getrole($id){					  //query untuk ngurutin current level ditaro diurutan paling atas
    	$userid = $id;

    	return DB::table('users_levels')
      	->select(DB::raw('count(users.id) as jml, users_levels.id, users_levels.nama_ulevel'))
      	->leftjoin('users', function($join) use ($userid) {
      		$join->on('users.id_ulevel', '=', 'users_levels.id')
      		->where('users.id', $userid);
      	})
      	->groupBy('users_levels.id','users_levels.nama_ulevel')
      	->orderBy('jml','DESC')
      	->get()
      	->pluck('nama_ulevel', 'id')
      	->toArray();
    }
}
