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

    public function create() {
        $model = new Product();
        return view('Layouts.FormProducts', compact('model'));
    }

    public function store(Request $request){
        $request->validate([
            'nama_product' => 'required',
        ],
        $message = [
            'nama_product.required' => 'Mohon isi Nama Products'
        ]);

    	Product::create($request->all());

    	return redirect('/admin/products')->with('success','Data Product berhasil disimpan');
    }

    public function destroy($id){
        Product::where('id', $id)->delete();
        $productData['data'] = Product::orderby("id", "asc")->get();

        return response()->json($productData);
    }

    public function edit($id)
    {
      $model = Product::where('id', $id)->firstOrFail();
      return view('Layouts.FormProducts', compact('model'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_product' => 'required',
        ],
        $message = [
            'nama_product.required' => 'Mohon isi Nama Products'
        ]);

        $model = Product::where('id', $id)->firstOrFail();
        $model->nama_product = $request->nama_product;
        $model->save();
    }

    public function dataTable()
    {
        $model = Product::query();
        return DataTables::of($model)
            ->addColumn('action', function($model){
                return view('Layouts.ActionProduct',[
                    'model'=> $model,
                    'url_edit' => route('products.edit', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
