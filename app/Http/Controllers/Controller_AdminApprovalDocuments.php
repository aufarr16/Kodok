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

    public function approvalDocument(Request $request){                         //approve / decline project yg perlu approval
        $this->authorize('isAdmin', auth()->user());
        
        $id = $request->input('id');                                            //simpen data id projek
        $type = $request->input('title');                                       //simpen jenis approval, pengujian / projek done
        $notes = $request->input('notes');

        $project = Project::where('id', $id)->firstOrFail();                    //ambil data projek yg mau diapprove
        $pstat = $project->stats_temp;                                          //ambil stats yg mau di approve / decline
        if($type == "Confirm Approval"){                                         //kalo approve, maka
            if($pstat == 3){                                                    //kalo stat tujuannya pengujian done
                $project->pketerangan_status = "Pengujian Done Approved By Adminn, Menunggu Approval By Manager";       //approved by admin, mennunggu manager
            }
            else if($pstat == 5){                                               //kalo stat tujuannya projek done
                $project->pketerangan_status = "Projek Done Approved By Admin, Menunggu Approval By Manager";          //approved by admin, mennunggu manager
            }

            $project->id_pketerangan = 2;
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

        $project->pketerangan_note = $notes;
        $project->save();                                                       //save semua perubahan yg ada
    }

    public function dataTable()                                                 //generate table di halaman Manager - Aprroval
    {
        $admin = auth()->user()->id;
        $data = DB::table('projects')
            ->select(DB::raw('projects.id, users.inisial_user, products.nama_product, projects_types.nama_ptype, mitras.nama_mitra, projects.nama_project, DATE(projects.waktu_assign_project) as waktu, projects_stats.id as id_pstat'))
            ->leftjoin('users', 'projects.id_current_pic', '=', 'users.id')
            ->leftjoin('products', 'projects.id_product', '=', 'products.id')
            ->leftjoin('projects_types', 'projects.id_ptype', '=', 'projects_types.id')
            ->leftjoin('projects_stats', 'projects.stats_temp', '=', 'projects_stats.id')
            ->leftjoin('projects_keterangan', 'projects.id_pketerangan', '=', '4')
            ->whereIn('projects.stats_temp', [3,5])
            ->where('projects.id_current_pic', '!=', $admin)
            ->orderBy('waktu','DESC')
            ->get();                                                            //ngambil data buat di tabel
        return DataTables::of($data)                                            //buat data berdasarkan data yg udh diambil
            ->addColumn('action', function($data){                              //tambah kolom action
                return view('Layouts.ActionApprovalDocument',[
                    'data'=> $data,
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
