<?php

namespace App\Http\Controllers;

use App\Project;
use App\Product;
use App\Mitra;
use App\Projects_Type;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerAssignProjects extends Controller
{
    public function openPage(){
    	//return Mitra::all();
    	$projects = Project::all();
    	$products = Product::all();
    	$mitras = Mitra::all();
    	$ptypes = Projects_Type::all();
    	$users = User::all();
    	return view('View_ManagerAssignProjects', compact('users','products','mitras','ptypes', 'projects')); 	
    }

    /**
	 *
	 *
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
    public function store(Request $request){
    	//return $request;
    	Project::create($request->all());

    	return redirect('/manager/assign');
    }
}
