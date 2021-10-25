<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Controller_EngineerUploadDocument extends Controller
{
	public function openPage(){         //buka halaman Engineer - Project Own Going (Own Project)
        //Autentikasi level user yg boleh msk
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 3 || $userLevel == 5 || $userLevel == 10){
            return view('Pages.Engineer.View_EngineerUploadDocument', compact('userLevel'));
        }
        else{
            return redirect('/logout');
        }
    }

    public function uploadNodinPenugasan(Request $request, $id){
        // dd(Storage::disk('upload-dest'));
        // dd($request->file('uploadedfile'));

        $project = Project::where('id', $id)->firstOrFail();
        $filelocation = $project->dir_project + '/Nodin Penugasan';

        $file = $request->file('uploadedfile')->store($filelocation);

        return "File has been upload";
    }
}
