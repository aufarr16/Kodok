<?php

use App\Documents_Type;
use Illuminate\Database\Seeder;

class DocumentsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doc_type1 = Documents_Type::create([
        	'nama_dtype' => 'Nota Dinas Penugasan'
        ]);

        $doc_type2 = Documents_Type::create([
        	'nama_dtype' => 'MOM Kickoff Meeting'
        ]);

        $doc_type3 = Documents_Type::create([
        	'nama_dtype' => 'Jadwal Pengujian'
        ]);

        $doc_type4 = Documents_Type::create([
        	'nama_dtype' => 'BAKO'
        ]);

        $doc_type5 = Documents_Type::create([
        	'nama_dtype' => 'Draft Eksepsi'
        ]);

        $doc_type6 = Documents_Type::create([
        	'nama_dtype' => 'BAE'
        ]);

        $doc_type7 = Documents_Type::create([
        	'nama_dtype' => 'BA Stress Test'
        ]);

        $doc_type8 = Documents_Type::create([
        	'nama_dtype' => 'MOM Pra Migrasi'
        ]);

        $doc_type9 = Documents_Type::create([
        	'nama_dtype' => 'Jadwal Migrasi'
        ]);

        $doc_type10 = Documents_Type::create([
        	'nama_dtype' => 'BATO'
        ]);

        $doc_type11 = Documents_Type::create([
        	'nama_dtype' => 'Laporan Harian Monitoring'
        ]);

        $doc_type12 = Documents_Type::create([
        	'nama_dtype' => 'Laporan Final Monitoring'
        ]);

        $doc_type13 = Documents_Type::create([
        	'nama_dtype' => 'Memo Dinas Monitoring'
        ]);

        $doc_type14 = Documents_Type::create([
        	'nama_dtype' => 'BA Serah Terima Monitoring'
        ]);

        $doc_type15 = Documents_Type::create([
        	'nama_dtype' => 'Nodin Balasan'
        ]);

        $doc_type16 = Documents_Type::create([
        	'nama_dtype' => 'BASTD'
        ]);

        $doc_type17 = Documents_Type::create([
        	'nama_dtype' => 'BASTK'
        ]);

        $doc_type18 = Documents_Type::create([
        	'nama_dtype' => 'Checklist Pengujian'
        ]);

        $doc_type19 = Documents_Type::create([
        	'nama_dtype' => 'Dokumen Lain - Lain'
        ]);

        $doc_type20 = Documents_Type::create([
        	'nama_dtype' => 'Laporan Harian Pengujian'
        ]);

        $doc_type21 = Documents_Type::create([
        	'nama_dtype' => 'Testscript SIT'
        ]);

        $doc_type22 = Documents_Type::create([
        	'nama_dtype' => 'Testscript UAT'
        ]);
        
        $doc_type23 = Documents_Type::create([
        	'nama_dtype' => 'Testscript Regresi'
        ]);
        
    }
}
