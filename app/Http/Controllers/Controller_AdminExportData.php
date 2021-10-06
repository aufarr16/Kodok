<?php

namespace App\Http\Controllers;

use DataTables;
//use App\Exports\DocumentsExport;
use App\Exports\MitrasExport;
use App\Exports\ProductsExport;
use App\Exports\ProjectsExport;
use App\Exports\ProjectsHandoversExport;
use App\Exports\ProjectsKeterangansExport;
use App\Exports\ProjectsStatusExport;
use App\Exports\UserExport;
use App\Exports\UsersLevelsExport;

//use App\Imports\DocumentsExport;
use App\Imports\MitrasImport;
use App\Imports\ProductsImport;
use App\Imports\ProjectsImport;
use App\Imports\ProjectsHandoversImport;
use App\Imports\ProjectsKeterangansImport;
use App\Imports\ProjectsStatusImport;
use App\Imports\UserImport;
use App\Imports\UsersLevelsImport;

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
    	return (new MitrasExport)->download('[DB Kodok] mitras.xlsx');
    }

    public function exportProduct(){
    	return (new ProductsExport)->download('[DB Kodok] products.xlsx');
    }

    public function exportProject(){
    	return (new ProjectsExport)->download('[DB Kodok] projects.xlsx');
    }

    public function exportHandover(){
    	return (new ProjectsHandoversExport)->download('[DB Kodok] projects_handovers.xlsx');
    }

   	public function exportPKeterangan(){
    	return (new ProjectsKeterangansExport)->download('[DB Kodok] projects_keterangans.xlsx');
    }

    public function exportPStatus(){
    	return (new ProjectsStatusExport)->download('[DB Kodok] projects_stats.xlsx');
    }

    public function exportPType(){
    	return (new ProjectsTypesExport)->download('[DB Kodok] projects_types.xlsx');
    }

    public function exportUser(){
    	return (new UsersExport)->download('[DB Kodok] users.xlsx');
    }

    public function exportULevel(){
    	return (new UsersLevelsExport)->download('[DB Kodok] users_levels.xlsx');
    }

    public function importProject(Request $request){
        $file = $request->file('file')->store('Imported Data');

        $import = new ProjectsImport;
        $import->import($file);

        return back()->withStatus('Excel file imported successfully');
    }
}
