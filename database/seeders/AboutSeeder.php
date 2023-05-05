<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'img' => 'about_-1678439711.jpeg',
            'link' => 'youtube.com',
            'deskripsi' => 'deskripsi judul ke 3',
        ]);
    }
}