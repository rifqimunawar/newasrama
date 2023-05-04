<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kamar')->insert([
            'kamar' => 'Kamar 1',
        ]);
        DB::table('kamar')->insert([
            'kamar' => 'Kamar 2',
        ]);
    }
}