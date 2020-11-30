<?php

namespace App\Http\Controllers;

use App\Project;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerHome extends Controller
{
    public function openAllDataPage(){
        //YEAR DATA
        $years = $this->getYears();

        //HIGHCHARTS DATA
        //ESSENTIAL COUNTER
        $products = $this->getProducts();
        $projtypes = $this->getPTypes();

        // CARD DATA
        $preserved = $this->allProjectPstat(1);     // 1. Projek Reserved
        $ponprogress = $this->allProjectPstat(2);   // 2. Projek On Progress
        $ppngdone = $this->allProjectPstat(3);       // 3. Pengujian Done
        $pprjdone = $this->allProjectPstat(4);       // 4. Projek Done
        $phold = $this->allProjectPstat(5);         // 5. Projek Hold
        $pdrop = $this->allProjectPstat(6);         // 6. Projek Drop
        $projects = $this->allProjects();           // 7. Jumlah All Projek

        $percentrsrv = $this->toPercent($preserved, $projects);
        $percentop = $this->toPercent($ponprogress, $projects);
        $percentpgdn = $this->toPercent($ppngdone, $projects);
        $percentprdn = $this->toPercent($pprjdone, $projects);
        $percenthold = $this->toPercent($phold, $projects);
        $percentdrop = $this->toPercent($pdrop, $projects);

        //GRAPH DATA
        $pstatperproduct = $this->allPstatProd();       // 1. jumlah p_stat dari masing2 produk
        $pstatperptype = $this->allPstatPtype();        // 2. jumlah p_stat dari masing2 p_type
        $projectperproduct = $this->allProjProd();      // 3. total all projek berdasarkan produk
        $projectperptype =  $this->allProjPtype();      // 4. total all projek berdasarkan p_type
        $userprojectperpstat = $this->allUserPstat();   // 5. total projek per orang berdasarkan p_stat
        $userprojectperptype = $this->allUserPtype();   // 6. total prokek per orang berdasarkan p_type

        // dd($projectperproduct);
        // dd(json_encode($pstatperproduct));

    	return view('Pages.Manager.View_ManagerHome', compact('products', 'projtypes', 'years', 'preserved', 'ponprogress', 'ppngdone', 'pprjdone', 'phold', 'pdrop', 'projects', 'percentrsrv', 'percentop', 'percentpgdn','percentprdn', 'percenthold', 'percentdrop', 'pstatperproduct', 'pstatperptype', 'projectperproduct', 'projectperptype', 'userprojectperpstat', 'userprojectperptype')); 	
    }

    public function openFilteredDataPage(Request $request){
        //YEAR DATA
        $years = $this->getYears();

        //HIGHCHARTS DATA
        //ESSENTIAL COUNTER
        $products = $this->getProducts();
        $projtypes = $this->getPTypes();

        // CARD DATA
        $preserved = $this->filteredProjectPstat($request->tahun, 1);     // 1. Projek Reserved
        $ponprogress = $this->filteredProjectPstat($request->tahun, 2);   // 2. Projek On Progress
        $pdone = $this->filteredProjectPstat($request->tahun, 4);         // 3. Projek Done
        $phold = $this->filteredProjectPstat($request->tahun, 5);         // 4. Projek Hold
        $pdrop = $this->filteredProjectPstat($request->tahun, 6);         // 5. Projek Drop
        $projects = $this->filteredProjects($request->tahun);             // 6. Jumlah All Projek

        $percentrsrv = $this->toPercent($preserved, $projects);
        $percentop = $this->toPercent($ponprogress, $projects);
        $percentdone = $this->toPercent($pdone, $projects);
        $percenthold = $this->toPercent($phold, $projects);
        $percentdrop = $this->toPercent($pdrop, $projects);

        //GRAPH DATA
        $pstatperproduct = $this->filteredPstatProd($request->tahun);       // 1. jumlah p_stat dari masing2 produk
        $pstatperptype = $this->filteredPstatPtype($request->tahun);        // 2. jumlah p_stat dari masing2 p_type
        $projectperproduct = $this->filteredProjProd($request->tahun);     // 3. total all projek berdasarkan produk
        $projectperptype =  $this->filteredProjPtype($request->tahun);      // 4. total all projek berdasarkan p_type
        $userprojectperpstat = $this->filteredUserPstat($request->tahun);   // 5. total projek per orang berdasarkan p_stat
        $userprojectperptype = $this->filteredUserPtype($request->tahun);   // 6. total prokek per orang berdasarkan p_type

        return view('Pages.Manager.View_ManagerHome', compact('products', 'projtypes', 'years','preserved', 'ponprogress', 'pdone', 'phold', 'pdrop', 'projects', 'percentrsrv', 'percentop', 'percentdone', 'percenthold', 'percentdrop', 'pstatperproduct', 'pstatperptype', 'projectperproduct', 'projectperptype', 'userprojectperpstat', 'userprojectperptype'));   
    }

    public function getYears(){
        return DB::select("select YEAR(waktu_assign_project) as tahun from projects group by tahun order by tahun desc");
    }

    public function getProducts(){
        return DB::select('select nama_product from products');
    }

    public function getPTypes(){
        return DB::select('select nama_ptype from projects_types');
    }

    public function allProjectPstat($pstat){
        return Project::select('id')->where('id_pstat', $pstat)->count();
    }

    public function allProjects(){
        return Project::select('id')->count(); 
    }

    public function allPstatProd(){
        return DB::select("select psr.nama_pstat, psr.nama_product, count(prp.nama_project) as jumlah_project from (select ps.id as id_pstat, ps.nama_pstat, pr.id as id_product, pr.nama_product from projects_stats as ps, products as pr order by ps.id asc, pr.id asc) as psr left outer join (select p.id_pstat, p.id_product, p.nama_project from projects as p left outer join products as pr on p.id_product = pr.id order by p.id_pstat asc) as prp ON prp.id_pstat = psr.id_pstat and prp.id_product = psr.id_product group by psr.id_pstat, psr.id_product order by psr.id_pstat");
    }

    public function allPstatPtype(){
        return DB::select("select pst.nama_pstat, pst.nama_ptype, count(ptp.nama_project) as jumlah_project from (select ps.id as id_pstat, ps.nama_pstat, pt.id as id_ptype, pt.nama_ptype from projects_stats as ps, projects_types as pt order by ps.id asc, pt.id asc) as pst left outer join (select p.id_pstat, p.id_ptype, p.nama_project from projects as p left outer join projects_types as pt on p.id_ptype = pt.id order by p.id_pstat asc) as ptp ON ptp.id_pstat = pst.id_pstat and ptp.id_ptype = pst.id_ptype group by pst.id_pstat, pst.id_ptype order by pst.id_pstat");
    }

    public function allProjProd(){
        return DB::select("select pr.nama_product, count(*) as jumlah_project from projects as p, products as pr where p.id_product = pr.id group by pr.nama_product order by pr.id asc");
    }

    public function allProjPtype(){
        return DB::select("select pt.nama_ptype, count(*) as jumlah_project from projects as p, projects_types as pt where p.id_ptype = pt.id group by pt.nama_ptype order by pt.id asc");
    }

    public function allUserPstat(){
        return DB::select("select u.inisial_user, ps.nama_pstat, count(*) jumlah_projek from users as u, projects as p, projects_stats as ps where u.id = p.id_user and ps.id = p.id_pstat group by ps.nama_pstat, u.inisial_user order by u.inisial_user asc, ps.id asc");
    }

    public function allUserPtype(){
        return DB::select("select u.inisial_user, pt.nama_ptype, count(*) jumlah_projek from users as u, projects as p, projects_types as pt where u.id = p.id_user and pt.id = p.id_ptype group by pt.nama_ptype, u.inisial_user order by u.inisial_user asc, pt.id asc");
    }

    public function filteredProjectPstat($year, $pstat){
        return Project::select('id')
        ->where('id_pstat', $pstat)
        ->whereYear('waktu_assign_project', '=', $year)
        ->count();
    }

    public function filteredProjects($year){
        return Project::select('id')->whereYear('waktu_assign_project', '=', $year)->count(); 
    }

    public function filteredPstatProd($year){

    }

    public function filteredPstatPtype($year){

    }

    public function filteredProjProd($year){

    }

    public function filteredProjPtype($year){

    }

    public function filteredUserPstat($year){

    }

    public function filteredUserPtype($year){

    }

    public function toPercent($part, $total){
        return number_format(($part*100)/$total, 2, '.', ',');
    }
}
