<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use DataTables;
use App\Exports\ProjectsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class Controller_ManagerListProjects extends Controller
{
    public function openPage(){                             //buka halaman Manager - List Project
        $userLevel = auth()->user()->id_ulevel;
        if($userLevel == 2 || $userLevel == 9){                                //Autentikasi level user yg boleh msk
            return view('Pages.Manager.View_ManagerListProjects');  
        }
        else{
            return redirect('/logout');
        }
    }

    public function export(){                               //Export list project ke dalam excel
        return (new ProjectsExport)->download('Data All Project.xlsx');
    }

    public function detail($id){                     //buka detail projek
        $project = $this->getProjectById($id);       //ambil data projek yg mau diliat
        $picori = $this->getOriginalPIC($id);        //ambil data original pic 
        $piccurrent = $this->getCurrentPIC($id);     //ambil data current pic
        $historypic = $this->getHistoryPIC($id);     //ambil data history pic
        $picproduct = $this->getProductPIC($id);     //ambil data pic product 
        $picam = $this->getAMPIC($id);               //ambil data pic am 
        $picpm = $this->getPMPIC($id);               //ambil data pic pm 
        $pbn = $this->getPBN($id);                   //ambil data progress + bobot + notes

        // dd($historypic);
        
        return view('Layouts.FormDetailProject', compact('picori', 'piccurrent', 'historypic', 'picproduct', 'picam', 'picpm', 'pbn', 'project'));
    }

    public function editProject($id){
        $project = $this->getProjectById($id);

        $listuser = $this->getUserList($id); 
        $listproduct = $this->getProductList($id);
        $listptype = $this->getPtypeList($id);
        $listmitra = $this->getMitraList($id);

        return View('Layouts.FormProject', compact('project','listuser','listproduct','listptype','listmitra'));
    }

    public function updateProject(Request $request, $id){

        $project = $this->getProjectById($id);
        $project->id_original_pic= $request->id_original_pic;                   
        $project->id_product = $request->id_product;                             
        $project->id_ptype = $request->id_ptype;
        $project->id_mitra = $request->id_mitra;
        $project->nama_project = $request->nama_project;                                  

        $project->save(); 
    }

    public function deleteProject($id){
        Project::where('id', $id)->delete();                            //cari data project berdasarkan id lalu didelete
        $projectData['data'] = Project::orderby("id", "asc")->get();    //mengambil semua data mitra yg baru, setelah sudah menghapus data, untuk direturn

        return response()->json($projectData);
    }

    public function dataTable(){                            //generate table untuk halaman Manager - List Project
        $data = DB::select("select e.id, a.inisial_user, b.nama_product, c.nama_ptype, d.nama_mitra, e.nama_project, DATE(e.waktu_assign_project) as waktu, f.id as id_pstat from users as a, products as b, projects_types as c, mitras as d, projects as e, projects_stats as f where e.id_current_pic = a.id and e.id_product = b.id and e.id_ptype = c.id and e.id_mitra = d.id and e.id_pstat = f.id");    //ambil data buat ditempel di table
        return DataTables::of($data)                        //bikin table berdasarkan data yg udh diambi;
            ->addColumn('nama_project', function($data){    //tambah kolom nama project yg bisa diklik
                return view('Layouts.ClickableText',[
                    'data'=> $data,
                    'url_detail' => route('listprojects.detail', $data->id)
                ]);
            })
            ->addColumn('id_pstat', function($data){        //tambah kolom status biar ada iconnya
                return view('Layouts.Status',[
                    'data'=> $data,
                ]);
            })
            ->addColumn('action', function($data){        
                return view('Layouts.ActionListProject',[
                    'data'=> $data,
                    'url_edit' => route('projects.edit', $data->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['nama_project', 'id_pstat'])
            ->make(true);
    }

    public function getProjectById($id){
        return Project::where('id', $id)->firstOrFail();
    }

    public function getOriginalPIC($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_original_pic, users.nama_user'))
        ->leftjoin('users', 'projects.id_original_pic', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->first();
    }

    public function getCurrentPIC($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_current_pic, users.nama_user'))
        ->leftjoin('users', 'projects.id_current_pic', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->first();
    }

    public function getHistoryPIC($id){
        return DB::table('projects_handovers')
        ->select(DB::raw('projects_handovers.id_project, projects_handovers.id_user, projects_handovers.handover_order, users.nama_user'))
        ->leftjoin('users', 'projects_handovers.id_user', '=', 'users.id')
        ->where('projects_handovers.id_project', '=', $id)
        ->orderBy('projects_handovers.handover_order', 'asc')
        ->get();
    }

    public function getProductPIC($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_pic_product, users.nama_user'))
        ->leftjoin('users', 'projects.id_pic_product', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->first();
    }

    public function getAMPIC($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_pic_am, users.nama_user'))
        ->leftjoin('users', 'projects.id_pic_am', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->first();
    }

    public function getPMPIC($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.id_pic_pm, users.nama_user'))
        ->leftjoin('users', 'projects.id_pic_pm', '=', 'users.id')
        ->where('projects.id', '=', $id)
        ->first();
    }

    public function getPBN($id){
        return DB::table('projects')
        ->select(DB::raw('projects.id, projects.progress_sit, projects.progress_uat, projects.notes_project, projects.bobot_project'))
        ->where('projects.id', '=', $id)
        ->first();
    }

     public function getInisialUser($id){                             //ngambil data untuk ditampilkan di dropdown form Edit PIC
        return DB::table('users')
        ->select(DB::raw('count(projects.id) as jml, users.id, users.inisial_user'))
        ->leftjoin('projects', function($join) use ($id) {
            $join->on('projects.id', '=', 'projects.id_original_pic')
            ->where('projects.id', $id);
        })
        ->whereIn('users.id_ulevel', [3,5])
        ->groupBy('projects.id_original_pic', 'users.id', 'users.inisial_user')
        ->orderBy('jml','DESC')
        ->get()
        ->pluck('inisial_user', 'id')
        ->toArray();
    }

    public function getUserList($id){
        return DB::table('users')
            ->select(DB::raw('count(projects.id) as jml, users.id, users.nama_user'))
            ->leftjoin('projects', function($join) use ($id) {
                $join->on('projects.id_current_pic', '=', 'users.id')
                ->where('projects.id', $id);
            })
            ->whereIn('users.id_ulevel', [3, 5])
            ->groupBy('users.id','users.nama_user')
            ->orderBy('jml','DESC')
            ->get()
            ->pluck('nama_user', 'id')
            ->toArray();
    }

    public function getProductList($id){
        return DB::table('products')
            ->select(DB::raw('count(projects.id) as jml, products.id, products.nama_product'))
            ->leftjoin('projects', function($join) use ($id) {
                $join->on('projects.id_product', '=', 'products.id')
                ->where('projects.id', $id);
            })
            ->groupBy('products.id','products.nama_product')
            ->orderBy('jml','DESC')
            ->get()
            ->pluck('nama_product', 'id')
            ->toArray();
    }

    public function getMitraList($id){
        return DB::table('mitras')
            ->select(DB::raw('count(projects.id) as jml, mitras.id, mitras.nama_mitra'))
            ->leftjoin('projects', function($join) use ($id) {
                $join->on('projects.id_mitra', '=', 'mitras.id')
                ->where('projects.id', $id);
            })
            ->groupBy('mitras.id','mitras.nama_mitra')
            ->orderBy('jml','DESC')
            ->get()
            ->pluck('nama_mitra', 'id')
            ->toArray();
    }

    public function getPtypeList($id){
        return DB::table('projects_types')
            ->select(DB::raw('count(projects.id) as jml, projects_types.id, projects_types.nama_ptype'))
            ->leftjoin('projects', function($join) use ($id) {
                $join->on('projects.id_ptype', '=', 'projects_types.id')
                ->where('projects.id', $id);
            })
            ->groupBy('projects_types.id','projects_types.nama_ptype')
            ->orderBy('jml','DESC')
            ->get()
            ->pluck('nama_ptype', 'id')
            ->toArray();
    }
}

   
