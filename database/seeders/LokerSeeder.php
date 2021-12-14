<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lokers')->insert([
            [
                'perusahaan_id' => '2',
                'pekerjaan' => 'UI Designer',
                'lokasi' => 'Bandung',
                'deskripsi' => 'Untuk kamu yang baru lulus atau fresh graduate juga bisa daftar di lowongan kerja Google Indonesia ini. Selain itu, Google Indonesia juga membuka lowongan kerja bagi kamu yang masih menempuh pendidikan S2. Bahkan, jika kamu tidak memiliki ijazah S1, tetap bisa ikut daftar lowongan kerja Google Indonesia. Asalkan, punya pengalaman yang cukup sesuai dengan kebutuhan dalam lowongan kerja tersebut.'
            ],
        ]);
    }
}
