<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about')->insert([
            'judul' => 'jdul ketiga',
            'deskripsi' => 'deskripsi judul ke 3',
            'img' => 'asrama0.jpeg',
        ]);
    }
}