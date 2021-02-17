<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_GuestSearchDocuments extends Controller
{
    public function openPage(){
        //Autentikasi level user yg boleh msk
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 4){
            return view('Pages.Guest.View_GuestSearchDocuments');        
        }
        else{
            return redirect('/logout');
        }
    }

    public function dataTable()
    {
        $data = DB::select("select a.nama_mitra, b.id, d.nama_product ,b.nama_project, c.inisial_user, YEAR(b.waktu_assign_project) as tahun from mitras as a, projects as b, users as c, products as d where b.id_mitra = a.id and b.id_user = c.id and b.id_product = d.id ORDER BY `b`.`id` DESC");
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
