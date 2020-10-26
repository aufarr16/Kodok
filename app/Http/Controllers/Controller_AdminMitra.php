<?php

namespace App\Http\Controllers;

use App\Mitra;
use DataTables;
use Response;
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

        $model = Mitra::create($request->all());
        return $model;
    }

    public function destroy($ABA){
        Mitra::where('ABA', $ABA)->delete();
        $mitraData['data'] = Mitra::orderby("ABA", "asc")->get();

        return response()->json($mitraData);
    }

    public function get(){
        $all_mitra['data'] = Mitra::orderby("ABA", "asc")->get();

        return response()->json($all_mitra);
    }

    public function create() {
        $model = new Mitra();
        return view('Layouts.FormMitra', compact('model'));
    }

    public function edit($ABA)
    {
      $model = Mitra::where('ABA', $ABA)->firstOrFail();
      return view('Layouts.FormMitra', compact('model'));
    }

    public function update(Request $request){
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

        Mitra::where('ABA', $request->ABA)->update($request->all());
    }

    public function dataTable()
    {
        $model = Mitra::query();
        return DataTables::of($model)
            ->addColumn('action', function($model){
                return view('Layouts.ActionMitra',[
                    'model'=> $model,
                    'url_edit' => route('mitra.edit', $model->ABA)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
