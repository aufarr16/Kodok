<?php

namespace App\Http\Controllers;

use DataTables;
use App\Exports\MitrasExport;
use App\Exports\ProductsExport;
use App\Exports\ProjectsExport;
use App\Exports\ProjectsHandoversExport;
use App\Exports\ProjectsKeterangansExport;
//use App\Exports\DocumentsExport;
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

    // public function exportDocument(){
    // 	return (new DocumentsExport)->download('[DB Kodok] documents');
    // }

    public function exportMitra(){
    	return (new MitrasExport)->download('[DB Kodok] mitras.xslx');
    }

    public function exportProduct(){
    	return (new ProductsExport)->download('[DB Kodok] products.xslx');
    }

    public function exportProject(){
    	return (new ProjectsExport)->download('[DB Kodok] projects.xslx');
    }

    public function exportHandover(){
    	return (new ProjectsHandoversExport)->download('[DB Kodok] projects_handovers.xslx');
    }

   	public function exportPKeterangan(){
    	return (new ProjectsKeterangansExport)->download('[DB Kodok] projects_keterangans.xslx');
    }

    public function exportPStatus(){
    	return (new ProjectsStatusExport)->download('[DB Kodok] projects_stats.xslx');
    }

    public function exportPType(){
    	return (new ProjectsTypesExport)->download('[DB Kodok] projects_types');
    }

    public function exportUser(){
    	return (new UsersExport)->download('[DB Kodok] users');
    }

    public function exportULevel(){
    	return (new UsersLevelsExport)->download('[DB Kodok] users_levels');
    }
}
