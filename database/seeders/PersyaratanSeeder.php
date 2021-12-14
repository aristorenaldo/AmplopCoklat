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
            ],
            [
                'loker_id' => '2',
                'syarat' => 'S1 atau yang memiliki pengalaman setara'
            ],
            [
                'loker_id' => '2',
                'syarat' => 'Berpengalaman 4 tahun di bidang startegi/operasi'
            ],
            [
                'loker_id' => '2',
                'syarat' => 'Lancar berbahasa Indonesia dan Inggris'
            ],
            [
                'loker_id' => '3',
                'syarat' => 'S1 atau yang memiliki pengalaman setara'
            ],
            [
                'loker_id' => '3',
                'syarat' => 'Berpengalaman 4 tahun di bidang startegi/operasi'
            ],
            [
                'loker_id' => '3',
                'syarat' => 'Lancar berbahasa Indonesia dan Inggris'
            ],
            [
                'loker_id' => '4',
                'syarat' => 'S1 atau yang memiliki pengalaman setara'
            ],
            [
                'loker_id' => '4',
                'syarat' => 'Berpengalaman 4 tahun di bidang startegi/operasi'
            ],
            [
                'loker_id' => '4',
                'syarat' => 'Lancar berbahasa Indonesia dan Inggris'
            ],
            [
                'loker_id' => '5',
                'syarat' => 'S1 atau yang memiliki pengalaman setara'
            ],
            [
                'loker_id' => '5',
                'syarat' => 'Berpengalaman 4 tahun di bidang startegi/operasi'
            ],
            [
                'loker_id' => '5',
                'syarat' => 'Lancar berbahasa Indonesia dan Inggris'
            ],
            [
                'loker_id' => '6',
                'syarat' => 'S1 atau yang memiliki pengalaman setara'
            ],
            [
                'loker_id' => '6',
                'syarat' => 'Berpengalaman 4 tahun di bidang startegi/operasi'
            ],
            [
                'loker_id' => '6',
                'syarat' => 'Lancar berbahasa Indonesia dan Inggris'
            ],
            [
                'loker_id' => '7',
                'syarat' => 'S1 atau yang memiliki pengalaman setara'
            ],
            [
                'loker_id' => '7',
                'syarat' => 'Berpengalaman 4 tahun di bidang startegi/operasi'
            ],
            [
                'loker_id' => '7',
                'syarat' => 'Lancar berbahasa Indonesia dan Inggris'
            ],
            [
                'loker_id' => '8',
                'syarat' => 'S1 atau yang memiliki pengalaman setara'
            ],
            [
                'loker_id' => '8',
                'syarat' => 'Berpengalaman 4 tahun di bidang startegi/operasi'
            ],
            [
                'loker_id' => '8',
                'syarat' => 'Lancar berbahasa Indonesia dan Inggris'
            ]
        ]);
    }
}
