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
	public function openPage($id){         //buka halaman Engineer - Upload Document
        //Autentikasi level user yg boleh msk
        $this->authorize('isEngineer', auth()->user());

        $userLevel = auth()->user()->id_ulevel;
        $id_project = $id;
        
        return view('Pages.Engineer.View_EngineerUploadDocument', compact('userLevel', 'id_project'));
    }

    public function upload(Request $request){
        $this->authorize('isEngineer', auth()->user());
        
        $pid = $request->idproj;
        $project = $this->getProjectByID($pid);
        $user = auth()->user()->id;
        $file = $request->file('uploadedfile');
        $filename = $file->getClientOriginalName();
        $doctype = $request->dtype;

        $directory_data = DB::table('documents_types')
                            ->select(DB::raw('documents_categories.id, documents_categories.nama_dcategory, documents_types.sub_folder'))
                            ->leftjoin('documents_categories', 'documents_types.id_dcategory', 'documents_categories.id')
                            ->where('documents_types.id', $doctype)
                            ->get();

        $filelocation = $project->direktori_project . "/" .$directory_data->implode('id') . ". " . $directory_data->implode('nama_dcategory') . "/" . $directory_data->implode('sub_folder'); 

        $upload = $file->storeAs($filelocation, $filename);
        $filelocation = $filelocation . $filename;                     //update file location, tamabah nama filenya 

        $newdocument = Document::create([
            'id_project' => $pid,
            'id_dtype' => $doctype,
            'nama_document' => $filename,
            'direktori_document' => $filelocation,
            'uploaded_by' => $user
        ]);

        return back()->with('success','Document berhasil di Upload');
    }

    public function download($id){
        $document = $this->getDocumentByID($id);

        return response()->download($document->direktori_document);
    }

    public function getProjectByID($id){
        return Project::where('id', $id)->firstOrFail();
    }

    public function getDocumentByID($id){
        return Document::where('id', $id)->firstOrFail();
    }
}
