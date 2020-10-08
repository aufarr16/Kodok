<?php

namespace App\Http\Controllers;

use App\Mitra;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_AdminMitra extends Controller
{
    public function openPage(){
    	$data_mitra = Mitra::all();
    	//dump($data_mitra);
        
    	return view('Pages.Admin.View_AdminMitra', compact('data_mitra'));
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

    public function get(){
        $all_mitra['data'] = Mitra::orderby("ABA", "asc")->get();

        return response()->json($all_mitra);
    }

    public function dataTable()
    {
        $model = Mitra::query();
        return DataTables::of($model)
            ->addColumn('action', function($model){
                return view('Layouts.Action',[
                    'model'=> $model,
                    // 'url_edit' => url('', $model->id),
                    // 'url_destroy' => route('mitra.delete', $model->ABA),
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
