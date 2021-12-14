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
                'bidang' => 'Teknologi'
            ],
            [
                'user_id' => '4',
                'nama' => 'Tesla, Inc.',
                'kontak' => '0335114771',
                'website' => 'www.tesla.com',
                'lokasi' => 'Jakarta',
                'deskripsi' => 'Tesla, Inc. adalah sebuah perusahaan otomotif dan penyimpanan energi asal Amerika Serikat yang didirikan oleh Elon Musk, Martin Eberhard, Marc Tarpenning, JB Straubel dan Ian Wright, serta berbasis di Palo Alto, California.',
                'bidang' => 'Otomotif'
            ],
            [
                'user_id' => '6',
                'nama' => 'Tokopedia',
                'kontak' => '0335114771',
                'website' => 'www.tokopedia.com',
                'lokasi' => 'Malang',
                'deskripsi' => 'Tokopedia merupakan perusahaan perdagangan elektronik atau sering disebut toko daring. Sejak didirikan pada tahun 2009, Tokopedia telah bertransformasi menjadi sebuah unicorn yang berpengaruh tidak hanya di Indonesia tetapi juga di Asia Tenggara.',
                'bidang' => 'Elektronik Industri'
            ],

        ]);
    }
}
