<?php

use App\Documents_Category;
use Illuminate\Database\Seeder;

class DocumentsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doc_cat1 = Documents_Category::create([
        	'nama_dcategory' => 'Nodin dari Div Terkait'
        ]);

        $doc_cat2 = Documents_Category::create([
        	'nama_dcategory' => 'Risalah Rapat dan Daftar Hadir'
        ]);

        $doc_cat3 = Documents_Category::create([
        	'nama_dcategory' => 'Jadwal'
        ]);

        $doc_cat4 = Documents_Category::create([
        	'nama_dcategory' => 'Laporan Harian'
        ]);

        $doc_cat5 = Documents_Category::create([
        	'nama_dcategory' => 'Berita Acara (BA)'
        ]);

        $doc_cat6 = Documents_Category::create([
        	'nama_dcategory' => 'Form Pengujian'
        ]);

        $doc_cat7 = Documents_Category::create([
        	'nama_dcategory' => 'Dokumen Lainnya'
        ]);

        $doc_cat8 = Documents_Category::create([
        	'nama_dcategory' => 'Memo Dinas dari SDTL'
        ]);

        $doc_cat9 = Documents_Category::create([
        	'nama_dcategory' => 'Nodin dari ITO1'
        ]);

        $doc_cat10 = Documents_Category::create([
        	'nama_dcategory' => 'Chat'
        ]);

        $doc_cat11 = Documents_Category::create([
        	'nama_dcategory' => 'Log'
        ]);

        $doc_cat12 = Documents_Category::create([
        	'nama_dcategory' => 'Report'
        ]);

        
    }
}
