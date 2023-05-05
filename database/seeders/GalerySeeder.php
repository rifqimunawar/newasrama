<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galeries')->insert([
            'judul' => 'galeri 1',
            'img' => 'asrama0.jpeg',
        ]);
        DB::table('galeries')->insert([
            'judul' => 'galeri 2',
            'img' => 'asrama0.jpeg',
        ]);
    }
}