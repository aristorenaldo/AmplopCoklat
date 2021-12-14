<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perusahaans')->insert([
            [
                'user_id' => '1',
                'nama' => 'Google LLC',
                'kontak' => '0315314771',
                'website' => 'www.google.com',
                'lokasi' => 'Bandung',
                'deskripsi' => 'Google adalah perusahaan multinasional Amerika Serikat yang berkekhususan pada jasa dan produk Internet seperti pencarian, komputasi web, perangkat lunak, dan periklanan daring.',
                'bidang' => 'teknologi'
            ],

        ]);
    }
}
