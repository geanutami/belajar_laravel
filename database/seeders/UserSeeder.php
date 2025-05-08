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
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('qwerty'),
                'level' => '1',
            ],
            [
                'name' => 'AL',
                'email' => 'al@gmail.com',
                'password' => Hash::make('qwerty'),
                'level' => '2',
            ],
            [
                'name' => 'AH',
                'email' => 'ah@gmail.com',
                'password' => Hash::make('qwerty'),
                'level' => '3',
            ],
        ]);
    }
}
