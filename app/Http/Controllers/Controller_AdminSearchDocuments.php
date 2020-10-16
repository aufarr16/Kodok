<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_AdminSearchDocuments extends Controller
{
    public function openPage(){
    	return view('Pages.Admin.View_AdminSearchDocuments');
    }
    public function dataTable()
    {
        $data = DB::select("select a.nama_mitra, b.id_project, b.nama_project, c.inisial_user, YEAR(b.waktu_assign_project) as tahun from mitras as a, projects as b, users as c where b.ABA = a.ABA and b.id_user = c.id_user order by b.waktu_assign_project desc");
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
