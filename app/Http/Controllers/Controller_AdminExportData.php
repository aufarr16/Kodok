<?php

namespace App\Http\Controllers;

use App\Mitra;
use App\Product;
use App\Project;
use App\Projects_Handover;
use App\Projects_Keterangan;
use App\Projects_Stat;
use App\Projects_Type;
use App\User;
use App\Users_Level;
use DataTables;
use App\Exports\ProjectsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class Controller_AdminExportData extends Controller
{
    public function openPage(){
    	$userLevel = auth()->user()->id_ulevel;
    	if($userLevel == 1 || $userLevel == 5){                                //Autentikasi level user yg boleh msk
            return view('Pages.Admin.View_AdminExportData', compact('userLevel'));  
        }
        else{
            return redirect('/logout');
        }
    }
}
