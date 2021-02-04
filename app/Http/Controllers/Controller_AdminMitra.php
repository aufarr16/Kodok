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
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 1 || $userLevel == 5){
            return view('Pages.Admin.View_AdminMitra', compact('userLevel'));
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

    public function create() {
        $model = new Mitra();
        return view('Layouts.FormMitra', compact('model'));
    }

    public function store(Request $request){
    	// return $request;

        $request->validate([
            'ABA' => 'required|min:3|max:13|unique:mitras',
            'nama_mitra' => 'required|max:51',
        ],
        $message = [
            'ABA.required' => ' Mohon isi ABA',
              'ABA.min' => ' Mohon isi ABA minimal 3 angka',
              'ABA.max' => ' Mohon isi ABA maksimal 13 angka',
              'ABA.unique'=>' ABA sudah terdaftar',
            'nama_mitra.required' => ' Mohon isi Nama Mitra',
                'nama_mitra.max' => ' Nama Mitra maksimal 51 huruf',
                'nama_mitra.regex' => ' Nama Mitra hanya boleh berisi huruf',
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
            'ABA' => 'required|min:3|max:13|unique:mitras,ABA, ' .$id,
            'nama_mitra' => 'required|max:51',
        ],
        $message = [
            'ABA.required' => ' Mohon isi ABA',
              'ABA.min' => ' Mohon isi ABA minimal 3 angka',
              'ABA.max' => ' Mohon isi ABA maksimal 13 angka',
            'nama_mitra.required' => ' Mohon isi Nama Mitra',
                'nama_mitra.max' => ' Nama Mitra maksimal 51 huruf',
                'nama_mitra.regex' => ' Nama Mitra hanya boleh berisi huruf',
        ]);

        $modified_by = Auth::user()->inisial_user;
        $model = Mitra::where('id', $id)->firstOrFail();
        $model->ABA = $request->ABA;
        $model->nama_mitra = $request->nama_mitra;
        $model->modified_by = $modified_by;
        $model->save();
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
