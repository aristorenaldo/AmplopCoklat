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
                'username' => 'Dunasi',
                'email' => 'duwi@gmail.com',
                'password' => Hash::make('password123'),
                'role' => '0'// pelamar
            ],
            [
                'username' => 'Edward',
                'email' => 'edward@dummy.com',
                'password' => Hash::make('password123'),
                'role' => 1, // perusahaan
            ],
            [
                'username' => 'Elon Musk',
                'email' => 'musk@dummy.com',
                'password' => Hash::make('password123'),
                'role' => 1, // perusahaan
            ]
            ]);
    }
}
