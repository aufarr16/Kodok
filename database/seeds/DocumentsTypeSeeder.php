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
            'id_dcategory' => 1,
        	'nama_dtype' => 'Nota Dinas Penugasan'
        ]);

        $doc_type2 = Documents_Type::create([
            'id_dcategory' => 2,
            'nama_dtype' => 'MOM Kickoff Meeting'
        ]);

        $doc_type3 = Documents_Type::create([
            'id_dcategory' => 3,
        	'nama_dtype' => 'Jadwal Pengujian'
        ]);

        $doc_type4 = Documents_Type::create([
            'id_dcategory' => 5,
        	'nama_dtype' => 'BAKO',
            'sub_folder' => '/BAKO'
        ]);

        $doc_type5 = Documents_Type::create([
            'id_dcategory' => 5,
        	'nama_dtype' => 'Draft Eksepsi',
            'sub_folder' => '/BAE'
        ]);

        $doc_type6 = Documents_Type::create([
            'id_dcategory' => 5,
        	'nama_dtype' => 'BAE',
            'sub_folder' => '/BAE'
        ]);

        $doc_type7 = Documents_Type::create([
            'id_dcategory' => 5,
        	'nama_dtype' => 'BA Stress Test',
            'sub_folder' => '/BAST'
        ]);

        $doc_type8 = Documents_Type::create([
            'id_dcategory' => 2,
        	'nama_dtype' => 'MOM Pra Migrasi'
        ]);

        $doc_type9 = Documents_Type::create([
            'id_dcategory' => 3,
        	'nama_dtype' => 'Jadwal Migrasi'
        ]);

        $doc_type10 = Documents_Type::create([
            'id_dcategory' => 5,
        	'nama_dtype' => 'BATO',
            'sub_folder' => '/BATO'
        ]);

        $doc_type11 = Documents_Type::create([
            'id_dcategory' => 6,
        	'nama_dtype' => 'Laporan Harian Monitoring',
            'sub_folder' => '/Monitoring'
        ]);

        $doc_type12 = Documents_Type::create([
            'id_dcategory' => 6,
        	'nama_dtype' => 'Laporan Final Monitoring',
            'sub_folder' => '/Monitoring'
        ]);

        $doc_type13 = Documents_Type::create([
            'id_dcategory' => 8,
        	'nama_dtype' => 'Memo Dinas Monitoring'
        ]);

        $doc_type14 = Documents_Type::create([
            'id_dcategory' => 8,
        	'nama_dtype' => 'BA Serah Terima Monitoring'
        ]);

        $doc_type15 = Documents_Type::create([
            'id_dcategory' => 9,
        	'nama_dtype' => 'Nodin Balasan'
        ]);

        $doc_type16 = Documents_Type::create([
            'id_dcategory' => 5,
        	'nama_dtype' => 'BASTD',
            'sub_folder' => '/BASTD'
        ]);

        $doc_type17 = Documents_Type::create([
            'id_dcategory' => 5,
        	'nama_dtype' => 'BASTK',
            'sub_folder' => '/BASTK'
        ]);

        $doc_type18 = Documents_Type::create([
            'id_dcategory' => 7,
        	'nama_dtype' => 'Checklist Pengujian'
        ]);

        $doc_type19 = Documents_Type::create([
            'id_dcategory' => 7,
        	'nama_dtype' => 'Dokumen Lain - Lain'
        ]);

        $doc_type20 = Documents_Type::create([
            'id_dcategory' => 4,
        	'nama_dtype' => 'Laporan Harian Pengujian'
        ]);

        $doc_type21 = Documents_Type::create([
            'id_dcategory' => 6,
        	'nama_dtype' => 'Testscript Pra UAT',
            'sub_folder' => '/Pra UAT'
        ]);

        $doc_type22 = Documents_Type::create([
            'id_dcategory' => 6,
        	'nama_dtype' => 'Testscript UAT',
            'sub_folder' => '/UAT'
        ]);
        
        $doc_type23 = Documents_Type::create([
            'id_dcategory' => 6,
        	'nama_dtype' => 'Testscript Regresi 1',
            'sub_folder' => '/Regresi 1'
        ]);
        
        $doc_type24 = Documents_Type::create([
            'id_dcategory' => 6,
            'nama_dtype' => 'Testscript Stress Tes 1',
            'sub_folder' => '/Stress Test 1'
        ]);

        $doc_type25 = Documents_Type::create([
            'id_dcategory' => 6,
            'nama_dtype' => 'Form Pra TO',
            'sub_folder' => '/Pra TO'
        ]);

        $doc_type26 = Documents_Type::create([
            'id_dcategory' => 6,
            'nama_dtype' => 'Form TO',
            'sub_folder' => '/TO'
        ]);

        $doc_type27 = Documents_Type::create([
            'id_dcategory' => 10,
            'nama_dtype' => 'Chat'
        ]);

        $doc_type28 = Documents_Type::create([
            'id_dcategory' => 11,
            'nama_dtype' => 'Log'
        ]);

        $doc_type29 = Documents_Type::create([
            'id_dcategory' => 12,
            'nama_dtype' => 'Report'
        ]);

        $doc_type30 = Documents_Type::create([
            'id_dcategory' => 6,
            'nama_dtype' => 'Testscript Regresi 2',
            'sub_folder' => '/Regresi 2'
        ]);
        
        $doc_type31 = Documents_Type::create([
            'id_dcategory' => 6,
            'nama_dtype' => 'Testscript Stress Tes 2',
            'sub_folder' => '/Stress Test 2'
        ]);
    }
}
