<?php

use App\Projects_Keterangan;	
use Illuminate\Database\Seeder;

class ProjectsKeteranganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $approvedmanager = Projects_Keterangan::create([
        	'nama_pketerangan' => 'Approved By Manager'
        ]);

        $adminapprovetunggumanager = Projects_Keterangan::create([
        	'nama_pketerangan' => 'Approved By Admin, Menunggu Approval Manager'
        ]);

        $declinedmanager = Projects_Keterangan::create([
        	'nama_pketerangan' => 'Declined By Manager'
        ]);

        $menungguadmin = Projects_Keterangan::create([
            'nama_pketerangan' => 'Menunggu Approval Admin'
        ]);

        $declinedadmin = Projects_Keterangan::create([
            'nama_pketerangan' => 'Declined By Admin'
        ]);
    }
}
