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
                'user_id' => '2',
                'nama' => 'Google LLC',
                'kontak' => '0315314771',
                'website' => 'www.google.com',
                'lokasi' => 'Bandung',
                'deskripsi' => 'Google adalah perusahaan multinasional Amerika Serikat yang berkekhususan pada jasa dan produk Internet seperti pencarian, komputasi web, perangkat lunak, dan periklanan daring.',
                'bidang' => 'teknologi'
            ],
            [
                'user_id' => '3',
                'nama' => 'Tokopedia',
                'kontak' => '0729919143',
                'website' => 'www.google.com',
                'lokasi' => 'Jakarta Pusat',
                'deskripsi' => 'Tokopedia adalah perusahaan internet yang memungkinkan setiap individu dan pemilik bisnis di Indonesia untuk mengembangkan dan mengelola bisnis online mereka secara mudah dan gratis, sekaligus memungkinkan pengalaman berbelanja online yang lebih aman dan nyaman',
                'bidang' => 'teknologi'
            ],
            
        ]);
    }
}
