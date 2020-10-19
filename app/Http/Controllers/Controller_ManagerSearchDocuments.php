<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerSearchDocuments extends Controller
{
    public function openPage(){
    	return view('Pages.Manager.View_ManagerSearchDocuments'); 	
    }

    public function dataTable()
    {
        $data = DB::select("select a.nama_mitra, b.id_project, d.nama_product ,b.nama_project, c.inisial_user, YEAR(b.waktu_assign_project) as tahun from mitras as a, projects as b, users as c, products as d where b.ABA = a.ABA and b.id_user = c.id_user and b.id_product = d.id_product ORDER BY `b`.`id_project` DESC");
        return DataTables::of($data)
            ->addColumn('action', function($data){
                return view('Layouts.ActionSearchdoc',[
                    'data'=> $data,
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
