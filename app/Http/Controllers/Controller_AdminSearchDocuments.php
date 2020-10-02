<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_AdminSearchDocuments extends Controller
{
    public function openPage(){
    	$data_search = DB::select("select a.nama_mitra, b.id_project, b.nama_project, c.inisial_user, YEAR(b.waktu_assign_project) as tahun from mitras as a, projects as b, users as c where b.ABA = a.ABA and b.id_user = c.id_user order by b.waktu_assign_project desc");
    	//dump($data_search);
    	return view('Pages.Admin.View_AdminSearchDocuments', ['data_search' => $data_search]);
    }

    // return redirect('/admin/ ')->with('success','Dokumen berhasil download');

    // return redirect('/admin/ ')->with('success','Dokumen berhasil terkirim');
}
