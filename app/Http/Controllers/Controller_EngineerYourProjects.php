<?php

namespace App\Http\Controllers;

use DataTables;
use App\User;
use App\Project;
use App\Projects_Stat;
use App\Projects_Handover;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_EngineerYourProjects extends Controller
{
    public function openPage(){
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 3 || $userLevel == 5){
            return view('Pages.Engineer.View_EngineerYourProjects', compact('userLevel'));
        }
        else{
            return redirect('/logout');
        }
    }

    public function changeStatus(Request $request){
        // dd($request);

        $id = $request->input('id');
        $pstat = $request->input('pstat');
        $project = $this->getProjectById($id);

        if($pstat == 3){
            $project->stats_temp = $pstat;
            $project->pketerangan_status = "Menunggu Approval Pengujian Done";
            $project->id_pketerangan = 2;
        }
        else if($pstat == 5){
            $project->stats_temp = $pstat;
            $project->pketerangan_status = "Menunggu Approval Projek Done";
            $project->id_pketerangan = 2;
        }
        else if($pstat == 7){
            $project->id_pstat = $pstat;
            $project->pketerangan_status = "Projek Drop";

            if($project->status_handover == 1){
                $handover = Projects_Handover::where('id_project', $id)->orderBy('handover_order', 'desc')->firstOrFail();
                $handover->is_active = 0;
                $handover->save();
            }

            $project->status_handover = 0;
        }
        else {
            $project->id_pstat = $pstat;
            if($project->id_pketerangan != 3){
                $project->pketerangan_status = "";
                $project->id_pketerangan = 1;
            }
        }

        $project->save();
    }

    public function editProgress($id){
        $project = $this->getProjectById($id);
        $sit = $project->progress_sit;
        $uat = $project->progress_uat;

        return view('Layouts.FormProgress', compact('project', 'sit', 'uat'));
    }

    public function changeProgress(Request $request, $id){
        $request->validate([
            'progress_sit' => 'required|max:3|regex:/^[0-9\.]*[,][%]$/|',
            'progress_uat' => 'required|max:3|regex:/^[0-9\.]*[,][%]$/|',
        ],
        $message = [
            'progress_sit.required' => ' Mohon isi Progress SIT',
              'progress_sit.max' => ' Mohon isi Progress SIT max 3 angka',
              'progress_sit.regex' => ' Progress SIT hanya berisi angka',
            'progress_uat.required' => ' Mohon isi Progress uat',
              'progress_uat.max' => ' Mohon isi Progress uat max 3 angka',
              'progress_uat.regex' => ' Progress uat hanya berisi angka',
        ]);

        $project = $this->getProjectById($id);

        $project->progress_sit = $request->progress_sit;
        $project->progress_uat = $request->progerss_uat;

        $project->save();
    }

    public function editBussinessPIC($id){
        $project = $this->getProjectById($id);          //ngambil data projek yg dipilih
        $currentproduct = $project->id_pic_product;     //ngambil pic product skrng
        $currentam = $project->id_pic_am;               //ngambil pic am skrng
        $currentpm = $project->id_pic_pm;               //ngambil pic pm skrng

        //ngambil data buat ngisi dropdown
        $listproduct = $this->getUserByLevel(6);
        $listam = $this->getUserByLevel(7);
        $listpm = $this->getUserByLevel(8);

        return view('Layouts.FormPic', compact('project', 'currentproduct', 'currentam', 'currentpm', 'listproduct', 'listam', 'listpm'));
    }

    public function changeBussinessPIC(Request $request, $id){
        $project = $this->getProjectById($id);

        $product = $this->getUserByName($request->id_pic_product);
        $am = $this->getUserByName($request->id_pic_am);
        $pm = $this->getUserByName($request->id_pic_pm);

        $project->id_pic_product = $product->id;
        $project->id_pic_am = $am->id;
        $project->id_pic_pm = $pm->id;

        $project->save();
    }

    public function dataTable()
    {
        $userId = auth()->id();
        $project = $this->getProjectData($userId);
        $pstat = Projects_Stat::where('id', '!=', 1)->get();
        return DataTables::of($project)
            ->addColumn('status', function($project) use ($pstat){
                return view('Layouts.StatusProject',[
                    'project'=> $project,
                    'pstat'=> $pstat
                ]);
            })
            ->addColumn('keterangan', function($project){
                return view('Layouts.KeteranganProject',[
                    'project'=> $project
                ]);
            })
            ->addColumn('action', function($project){
                return view('Layouts.ActionProject',[
                    'project'=> $project,
                    'url_pic' => route('pic.edit', $project->id),
                    'url_progress' => route('progress.edit', $project->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['status', 'keterangan','action'])
            ->make(true);
    }

    public function getProjectData($id){
    	return DB::table('projects')
    	->select(DB::raw('projects.id, projects.nama_project, projects.pketerangan_status, projects.pketerangan_note, products.nama_product, projects_types.nama_ptype, projects.id_pstat, projects_stats.nama_pstat, mitras.nama_mitra, date(projects.waktu_assign_project) as tanggal_assign'))
    	->leftjoin('products', 'projects.id_product', '=', 'products.id')
    	->leftjoin('projects_types', 'projects.id_ptype', '=', 'projects_types.id')
        ->leftjoin('projects_stats', 'projects.id_pstat', '=', 'projects_stats.id')
    	->leftjoin('mitras', 'projects.id_mitra', '=', 'mitras.id')
    	->where('id_current_pic', $id)
        ->where('status_handover', '=', '0')
        ->whereNotIn('id_pstat', [5,7])
    	->orderBy('tanggal_assign', 'desc')
    	->get();
    }

    public function getProjectById($id){
        return Project::where('id', $id)->firstOrFail();
    }

    public function getUserByLevel($level){
        return User::where('id_ulevel', $level)->toArray();
    }

    public function getUserByName($name){
        return User::where('nama_user', $name)->firstOrFail();
    }
}
