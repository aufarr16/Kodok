<?php

namespace App\Http\Controllers;

use DataTables;
use App\Document;
use App\Project;
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

    public function upload($file, $doctype){
        $project = $this->getProjectByID($id);
        
        switch($doctype){
            case '1':
                $filelocation = $project->direktori_project . '/1. Nodin dari Div Terkait';
                @break
            case '2':
                $filelocation = $project->direktori_project . '/2. Risalah Rapat dan Daftar Hadir';
                @break
            case '3':
                $filelocation = $project->direktori_project . '/3. Jadwal Pengujian';
                @break
            case '4':
                $filelocation = $project->direktori_project . '/4. Laporan Harian';
                @break
            case '5':
                $filelocation = $project->direktori_project . '/5. Berota Acara (BA)';
                @break
            case '6':
                $filelocation = $project->direktori_project . '/6. Form Pengujian';
                @break
            case '7':
                $filelocation = $project->direktori_project . '/7. Dokumen Lainnya';
                @break
            case '8':
                $filelocation = $project->direktori_project . '/8. Memo Dinas dari SDTL';
                @break
            case '9':
                $filelocation = $project->direktori_project . '/9. Nodin dari ITO1';
                @break
            case '10':
                $filelocation = $project->direktori_project . '/chat';
                @break
            case '11':
                $filelocation = $project->direktori_project . '/log';
                @break
            case '12':
                $filelocation = $project->direktori_project . '/report';
                @break
        }

        $upload = $file->file('uploadedfile')->store($filelocation);
        // $filename = 
        // $filelocation = $filelocation . $filename;                     //update file location, tamabah nama filenya sekalian

        $newdocument = Document::create([
            'id_project' => $project->id,
            'id_dtype' => $doctype,
            'nama_document' => $filename,
            'direktori_document' => $filelocation
        ]);

        return "File has been upload";
    }

    public function uploadNodinPenugasan(Request $request, $id){
        $upload = $this->upload($request, 1);
    }

    public function uploadNodinPenugasan(Request $request, $id){
        $upload = $this->upload($request, 2);
    }

    public function uploadNodinPenugasan(Request $request, $id){
        $upload = $this->upload($request, 3);
    }

    public function uploadNodinPenugasan(Request $request, $id){
        $upload = $this->upload($request, 4);
    }

    public function uploadNodinPenugasan(Request $request, $id){
        $upload = $this->upload($request, 5);
    }

    public function uploadNodinPenugasan(Request $request, $id){
        $upload = $this->upload($request, 6);
    }

    public function uploadNodinPenugasan(Request $request, $id){
        $upload = $this->upload($request, 7);
    }

    public function uploadNodinPenugasan(Request $request, $id){
        $upload = $this->upload($request, 8);
    }

    public function uploadNodinPenugasan(Request $request, $id){
        $upload = $this->upload($request, 9);
    }

    public function uploadNodinPenugasan(Request $request, $id){
        $upload = $this->upload($request, 10);
    }

    public function uploadNodinPenugasan(Request $request, $id){
        $upload = $this->upload($request, 11);
    }

    public function uploadNodinPenugasan(Request $request, $id){
        $upload = $this->upload($request, 12);
    }

    public function getProjectByID($id){
        return Project::where('id', $id)->firstOrFail();
    }
}
