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
        $approved = Projects_Keterangan::create([
        	'nama_pketerangan' => 'Approved'
        ]);

        $menunggu = Projects_Keterangan::create([
        	'nama_pketerangan' => 'Menunggu Approval'
        ]);

        $declined = Projects_Keterangan::create([
        	'nama_pketerangan' => 'Decline'
        ]);
    }
}
