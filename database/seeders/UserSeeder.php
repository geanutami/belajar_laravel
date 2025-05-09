<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Pembeli',
                'email' => 'pembeli@gmail.com',
                'password' => Hash::make('qwerty'),
                'level' => '1',
            ],
            [
                'name' => 'Admin Toko',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('qwerty'),
                'level' => '2',
            ],
            [
                'name' => 'Kepala Toko',
                'email' => 'kepalatoko@gmail.com',
                'password' => Hash::make('qwerty'),
                'level' => '3',
            ],
        ]);
    }
}
