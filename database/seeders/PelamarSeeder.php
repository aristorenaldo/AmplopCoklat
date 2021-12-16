<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelamars')->insert([
            [
                'user_id' => '1',
                'nama' => 'Duwi Purnama Sidik',
                'alamat' => 'Jalan blablabla Malang, Jawa Timur',
                'jenis_kelamin' => '0',
                'jenis_disabilitas' => '2',
                'resume' => 'resume1.pdf'
            ]
        ]);
    }
}
