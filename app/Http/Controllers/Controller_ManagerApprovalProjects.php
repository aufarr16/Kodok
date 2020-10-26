<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerApprovalProjects extends Controller
{
    public function openPage(){
    	return view('Pages.Manager.View_ManagerApprovalProjects'); 	
    }

    public function dataTable()
    {
        $data = DB::select("select a.nama_project, b.inisial_user, c.nama_product, d.nama_ptype, e.nama_pstat, a.pketerangan_status from projects as a, users as b, products as c, projects_types as d, projects_stats as e where a.id_user = b.id and a.id_product = c.id and a.id_ptype = d.id and a.id_pstat = e.id and a.id_pketerangan = 2 and (e.id = 3 or e.id = 4) order by a.waktu_assign_project asc");
        return DataTables::of($data)
            ->addColumn('docs', function($data){
                return view('Layouts.DocsApproval',[
                    'data'=> $data,
                ]);
            })
            ->addColumn('action', function($data){
                return view('Layouts.ActionApproval',[
                    'data'=> $data,
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
