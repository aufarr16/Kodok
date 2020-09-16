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
            'ABA' => 'required',
            'nama_mitra' => 'required',
        ]);

    	Mitra::create($request->all());

    	return redirect('/admin/mitra')->with('status','');
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
}
