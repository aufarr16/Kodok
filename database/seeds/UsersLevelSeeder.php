<?php

use App\Users_Level;
use Illuminate\Database\Seeder;

class UsersLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Users_Level::create([
        	'nama_ulevel' => 'Admin'
        ]);

        $manager = Users_Level::create([
        	'nama_ulevel' => 'Manager'
        ]);

        $engineer = Users_Level::create([
        	'nama_ulevel' => 'Engineer'
        ]);

        $guest = Users_Level::create([
        	'nama_ulevel' => 'Guest'
        ]);

        $adminxeng = Users_Level::create([
        	'nama_ulevel' => 'Admin x Engineer'
        ]);

        $product = Users_Level::create([
            'nama_ulevel' => 'Product'
        ]);

        $am = Users_Level::create([
            'nama_ulevel' => 'Account Manager'
        ]);

        $pm = Users_Level::create([
            'nama_ulevel' => 'Project Manager'
        ]);

        $eksekutif = Users_Level::create([
            'nama_ulevel' => 'Eksekutif'
        ]);

        $poh = Users_Level::create([
            'nama_ulevel' => 'Engineer Poh'
        ]);
    }
}
