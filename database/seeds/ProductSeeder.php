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

        $remittance = Product::create([
        	'nama_product' => 'Remittance',
        	'added_by' => 'Kodok',
        ]);

        $disbursement = Product::create([
        	'nama_product' => 'Disbursement',
        	'added_by' => 'Kodok',
        ]);

        $qr = Product::create([
        	'nama_product' => 'ATMB QR',
        	'added_by' => 'Kodok',
        ]);
    }
}
