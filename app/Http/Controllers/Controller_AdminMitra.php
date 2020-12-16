<?php

namespace App\Http\Controllers;

use App\Mitra;
use DataTables;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function create() {
        $model = new Mitra();
        return view('Layouts.FormMitra', compact('model'));
    }

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

        $added_by = Auth::user()->inisial_user;

        $model = Mitra::create([
            'ABA' => $request->ABA,
            'nama_mitra' => $request->nama_mitra,
            'added_by' => $added_by
        ]);

        return $model;
    }

    public function destroy($id){
        Mitra::where('id', $id)->delete();
        $mitraData['data'] = Mitra::orderby("id", "asc")->get();

        return response()->json($mitraData);
    }

    public function get(){
        $all_mitra['data'] = Mitra::orderby("id", "asc")->get();

        return response()->json($all_mitra);
    }

    public function edit($id)
    {
      $model = Mitra::where('id', $id)->firstOrFail();
      return view('Layouts.FormMitra', compact('model'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'ABA' => 'required|min:3',
            'nama_mitra' => 'required',
        ],
        $message = [
            'ABA.required' => 'Mohon isi ABA',
              'ABA.min' => 'Mohon isi ABA minimal 3 angka',
            'nama_mitra.required' => 'Mohon isi Nama Mitra',
        ]);

        $modified_by = Auth::user()->inisial_user;
        $model = Mitra::where('id', $id)->firstOrFail();
        $model->ABA = $request->ABA;
        $model->nama_mitra = $request->nama_mitra;
        $model->modified_by = $modified_by;
        $model->save();

        // return true;
    }

    public function dataTable()
    {
        $model = Mitra::query();
        return DataTables::of($model)
            ->addColumn('action', function($model){
                return view('Layouts.ActionMitra',[
                    'model'=> $model,
                    'url_edit' => route('mitra.edit', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
