<?php

use App\Projects_Stat;
use Illuminate\Database\Seeder;

class ProjectsStatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reserve = Projects_Stat::create([
        	'nama_pstat' => 'Reserve'
        ]);

        $onprogress = Projects_Stat::create([
        	'nama_pstat' => 'On Progress'
        ]);

        $pengujiandone = Projects_Stat::create([
        	'nama_pstat' => 'Pengujian Done'
        ]);

        $projekdone = Projects_Stat::create([
        	'nama_pstat' => 'Projek Done'
        ]);

        $hold = Projects_Stat::create([
        	'nama_pstat' => 'Hold'
        ]);

        $drop = Projects_Stat::create([
        	'nama_pstat' => 'Drop'
        ]);
    }
}
