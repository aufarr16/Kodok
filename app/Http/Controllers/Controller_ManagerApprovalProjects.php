<?php

namespace App\Http\Controllers;

use DataTables;
use App\Project;
use App\Projects_Handover;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerApprovalProjects extends Controller
{
    public function openPage(){             //buka halaman Manager - Approval
        //Autentikasi level user yg boleh msk
        $this->authorize('isManager', auth()->user());

        $userLevel = auth()->user()->id_ulevel;
        return view('Pages.Manager.View_ManagerApprovalProjects', compact('userLevel'));  
    }

    public function approvalProject(Request $request){                          //approve / decline project yg perlu approval
        $this->authorize('isManager', auth()->user());
        
        $id = $request->input('id');                                            //simpen data id projek
        $type = $request->input('title');                                       //simpen jenis approval, pengujian / projek done

        $project = Project::where('id', $id)->firstOrFail();                    //ambil data projek yg mau diapprove
        $pstat = $project->stats_temp;                                          //ambil stats yg mau di approve / decline
        if($type == "Confirm Approval"){                                         //kalo approve, maka
            if($pstat == 3){                                                    //kalo stat tujuannya pengujian done
                $project->pketerangan_status = "Pengujian Done Approved By Manager";       //ubah keterangannya jadi pengujian done aaproved
            }
            else if($pstat == 5){                                               //kalo stat tujuannya projek done
                $project->pketerangan_status = "Projek Done Approved By Manager";          //ubah keterangannya jadi projek done approved

                if($project->status_handover == 1){                             //kalo ternyata dia diubah dari projek handoveran
                    $handover = Projects_Handover::where('id_project', $id)->orderBy('handover_order', 'desc')->firstOrFail();  //ambil data handover terakhir
                    $handover->is_active = 0;                                   //id_active dibuat 0 menandakan handover selesai
                    $handover->save();                                          //simpen perubahan data handover
                }
                
                $project->status_handover = 0;                                  //ubah status handovernya jadi 0 juga karena handover dianggap selesai
            }

            $project->id_pstat = $project->stats_temp;                          //karena sudah approve statusnya, maka baru diubah statnya disini
            $project->id_pketerangan = 1;                                       //dan keterangannya menjadi approved
            $project->stats_temp = NULL;
        }
        else if($type == "Decline Approval"){                                   //kalo decline, maka
            if($pstat == 3){                                                    //kalo stat tujuannya pengujian done, maka
                $project->pketerangan_status = "Pengujian Done Declined By Manager";       //keterangannya jadi pengujian done decline
                $project->id_pstat = 2;                                         //statnya dimundurin jadi on progress    
            }
            else if($pstat == 5){                                               //kalo stat tujuannya projek done, maka
                $project->pketerangan_status = "Projek Done Declined By Manager";          //keterangannya jadi projek done decline
                $project->id_pstat = 4;                                         //statnya dimundurin jadi monitoring
            }

            $project->id_pketerangan = 3;                                       //keterangannya dibuat jadi decline
        }

        $project->save();                                                       //save semua perubahan yg ada
    }

    public function dataTable()                                                 //generate table di halaman Manager - Aprroval
    {
        $data = DB::select("select a.id, a.nama_project, b.inisial_user, c.nama_product, d.nama_ptype, e.nama_pstat, a.pketerangan_status from projects as a, users as b, products as c, projects_types as d, projects_stats as e where a.id_current_pic = b.id and a.id_product = c.id and a.id_ptype = d.id and a.stats_temp = e.id and a.id_pketerangan = 2 and (a.stats_temp = 3 or a.stats_temp = 5) order by a.waktu_assign_project asc");    //ngambil data buat di tabel
        return DataTables::of($data)                                            //buat data berdasarkan data yg udh diambil
            ->addColumn('action', function($data){                              //tambah kolom action
                return view('Layouts.ActionApprovalProject',[
                    'data'=> $data,
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
