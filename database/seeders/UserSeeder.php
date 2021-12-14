<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'username' => 'Dunasi', //id =1
                'email' => 'duwi@gmail.com',
                'password' => Hash::make('password123'),
                'role' => '0'// pelamar
            ],
            [
                'username' => 'Edward', //id = 2
                'email' => 'edward@dummy.com',
                'password' => Hash::make('password123'),
                'role' => 1, // perusahaan
            ],
            [
                'username' => 'Ayuser', //id = 3
                'email' => 'Ayus@dummy.com',
                'password' => Hash::make('password123'),
                'role' => 1, // perusahaan
            ],
            [
                'username' => 'Elon Musk', //id =4
                'email' => 'musk@dummy.com',
                'password' => Hash::make('password123'),
                'role' => 1, // perusahaan
            ],
            [
                'username' => 'Sule', //id = 5
                'email' => 'sule@dummy.com',
                'password' => Hash::make('password123'),
                'role' => 1, // perusahaan
            ], 
            [
                'username' => 'William Tanuwijaya',
                'email' => 'tanu@dummy.com',
                'password' => Hash::make('password123'),
                'role' => 1, // perusahaan
            ]
            ]);
    }
}
