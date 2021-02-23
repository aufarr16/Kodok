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

        $internalproject = Projects_Type::create([
        	'nama_ptype' => 'Internal Project'
        ]);

        $uatinternal = Projects_Type::create([
        	'nama_ptype' => 'UAT Internal'
        ]);

        $support = Projects_Type::create([
            'nama_ptype' => 'Support'
        ]);
    }
}
