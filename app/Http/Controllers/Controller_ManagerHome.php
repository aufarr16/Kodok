<?php

namespace App\Http\Controllers;

use App\User;
use App\Project;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_ManagerHome extends Controller
{
    public function openAllDataPage(){                  //Buka halaman home dengan all data
        $userLevel = auth()->user()->id_ulevel;         
        if($userLevel == 2 || $userLevel == 9){                            //Autentikasi level user yg boleh msk
            //YEAR DATA
            $years = $this->getYears();                 //Ngambil data tahun buat ditampilin di dropdown filter tahun

            //HIGHCHARTS DATA
            //ESSENTIAL COUNTER
            $products = $this->getProducts();           //Data All Product      
            $projtypes = $this->getPTypes();            //Data All Project Types
            $inuser = $this->getInisial();              //Data All Inisial      

            // CARD DATA
            $preserved = $this->allProjectPstat(1);     // 1. Projek Reserved
            $ponprogress = $this->allProjectPstat(2);   // 2. Projek On Progress
            $ppngdone = $this->allProjectPstat(3);      // 3. Pengujian Done
            $pmonitor = $this->allProjectPstat(4);      // 4. Monitoring
            $pprjdone = $this->allProjectPstat(5);      // 5. Projek Done
            $phold = $this->allProjectPstat(6);         // 6. Projek Hold
            $pdrop = $this->allProjectPstat(7);         // 7. Projek Drop
            $projects = $this->allProjects();           // 8. Jumlah All Projek

            $percentrsrv = $this->toPercent($preserved, $projects); // 1. Persentase Projek Reserved
            $percentop = $this->toPercent($ponprogress, $projects); // 2. Persentase Projek On Progress
            $percentpgdn = $this->toPercent($ppngdone, $projects);  // 3. Persentase Projek Pengujian Done
            $percentmntr = $this->toPercent($pmonitor, $projects);  // 4. Persentase Projek Monitoring
            $percentprdn = $this->toPercent($pprjdone, $projects);  // 5. Persentase Projek Projek Done
            $percenthold = $this->toPercent($phold, $projects);     // 6. Persentase Projek Hold
            $percentdrop = $this->toPercent($pdrop, $projects);     // 7. Persentase Projek Drop

            //GRAPH DATA
            $pstatperproduct = $this->allPstatProd();               // 1. jumlah p_stat dari masing2 produk
            $pstatperptype = $this->allPstatPtype();                // 2. jumlah p_stat dari masing2 p_type
            $projectperproduct = $this->allProjProd();              // 3. total all projek berdasarkan produk
            $projectperptype =  $this->allProjPtype();              // 4. total all projek berdasarkan p_type
            $userprojectperpstat = $this->allEngineerPstat();       // 5. total projek per orang berdasarkan p_stat
            $userprojectperptype = $this->allEngineerPtype();       // 6. total prokek per orang berdasarkan p_type

            // dd($inuser);

            return view('Pages.Manager.View_ManagerHome', compact('products', 'projtypes', 'inuser','years', 'preserved', 'ponprogress', 'ppngdone', 'pmonitor', 'pprjdone', 'phold', 'pdrop', 'projects', 'percentrsrv', 'percentop', 'percentpgdn', 'percentmntr', 'percentprdn', 'percenthold', 'percentdrop', 'pstatperproduct', 'pstatperptype', 'projectperproduct', 'projectperptype', 'userprojectperpstat', 'userprojectperptype'));
        }
        else{
            return redirect('/logout');
        }
         	
    }

    public function openFilteredDataPage(Request $request){                     //Buka halaman home dengan data berdasarkan filternya
        $userLevel = auth()->user()->id_ulevel;     
        if($userLevel == 2){                                                    //Autentikasi level user yg boleh msk                                
            //YEAR DATA
            $years = $this->getYears();                                         //Ngambil data tahun buat ditampilin di dropdown filter tahun

            //HIGHCHARTS DATA
            //ESSENTIAL COUNTER
            $products = $this->getProducts();                                   //Data All product
            $projtypes = $this->getPTypes();                                    //Data All Project Types
            $inuser = $this->getInisial();                                      //Data All Inisial

            // CARD DATA
            $preserved = $this->filteredProjectPstat($request->tahun, 1);       // 1. Projek Reserved
            $ponprogress = $this->filteredProjectPstat($request->tahun, 2);     // 2. Projek On Progress
            $ppngdone = $this->filteredProjectPstat($request->tahun, 3);        // 3. Pengujian Done
            $pprjdone = $this->filteredProjectPstat($request->tahun, 4);        // 4. Monitoring
            $pprjdone = $this->filteredProjectPstat($request->tahun, 5);        // 5. Projek Done
            $phold = $this->filteredProjectPstat($request->tahun, 6);           // 6. Projek Hold
            $pdrop = $this->filteredProjectPstat($request->tahun, 7);           // 7. Projek Drop
            $projects = $this->filteredProjects($request->tahun);               // 8. Jumlah All Projek

            $percentrsrv = $this->toPercent($preserved, $projects);             // 1. Persentase Projek Reserved
            $percentop = $this->toPercent($ponprogress, $projects);             // 2. Persentase Projek On Progress
            $percentpgdn = $this->toPercent($ppngdone, $projects);              // 3. Persentase Projek Pengujian Done    
            $percentmntr = $this->toPercent($pmonitor, $projects);              // 4. Persentase Projek Monitoring
            $percentprdn = $this->toPercent($pprjdone, $projects);              // 5. Persentase Projek Projek Done
            $percenthold = $this->toPercent($phold, $projects);                 // 6. Persentase Projek Hold
            $percentdrop = $this->toPercent($pdrop, $projects);                 // 7. Persentase Projek Drop

            //GRAPH DATA
            $pstatperproduct = $this->filteredPstatProd($request->tahun);           // 1. jumlah p_stat dari masing2 produk
            $pstatperptype = $this->filteredPstatPtype($request->tahun);            // 2. jumlah p_stat dari masing2 p_type
            $projectperproduct = $this->filteredProjProd($request->tahun);          // 3. total all projek berdasarkan produk
            $projectperptype =  $this->filteredProjPtype($request->tahun);          // 4. total all projek berdasarkan p_type
            $userprojectperpstat = $this->filteredEngineerPstat($request->tahun);   // 5. total projek per orang berdasarkan p_stat
            $userprojectperptype = $this->filteredEngineerPtype($request->tahun);   // 6. total prokek per orang berdasarkan p_type

            // dd($pstatperproduct);

            return view('Pages.Manager.View_ManagerHome', compact('products', 'projtypes', 'inuser','years', 'preserved', 'ponprogress', 'ppngdone', 'pprjdone', 'phold', 'pdrop', 'projects', 'percentrsrv', 'percentop', 'percentpgdn','percentprdn', 'percenthold', 'percentdrop', 'pstatperproduct', 'pstatperptype', 'projectperproduct', 'projectperptype', 'userprojectperpstat', 'userprojectperptype'));   
        }
        else{
            return redirect('/logout');
        }
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

    public function getInisial(){
        return DB::select('select inisial_user from users where id_ulevel = 3 or id_ulevel = 5 order by inisial_user asc');
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

    public function allEngineerPstat(){
        return DB::select("select ups.inisial_user, ups.nama_pstat, count(pu.nama_project) jumlah_projek from (select u.id as id_current_pic, u.inisial_user, ps.id as id_pstat, ps.nama_pstat from users as u, projects_stats as ps where u.id_ulevel = 3 or u.id_ulevel = 5  group by u.id, u.inisial_user, ps.id, ps.nama_pstat order by u.inisial_user asc, ps.id asc) as ups left outer join (select p.id_current_pic, p.id_pstat, p.nama_project from projects p left outer join users as u on u.id = p.id_current_pic) as pu on pu.id_current_pic = ups.id_current_pic and pu.id_pstat = ups.id_pstat group by ups.nama_pstat, ups.inisial_user order by ups.inisial_user asc, ups.nama_pstat desc");
    }

    public function allEngineerPtype(){
        return DB::select("select upt.inisial_user, upt.nama_ptype, count(pu.nama_project) jumlah_projek from (select u.id as id_current_pic, u.inisial_user, pt.id as id_ptype, pt.nama_ptype from users as u, projects_types as pt where u.id_ulevel = 3 or u.id_ulevel = 5  group by u.id, u.inisial_user, pt.id, pt.nama_ptype order by u.inisial_user asc, pt.id asc) as upt left outer join (select p.id_current_pic, p.id_ptype, p.nama_project from projects p left outer join users as u on u.id = p.id_current_pic) as pu on pu.id_current_pic = upt.id_current_pic and pu.id_ptype = upt.id_ptype group by upt.nama_ptype, upt.inisial_user order by upt.inisial_user asc, upt.id_ptype asc");
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
        $psxpr = DB::select("select u.id as id_user, u.inisial_user, ps.id as id_pstat, ps.nama_pstat from users as u, projects_stats as ps group by u.id, u.inisial_user, ps.id, ps.nama_pstat order by u.inisial_user asc, ps.id asc");

        return $psxpr;

    }

    public function filteredPstatPtype($year){

    }

    public function filteredProjProd($year){

    }

    public function filteredProjPtype($year){

    }

    public function filteredEngineerPstat($year){

    }

    public function filteredEngineerPtype($year){

    }

    public function toPercent($part, $total){           //return persentase data input
        if($total == 0){
            $total = 1;
        }

        return number_format(($part*100)/$total, 2, '.', ',');
    }
}
