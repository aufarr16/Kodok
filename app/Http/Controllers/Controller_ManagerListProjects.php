<?php

namespace App\Http\Controllers;

use App\Project;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class Controller_ManagerListProjects extends Controller
{
    public function openPage(){
    	return view('Pages.Manager.View_ManagerListProjects'); 	
    }

    public function dataTable()
    {
        $data = DB::select("select e.id, a.inisial_user, a.nama_user, b.nama_product, c.nama_ptype, d.nama_mitra, e.nama_project, DATE(e.waktu_assign_project) as waktu, f.id as id_pstat from users as a, products as b, projects_types as c, mitras as d, projects as e, projects_stats as f where e.id_user = a.id and e.id_product = b.id and e.id_ptype = c.id and e.id_mitra = d.id and e.id_pstat = f.id");
        return DataTables::of($data)
            ->addColumn('nama_project', function($data){
                return view('Layouts.ClickableText',[
                    'data'=> $data,
                ]);
            })
            ->addColumn('id_pstat', function($data){
                return view('Layouts.Status',[
                    'data'=> $data,
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['nama_project', 'id_pstat'])
            ->make(true);
    }
}
