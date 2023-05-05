<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'user',
            'role_id' => '1',
            'kamar_id' => '1',
            'domisili' => 'Cianjur',
            'kampus' => 'uin',
            'pembayaran' => '500.000',
            'email' => 'rifqi@gmail.com',
            'password' => Hash::make('rifqi'),
        ]);
    }
}