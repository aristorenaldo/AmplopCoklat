<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisDifabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_difabels')->insert([
            ['jenis' => 'tuna rungu'],
            ['jenis' => 'tuna daksa'],
            ['jenis' => 'tuna wicara'],
            ['jenis' => 'autisme'],
        ]);
    }
}
