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
        	'nama_product' => 'ATM Bersama' 
        	'added_by' => 'Kodok'
        	'modified_by' => ''
        ]);

        $debit = Product::create([
        	'nama_product' => 'ATM Bersama Debit'
        	'added_by' => 'Kodok'
        	'modified_by' => ''
        ]);

        $payment = Product::create([
        	'nama_product' => 'Payment'
        	'added_by' => 'Kodok'
        	'modified_by' => ''
        ]);

        $remittance = Product::create([
        	'nama_product' => 'Remittance'
        	'added_by' => 'Kodok'
        	'modified_by' => ''
        ]);

        $disbursement = Product::create([
        	'nama_product' => 'Disbursement'
        	'added_by' => 'Kodok'
        	'modified_by' => ''
        ]);

        $qr = Product::create([
        	'nama_product' => 'QR Payment'
        	'added_by' => 'Kodok'
        	'modified_by' => ''
        ]);
    }
}
