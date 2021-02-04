<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_AdminArchiveDocuments extends Controller
{
    public function openPage(){
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 1 || $userLevel == 5){
            return view('Pages.Admin.View_AdminArchiveDocuments', compact('userLevel'));
        }
        else{
            return redirect('/logout');
        }
    }

    public function dataTable()
    {
        $data = DB::select("select a.inisial_user, b.nama_ptype, c.nama_project, c.id from users as a, projects_types as b, projects as c where a.id = c.id_user and b.id = c.id_ptype");
        return DataTables::of($data)
            ->addColumn('details', function($data){
                return view('Layouts.StatusArchive',[
                    'data'=> $data,
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['details'])
            ->make(true);
    }
}