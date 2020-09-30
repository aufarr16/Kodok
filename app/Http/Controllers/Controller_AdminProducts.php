<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_AdminProducts extends Controller
{
    public function openPage(){
    	$data_products = Product::all();
    	//dump($data_products);
    	return view('Pages.Admin.View_AdminProducts', compact('data_products'));
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

    	return redirect('/admin/products')->with('submit_success','Data Product berhasil disimpan');
    }
}
