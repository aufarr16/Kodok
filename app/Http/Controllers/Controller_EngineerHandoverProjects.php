<?php

namespace App\Http\Controllers;

use DataTables;
use App\Project;
use App\Projects_Stat;
use App\Projects_Handover;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_EngineerHandoverProjects extends Controller
{
    public function openPage(){         //buka halaman Engineer - Project On Going (Handover)
        //Autentikasi level user yg boleh msk
        $this->authorize('isEngineer', auth()->user());

        $userLevel = auth()->user()->id_ulevel;
        return view('Pages.Engineer.View_EngineerHandoverProjects', compact('userLevel'));
    }
    
    public function handoverDone(Request $request){                 //balikin projek handoveran ke pemilik aslinya
        $this->authorize('isEngineer', auth()->user());
        
        $id = $request->input('id');
        $project = $this->getProjectById($id);    //ngambil data projek yg mau dibalikin

        $project->id_current_pic = $project->id_original_pic;       //ngubah pic skrng menjadi original picnya
        $project->status_handover = 0;                              //status handover diubah menjadi 0 soalnya udh selesai handoevernya

        $handover = Projects_Handover::where('id_project', $id)->orderBy('handover_order', 'desc')->firstOrFail();  //ngambil data handover_projectnya
        $handover->is_active = 0;                                   //ngubah is_activenya jadi 0 soalnya udh selesai handoevernya

        $project->save();                                           //save perubahan data2 di project yg udh dilakukan
        $handover->save();                                          //save perubahan data2 di project_handover yg udh dilakukan
    }

    public function dataTable(){                                    //generate tabel halaman Engineer - Own Project (Handover)
        $userId = auth()->id();                                     //ngambil id user yg lagi login
        $project = $this->getHandoverData($userId);                 //ngambil data projek handoveran punya user yg lagi login
        $pstat = Projects_Stat::where('id', '!=', 1)->get();        //ngambil pstat kecuali reserve buat ditampilin di dropdown status
        return DataTables::of($project)                             //bikin tabel berdasarkan data projek user yg lagi login
            ->addColumn('status', function($project) use ($pstat){  //nambah kolom buat ganti status
                return view('Layouts.StatusProject',[
                    'project'=> $project,
                    'pstat'=> $pstat
                ]);
            })
            ->addColumn('keterangan', function($project){           //nambah kolom buat keterangan projek
                return view('Layouts.KeteranganProject',[
                    'project'=> $project,
                    'url_notes' => route('keterangan.notes', $project->id)
                ]);
            })
            ->addColumn('action', function($project){               //nambah kolom buat action
                return view('Layouts.ActionHandover',[
                    'project'=> $project,
                    'url_pic' => route('pic.edit', $project->id),
                    'url_progress' => route('progress.edit', $project->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['status', 'keterangan', 'action'])
            ->make(true);
    }

    public function getHandoverData($id){                           //ngambil data buat ditampilin di halaman Engineer - Own Project (Handover)
    	return DB::table('projects')
        ->select(DB::raw('projects.id, projects.nama_project, projects.pketerangan_status, projects.pketerangan_note, products.nama_product, projects_types.nama_ptype, projects.id_pstat, projects_stats.nama_pstat, mitras.nama_mitra, date(projects.waktu_assign_project) as tanggal_assign'))
        ->leftjoin('products', 'projects.id_product', '=', 'products.id')
        ->leftjoin('projects_types', 'projects.id_ptype', '=', 'projects_types.id')
        ->leftjoin('projects_stats', 'projects.id_pstat', '=', 'projects_stats.id')
        ->leftjoin('mitras', 'projects.id_mitra', '=', 'mitras.id')
        ->where('id_current_pic', $id)
        ->where('status_handover', '=', '1')
        ->whereNotIn('id_pstat', [5,7])
        ->orderBy('tanggal_assign', 'desc')
        ->get();
    }

    public function getProjectById($id){                            //ngambil data projek bersdasarkan idnya
        return Project::where('id', $id)->firstOrFail();
    }
}
