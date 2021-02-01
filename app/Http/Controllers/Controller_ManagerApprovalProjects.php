<?php

namespace App\Http\Controllers;

use App\Project;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerApprovalProjects extends Controller
{
    public function openPage(){
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 2){
            return view('Pages.Manager.View_ManagerApprovalProjects');  
        }
        else{
            return redirect('/logout');
        }
    }

    public function approvalProject(Request $request){
        $id = $request->input('id');
        $type = $request->input('title');

        // dd($id);

        $project = Project::where('id', $id)->firstOrFail();
        $pstat = $project->stats_temp;
        if($type == "Confirm Aproval"){
            if($pstat == 3){
                $project->pketerangan_status = "Pengujian Done Approved";
            }
            else if($pstat == 5){
                $project->pketerangan_status = "Projek Done Approved";
            }

            $project->id_pstat = $project->stats_change;
            $project->id_pketerangan = 1;
        }
        else if($type == "Decline Approval"){
            if($pstat == 3){
                $project->pketerangan_status = "Pengujian Done Declined";
            }
            else if($pstat == 5){
                $project->pketerangan_status = "Projek Done Declined";
            }

            $project->id_pketerangan = 3;
            $project->id_pstat = 2;
        }

        $project->stats_temp = NULL;
        $project->save();
    }

    public function dataTable()
    {
        $data = DB::select("select a.id, a.nama_project, b.inisial_user, c.nama_product, d.nama_ptype, e.nama_pstat, a.pketerangan_status from projects as a, users as b, products as c, projects_types as d, projects_stats as e where a.id_current_pic = b.id and a.id_product = c.id and a.id_ptype = d.id and a.stats_change = e.id and a.id_pketerangan = 2 and (e.id = 3 or e.id = 5) order by a.waktu_assign_project asc");
        return DataTables::of($data)
            // ->addColumn('docs', function($data){
            //     return view('Layouts.DocsApproval',[
            //         'data'=> $data,
            //     ]);
            // })
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
