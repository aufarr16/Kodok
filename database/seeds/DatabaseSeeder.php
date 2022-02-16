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
        $this->call([
            //DocumentSeeder::class,
            // DocumentsCategorySeeder::class,
            // DocumentsTypeSeeder::class,
            // MitraSeeder::class,
            //ProductSeeder::class,
            ProjectsKeteranganSeeder::class,
            ProjectsStatSeeder::class,
            ProjectsTypeSeeder::class,
            UsersLevelSeeder::class,
            UserSeeder::class,
        ]);
        
    }
}
