<?php

use App\Projects_Type;
use Illuminate\Database\Seeder;

class ProjectsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $intenaltest = Projects_Type::create([
        	'nama_ptype' => 'Internal Test'
        ]);

        $sertifikasi = Projects_Type::create([
        	'nama_ptype' => 'Sertifikasi'
        ]);

        $regresi = Projects_Type::create([
        	'nama_ptype' => 'Regresi'
        ]);

        $support = Projects_Type::create([
        	'nama_ptype' => 'Support'
        ]);

        $qa = Projects_Type::create([
        	'nama_ptype' => 'QA'
        ]);
    }
}
