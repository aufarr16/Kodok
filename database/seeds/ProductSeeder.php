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
            'id' => 5,
        	'nama_product' => 'BersamaKU',
        	'added_by' => 'Kodok',
        ]);

        $qr = Product::create([
            'id' => 6,
            'nama_product' => 'ATM Bersama QR',
            'added_by' => 'Kodok',
        ]);

        $laboratory = Product::create([
            'id' => 7,
        	'nama_product' => 'Laboratory',
        	'added_by' => 'Kodok',
        ]);

        $mynt = Product::create([
            'id' => 8,
            'nama_product' => 'Mynt',
            'added_by' => 'Kodok',
        ]);

        $internal = Product::create([
            'id' => 9,
            'nama_product' => 'SDTL Internal System',
            'added_by' => 'Kodok',
        ]);

        
    }
}
