<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokerJenisDifabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('loker_jenis_difabels')->insert([
            [
                'loker_id' => '1',
                'jenis_difabel_id' => '2'
            ],
            [
                'loker_id' => '2',
                'jenis_difabel_id' => '2'
            ],
            [
                'loker_id' => '3',
                'jenis_difabel_id' => '2'
            ],
            [
                'loker_id' => '4',
                'jenis_difabel_id' => '2'
            ],
            [
                'loker_id' => '5',
                'jenis_difabel_id' => '2'
            ],
            [
                'loker_id' => '6',
                'jenis_id' => '2'
            ],
            [
                'loker_id' => '7',
                'jenis_id' => '2'
            ],
            [
                'loker_id' => '8',
                'jenis_id' => '2'
            ]
        ]);
    }
}
