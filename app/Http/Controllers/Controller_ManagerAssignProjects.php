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
    	return view('Pages.Manager.View_ManagerAssignProjects', compact('users','products','mitras','ptypes')); 	
    }

    public function storeNew(Request $request){
    	//return $request;


        $request->validate([
            'id_user' => 'required',
            'id_product' => 'required',
            'id_ptype' => 'required',
            'ABA' => 'required',
            'nama_project' => 'required',
        ],
        $message = [
            'id_user.required' => 'Mohon pilih PIC',
            'id_product.required' => 'Mohon pilih product',
            'id_ptype.required' => 'Mohon pilih jenis project',
            'ABA.required' => 'Mohon pilih nama mitra',
            'nama_project.required' => 'Mohon isi nama project',
        ]);

    	Project::create($request->all());

    	return redirect('/manager/assign')->with('success','Project berhasil di assign');
    }

    public function storeHandover(Request $request){    
        return $request;

        $request->validate([
            'id_user' => 'required',
            'id_project' => 'required',
            'PIChandover' => 'required',
        ],
        $message = [
            'id_user.required' => 'Mohon pilih PIC Utama',
            'id_project.required' => 'Mohon pilih project',
            'PIChandover.required' => 'Mohon pilih PIC handover',
        ]);

        Projects_Handover::create($request->all());

        return redirect('/manager/assign')->with('success','Project berhasil di handover');
    }

    public function fillProject($userId=0){
        $projData['data'] = Project::orderby("nama_project","asc")->select('id', 'nama_project')->where('id_user', $userId)->get();

        return response()->json($projData);
    }

    public function fillNewPIC($userId=0){
        $userData['data'] = User::orderby("nama_user","asc")->select('id', 'nama_user')->where('id', '!=', $userId)->get();

        return response()->json($userData);
    }
}
