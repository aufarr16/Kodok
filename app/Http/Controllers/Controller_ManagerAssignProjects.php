<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerAssignProjects extends Controller
{
    public function openPage(){
    	//return Mitra::all();
    	$products = DB::select("select * from products order by nama_product asc");
    	$mitras = DB::select("select * from mitras order by nama_mitra asc");
    	$ptypes = DB::select("select * from projects_types order by nama_ptype asc");
    	$users = DB::select("select * from users order by nama_user asc");
    	return view('View_ManagerAssignProjects', compact('users','products','mitras','ptypes')); 	
    }

    public function storeNew(Request $request){
    	// return $request;

        $request->validate([
            'id_user' => 'required',
            'id_product' => 'required',
            'id_ptype' => 'required',
            'id_ABA' => 'required',
            'nama_project' => 'required',
        ]);

    	Project::create($request->all());

    	return redirect('/manager/assign')->with('status', '');
    }

    public function storeHandover(Request $request){
        // return $request;

        $request->validate([
            'id_user' => 'required',
            'id_project' => 'required',
        ]);

        Project::create($request->all());

        return redirect('/manager/assign')->with('status', '');
    }

    public function fillProject(){
        echo 'masuk';
    }

}
