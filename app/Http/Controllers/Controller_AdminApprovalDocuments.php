<?php

namespace App\Http\Controllers;

use DataTables;                         //impport library DataTables
use App\User;                           //import model User     
use App\Project;                        //import model Project
use App\Projects_Handover;              //import model Projects_Handover
use Illuminate\Http\Request;            //impport library Request
use Illuminate\Support\Facades\DB;      //impport library DB

class Controller_AdminApprovalDocuments extends Controller
{
    public function openPage(){                         //buka halaman Manager - Approval
        $this->authorize('isAdmin', auth()->user());    //Autentikasi level user yg boleh msk

        $userLevel = auth()->user()->id_ulevel;         
        return view('Pages.Admin.View_AdminApprovalDocuments', compact('userLevel'));  
    }

    public function approvalDocument(Request $request){                         //approve / decline project yg perlu approval
        $this->authorize('isAdmin', auth()->user());
        
        $id = $request->input('id');                                            //simpen data id projek
        $type = $request->input('title');                                       //simpen jenis approval, pengujian / projek done
        $notes = $request->input('notes');
        $approver = auth()->user();
        $project = Project::where('id', $id)->firstOrFail();                    //ambil data projek yg mau diapprove
        $pic = User::where('inisial_user', '=', $project->approver_document)->firstOrFail(); 
        $pstat = $project->stats_temp;                                          //ambil stats yg mau di approve / decline

        if($type == "Confirm Approval"){                                         //kalo approve, maka
            if($pstat == 3){                                                    //kalo stat tujuannya pengujian done
                $project->pketerangan_status = "Pengujian Done Approved By Admin, Menunggu Approval By Manager";       //approved by admin, mennunggu manager
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
        }

        $pic->beban_approve = $pic->beban_approve - 1;                          //menambahkan flag beban_approve
        $pic->save();                                                           //save perubahan yg telah dilakukan

        $project->pketerangan_note = $notes;                                    
        $project->approver_document = $approver->inisial_user;
        $project->save();                                                       //save semua perubahan yg ada
    }

    public function dataTable()                                                 //generate table di halaman Admin - Aprroval
    {
        $approver = auth()->user()->id;
        $data = DB::table('projects')
            ->select(DB::raw('projects.id_pketerangan, projects.id, users.inisial_user, products.nama_product, projects_types.nama_ptype, projects.nama_project, projects.pketerangan_status, projects.approver_document, DATE(projects.waktu_assign_project) as waktu'))
            ->leftjoin('users', 'projects.id_current_pic', '=', 'users.id')
            ->leftjoin('products', 'projects.id_product', '=', 'products.id')
            ->leftjoin('projects_types', 'projects.id_ptype', '=', 'projects_types.id')
            ->leftjoin('projects_stats', 'projects.stats_temp', '=', 'projects_stats.id')
            ->whereIn('projects.stats_temp', [3,5])
            ->where('projects.id_pketerangan', 4)
            ->orderBy('waktu','DESC')
            ->get();    
                                                                                //ngambil data buat di tabel
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
