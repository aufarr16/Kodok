<?php

namespace App\Http\Controllers;

use App\Project;
use App\Projecs_Handover;
use App\User;
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
        return $request;

        // $request->validate([
        //     'id_user' => 'required',
        //     'id_project' => 'required',
        // ]);

        // Projects_Handover::create(
        //     $request->all());

        // return redirect('/manager/assign')->with('status', '');
    }

    public function fillProject($userId=0){
        $empData['data'] = Project::orderby("nama_project","asc")->select('id_project', 'nama_project')->where('id_user', $userId)->get();

        return response()->json($empData);
    }

    public function fillNewPIC($userId=0){
        $empData['data'] = User::orderby("nama_user","asc")->select('id_user', 'nama_user')->where('id_user', '!=', $userId)->get();

        return response()->json($empData);
    }
}
