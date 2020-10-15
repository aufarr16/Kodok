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
        ]);
        // [
        //     'nama_product.required' => 'Mohon isi Nama Products'
        // ]);

    	// Product::create($request->all());
        $model = Product::create($request->all());
        return $model;
    	// return redirect('/admin/products')->with('success','Data Product berhasil disimpan');
    }

    public function destroy($id_product){
        Product::where('id_product', $id_product)->delete();
        $productData['data'] = Product::orderby("id_product", "asc")->get();

        return response()->json($productData);
    }

    public function dataTable()
    {
        $model = Product::query();
        return DataTables::of($model)
            ->addColumn('action', function($model){
                return view('Layouts.ActionProduct',[
                    'model'=> $model,
                    // 'url_edit' => route('products.edit', $model->id_product),
                    // 'url_destroy' => route('mitra.delete', $model->ABA),
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create() {
        $model = new Product();
        return view('Layouts.FormProducts', compact('model'));
    }

    public function update(){

    }

    public function edit($id)
    {
      $model = Product::findOrFail($id);
      return view('Layouts.FormProducts', compact('model'));
    }
}
