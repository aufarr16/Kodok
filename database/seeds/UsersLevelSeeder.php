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
    }
}
