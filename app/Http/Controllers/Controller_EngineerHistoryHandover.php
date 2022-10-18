<?php

namespace App\Http\Controllers;

use DataTables;
use App\Project;
use App\Projects_Stat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_EngineerHistoryHandover extends Controller
{
    public function openPage(){         //buka halaman Engineer - Project Done (Handover)
        //Autentikasi level user yg boleh msk
        $this->authorize('isEngineer', auth()->user());

        $userLevel = auth()->user()->id_ulevel;
        return view('Pages.Engineer.View_EngineerHistoryHandover', compact('userLevel'));
    }

    public function dataTable(){                            //generate table halaman Engineer - Project Done (Handover)
        $userId = auth()->id();                             //ngambil id user yg lagi login
        $project = $this->getProjectData($userId);          //ngambil data2 projek yg punya user yg lagi login
        return DataTables::of($project)                     //bikin tabel berdasarkan data projek yg sudah diambil
            ->addColumn('keterangan', function($project){   //nambah kolom keterangan
                return view('Layouts.KeteranganProject',[
                    'project'=> $project,
                    'url_notes' => route('keterangan.notes', $project->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['keterangan'])
            ->make(true);
    }

    public function getProjectData($id){                    //ngambil data2 projek user yg sedang login
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.nama_project, projects.pketerangan_status, products.nama_product, projects_types.nama_ptype, projects.id_pstat, mitras.nama_mitra, date(projects.waktu_assign_project) as tanggal_assign'))
        ->leftjoin('products', 'projects.id_product', '=', 'products.id')
        ->leftjoin('projects_types', 'projects.id_ptype', '=', 'projects_types.id')
        ->leftjoin('mitras', 'projects.id_mitra', '=', 'mitras.id')
        ->leftjoin('projects_handovers', 'projects.id', '=', 'projects_handovers.id_project')
        ->where('projects_handovers.id_user', $id)
        ->where('status_handover', '=', '0')
        ->orderBy('tanggal_assign', 'desc')
        ->get();
    }
}
