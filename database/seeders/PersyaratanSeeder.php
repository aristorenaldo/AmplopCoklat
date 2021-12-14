<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PersyaratanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persyaratans')->insert([
            [
                'loker_id' => '1',
                'syarat' => 'S1 atau yang memiliki pengalaman setara'
            ],
            [
                'loker_id' => '1',
                'syarat' => 'Berpengalaman 4 tahun di bidang startegi/operasi'
            ],
            [
                'loker_id' => '1',
                'syarat' => 'Lancar berbahasa Indonesia dan Inggris'
            ]
        ]);
    }
}
