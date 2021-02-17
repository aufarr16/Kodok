<?php

namespace App\Http\Controllers;

use App\Product;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Controller_AdminProducts extends Controller
{
    public function openPage(){
        //Autentikasi level user yg boleh msk
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 1 || $userLevel == 5){
            return view('Pages.Admin.View_AdminProducts', compact('userLevel'));
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
        $model = new Product();             //membuat variable product baru untuk dilempar dan diisi di form Tambah Product
        return view('Layouts.FormProducts', compact('model'));
    }

    public function store(Request $request){
        $request->validate([                //validasi input pada form Tambah Product
            'nama_product' => 'required|max:24|regex:/^[a-zA-Z ]*$/',
        ],
        $message = [
            'nama_product.required' => ' Mohon isi Nama Products',
                'nama_product.max' => ' Nama Products maksimal 24 huruf',
                'nama_product.regex' => ' Nama Products hanya boleh berisi huruf',
        ]);

        $added_by = Auth::user()->inisial_user;             //mengambil inisial untuk nanti dimasukkan ke kolom added_by pada tabel Product
    	Product::create([                                   //menambah data product baru
            'nama_product' => $request->nama_product,
            'added_by' => $added_by
        ]);

    	return redirect('/admin/products')->with('success','Data Product berhasil disimpan');
    }

    public function destroy($id){
        Product::where('id', $id)->delete();                //mencari data product dan menghapusnya
        $productData['data'] = Product::orderby("id", "asc")->get();    //mengambil semua data product setelah menghapus data

        return response()->json($productData);              //melempar data product 
    }

    public function edit($id)
    {
      $model = Product::where('id', $id)->firstOrFail();    //mengambil data yg akan diedit untuk ditempel di form Edit Product
      return view('Layouts.FormProducts', compact('model'));
    }

    public function update(Request $request, $id){
        $request->validate([                                //validasi input pada form Edit Product
            'nama_product' => 'required|max:24|regex:/^[a-zA-Z ]*$/',
        ],
        $message = [
            'nama_product.required' => ' Mohon isi Nama Products',
                'nama_product.max' => ' Nama Products maksimal 24 huruf',
                'nama_product.regex' => ' Nama Products hanya boleh berisi huruf',
        ]);

        $modified_by = Auth::user()->inisial_user;          //mengabil inisial user untuk diisi di kolom modified_by pada tabel Product
        $model = Product::where('id', $id)->firstOrFail();  //mengambil data yg akan diedit
        $model->nama_product = $request->nama_product;      //edit nama product
        $model->modified_by = $modified_by;                 //edit modified_by
        $model->save();                                     //menyimpan perubahan
    }

    public function dataTable()
    {
        $model = Product::query();                          //mengambil semua data product
        return DataTables::of($model)                       //membuat datatable
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
