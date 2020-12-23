<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(DocumentSeeder::class);
        // $this->call(DocumentsTypeSeeder::class);
    	$this->call(MitraSeeder::class);
    	$this->call(ProductSeeder::class);
    	$this->call(ProjectsKeteranganSeeder::class);
    	$this->call(ProjectsStatSeeder::class);
    	$this->call(ProjectsTypeSeeder::class);
    	$this->call(UserSeeder::class);
    	$this->call(UsersLevelSeeder::class);
    }
}
