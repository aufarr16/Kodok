<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $atmb = Product::create([
        	'nama_product' => 'ATM Bersama',
        	'added_by' => 'Kodok',
        ]);

        $debit = Product::create([
        	'nama_product' => 'ATM Bersama Debit',
        	'added_by' => 'Kodok',
        	'modified_by' => '',
        ]);

        $payment = Product::create([
        	'nama_product' => 'Payment',
        	'added_by' => 'Kodok',
        ]);

        $bersamaku = Product::create([
        	'nama_product' => 'BersamaKU',
        	'added_by' => 'Kodok',
        ]);

        $qr = Product::create([
            'nama_product' => 'ATM Bersama QR',
            'added_by' => 'Kodok',
        ]);

        $laboratory = Product::create([
        	'nama_product' => 'Laboratory',
        	'added_by' => 'Kodok',
        ]);

        $mynt = Product::create([
            'nama_product' => 'Mynt',
            'added_by' => 'Kodok',
        ]);

        $internal = Product::create([
            'nama_product' => 'SDTL Internal System',
            'added_by' => 'Kodok',
        ]);

        
    }
}
