<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

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
            // RoleSeeder::class,
            UserSeeder::class,
            PelamarSeeder::class,
            PerusahaanSeeder::class,
            JenisDifabelSeeder::class,
            LokerSeeder::class,
            PersyaratanSeeder::class,
            LokerJenisDifabelSeeder::class,
            
            // ArtikelSeeder::class,
            // VaksinasiSeeder::class,   
            // ProvinceSeeder::class,  
            // SaranSeeder::class,
            // PostSeeder::class,
        ]);

    }
}
