<?php

namespace App\Http\Controllers;

use App\Mitra;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_AdminMitra extends Controller
{
    public function openPage(){
    	return view('Pages.Admin.View_AdminMitra');
    }

      /**
	 *
	 *
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
    public function store(Request $request){
    	// return $request;

        $request->validate([
            'ABA' => 'required|min:3|unique:mitras',
            'nama_mitra' => 'required',
        ],
        $message = [
            'ABA.required' => 'Mohon isi ABA',
              'ABA.min' => 'Mohon isi ABA minimal 3 angka',
              'ABA.unique'=>'ABA sudah terdaftar',
            'nama_mitra.required' => 'Mohon isi Nama Mitra',
        ]);

    	Mitra::create($request->all());

    	return redirect('/admin/mitra')->with('success','Data Mitra berhasil disimpan');
    }

    public function destroy($ABA){
        Mitra::where('ABA', $ABA)->delete();
        $mitraData['data'] = Mitra::orderby("ABA", "asc")->get();

        return response()->json($mitraData);
    }

    public function edit($ABA){
        
    }

    public function get(){
        $all_mitra['data'] = Mitra::orderby("ABA", "asc")->get();

        return response()->json($all_mitra);
    }

    public function dataTable()
    {
        $model = Mitra::query();
        return DataTables::of($model)
            ->addColumn('action', function($model){
                return view('Layouts.ActionMitra',[
                    'model'=> $model,
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
