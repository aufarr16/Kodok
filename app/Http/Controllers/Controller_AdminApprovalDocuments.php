<?php

namespace App\Http\Controllers;

use DataTables;
use App\Project;
use App\Projects_Handover;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_AdminApprovalDocuments extends Controller
{
    public function openPage(){             //buka halaman Manager - Approval
        //Autentikasi level user yg boleh msk
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 1 || $userLevel == 1){
            return view('Pages.Admin.View_AdminApprovalDecuments', compact('userLevel'));  
        }
        else{
            return redirect('/logout');
        }
    }

    public function approvalDocument(Request $request){                          //approve / decline project yg perlu approval
        $id = $request->input('id');                                            //simpen data id projek
        $type = $request->input('title');                                       //simpen jenis approval, pengujian / projek done

        $project = Project::where('id', $id)->firstOrFail();                    //ambil data projek yg mau diapprove
        $pstat = $project->stats_temp;                                          //ambil stats yg mau di approve / decline
        if($type == "Confirm Aproval"){                                         //kalo approve, maka
            if($pstat == 3){                                                    //kalo stat tujuannya pengujian done
                $project->pketerangan_status = "Pengujian Done Approved By Adminn, Menunggu Approval By Manager";       //ubah keterangannya jadi pengujian done approved
                $project->id_pketerangan = 2;
            }
            else if($pstat == 5){                                               //kalo stat tujuannya projek done
                $project->pketerangan_status = "Projek Done Approved By Admin, Menunggu Approval By Manager";          //ubah keterangannya jadi projek done approved
                $project->id_pketerangan = 2;
            }
        }
        else if($type == "Decline Approval"){                                   //kalo decline, maka
            if($pstat == 3){                                                    //kalo stat tujuannya pengujian done, maka
                $project->pketerangan_status = "Pengujian Done Declined By Admin";       //keterangannya jadi pengujian done decline
                $project->id_pstat = 2;                                         //statnya dimundurin jadi on progress    
            }
            else if($pstat == 5){                                               //kalo stat tujuannya projek done, maka
                $project->pketerangan_status = "Projek Done Declined By Admin"; //keterangannya jadi projek done decline
                $project->id_pstat = 4;                                         //statnya dimundurin jadi monitoring
            }

            $project->id_pketerangan = 5;                                       //keterangannya dibuat jadi decline
            $project->stats_temp = NULL;                                            //stat_tempnya dibuat NULL karena sudah digunakan
        }

        $project->save();                                                       //save semua perubahan yg ada
    }

    public function dataTable()                                                 //generate table di halaman Manager - Aprroval
    {
        $data = DB::select("select a.id, a.nama_project, b.inisial_user, c.nama_product, d.nama_ptype, e.nama_pstat, a.pketerangan_status from projects as a, users as b, products as c, projects_types as d, projects_stats as e where a.id_current_pic = b.id and a.id_product = c.id and a.id_ptype = d.id and a.stats_temp = e.id and a.id_pketerangan = 4 and (e.id = 3 or e.id = 5) order by a.waktu_assign_project asc");    //ngambil data buat di tabel
        return DataTables::of($data)                                            //buat data berdasarkan data yg udh diambil
            ->addColumn('action', function($data){                              //tambah kolom action
                return view('Layouts.ActionApproval',[
                    'data'=> $data,
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
