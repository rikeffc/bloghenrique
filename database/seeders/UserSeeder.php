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
            'name' => 'Henrique de Jesus',
            'email' => 'henrique_de_jesus@hotmail.com',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => 'Henrique de Jesus 2',
            'email' => 'henrique_de_jesus2@hotmail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
