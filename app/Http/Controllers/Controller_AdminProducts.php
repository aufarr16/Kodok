<?php

namespace App\Http\Controllers;

use App\Product;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_AdminProducts extends Controller
{
    public function openPage(){
    	return view('Pages.Admin.View_AdminProducts');
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
            'nama_product' => 'required',
        ],
        [
            'nama_product.required' => 'Mohon isi Nama Products'
        ]);

    	Product::create($request->all());

    	return redirect('/admin/products')->with('success','Data Product berhasil disimpan');
    }

        public function dataTable()
    {
        $model = Product::query();
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
