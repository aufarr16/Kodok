<?php

namespace App\Http\Controllers;

use DataTables;
use App\Project;
use App\Projects_Stat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_EngineerHistoryProjects extends Controller
{
    public function openPage(){         //buka halaman Engineer - Project Done (Own Project)
        //Autentikasi level user yg boleh msk
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 3 || $userLevel == 5){
            return view('Pages.Engineer.View_EngineerHistoryProjects', compact('userLevel'));
        }
        else{
            return redirect('/logout');
        }
    }

    public function dataTable(){                            //generate table di halaman Engineer - Project Done (Own Project)
        $userId = auth()->id();                             //ngambil id user yg lagi login
        $project = $this->getProjectData($userId);          //ngambil data2 projek user yg lagi login
        return DataTables::of($project)                     //bikin tabel berdasarkan data2 yg udh diambil
            ->addColumn('keterangan', function($project){   //nambah kolom keterangan
                return view('Layouts.KeteranganProject',[
                    'project'=> $project
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['keterangan'])
            ->make(true);
    }

    public function getProjectData($id){                    //ngambil data projek2 dari user yg lagi login
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.nama_project, projects.pketerangan_status, products.nama_product, projects_types.nama_ptype, projects.id_pstat, mitras.nama_mitra, date(projects.waktu_assign_project) as tanggal_assign'))
        ->leftjoin('products', 'projects.id_product', '=', 'products.id')
        ->leftjoin('projects_types', 'projects.id_ptype', '=', 'projects_types.id')
        ->leftjoin('mitras', 'projects.id_mitra', '=', 'mitras.id')
        ->where('id_original_pic', '=', $id)
        ->whereIn('id_pstat', [5,7])
        ->orderBy('tanggal_assign', 'desc')
        ->get();
    }
}
