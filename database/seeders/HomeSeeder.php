<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homes')->insert([
            'judul' => 'visi dan misi',
            'deskripsi' => 'Keterangan visi dan misi',
            'img' => 'asrama0.jpeg',
        ]);
        DB::table('homes')->insert([
            'judul' => 'asramanya bagus',
            'deskripsi' => 'Keterangan deskripsi kedua',
            'img' => 'asrama0.jpeg',
        ]);
        DB::table('homes')->insert([
            'judul' => 'jdul ketiga',
            'deskripsi' => 'deskripsi judul ke 3',
            'img' => 'asrama0.jpeg',
        ]);
    }
}