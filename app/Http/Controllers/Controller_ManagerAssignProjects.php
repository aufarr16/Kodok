<?php

namespace App\Http\Controllers;

use App\Project;
use App\Projects_Handover;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerAssignProjects extends Controller
{
    public function openPage(){
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 2){
            $products = DB::select("select * from products order by nama_product asc");
            $mitras = DB::select("select * from mitras order by nama_mitra asc");
            $ptypes = DB::select("select * from projects_types order by nama_ptype asc");
            $users = $this->getUser();
            return view('Pages.Manager.View_ManagerAssignProjects', compact('users', 'products','mitras','ptypes'));
        }
        else{
            return redirect('/logout');
        }
    }

    public function storeNew(Request $request){
    	// return $request;

        $request->validate([
            'id_user' => 'required',
            'id_product' => 'required',
            'id_ptype' => 'required',
            'id_mitra' => 'required',
            'nama_project' => 'required|max:201',
        ],
        $message = [
            'id_user.required' => 'Mohon pilih PIC',
            'id_product.required' => 'Mohon pilih product',
            'id_ptype.required' => 'Mohon pilih jenis project',
            'id_mitra.required' => 'Mohon pilih nama mitra',
            'nama_project.required' => 'Mohon isi nama project',
                'nama_project.max' => 'Nama project max 201 kata',
        ]);

        $newproject = Project::create([
            'id_current_pic' => $request->id_user,
            'id_original_pic' => $request->id_user,
            'id_product' => $request->id_product,
            'id_ptype' => $request->id_ptype,
            'id_mitra' => $request->id_mitra,
            'nama_project' => $request->nama_project
        ]);

    	return redirect('/manager/assign')->with('success','Project berhasil di assign');
    }

    public function storeHandover(Request $request){ 
        $request->validate([
            'id_user1' => 'required',
            'nama_project2' => 'required',
            'PIChandover' => 'required',
        ],
        $message = [
            'id_user1.required' => 'Mohon pilih PIC Utama',
            'nama_project2.required' => 'Mohon pilih project',
            'PIChandover.required' => 'Mohon pilih PIC handover',
        ]);

        $handoveredproject = Project::where('id', $request->nama_project2)->firstOrFail(); 
        $handoveredproject->id_current_pic = $request->PIChandover;
        $handoveredproject->status_handover = 1;
        $handoveredproject->handover_counter = $handoveredproject->handover_counter + 1;
        $handoveredproject->save(); 

        if($prevhandover = Projects_Handover::where('id_project', $request->nama_project2)->orderby('handover_order', 'desc')->firstOrFail()){
            $prevhandover->is_active = 0;
            $prevhandover->save();
        }

        $newhandover = Projects_Handover::create([
            'id_user' => $request->PIChandover,
            'id_project' => $request->nama_project2,
            'handover_order' => $handoveredproject->handover_counter
        ]);

        return redirect('/manager/assign')->with('success','Project berhasil di handover');
    }

    public function fillProject($userId=0){
        $projData['data'] = Project::orderby("nama_project","asc")
        ->select('id', 'nama_project')
        ->where('id_current_pic', $userId)
        ->whereNotIn('id_pstat', [5,7])
        ->get();

        return response()->json($projData);
    }

    public function fillNewPIC($userId=0){
        $userData['data'] = User::orderby("nama_user","asc")
        ->select('id', 'nama_user')
        ->where('id', '!=', $userId)
        ->where('id_ulevel', '=', '3')->orWhere('id_ulevel', '=', '5')
        ->get();

        return response()->json($userData);
    }

    public function getUser(){
        // return User::select(DB::raw('*'))->where('id_ulevel', '=', 3)->orWhere('id_ulevel', '=', 5)->get();
        return User::select(DB::raw('*'))->where('id_ulevel', '=', 3)->orWhere('id_ulevel', '=', 4)->orWhere('id_ulevel', '=', 5)->get();
    }
}
