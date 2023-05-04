<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agenda')->insert([
            'hari' => 'senin',
            'waktu' => '21.00',
            'kegiatan' => 'mancing',
        ]);
        DB::table('agenda')->insert([
            'hari' => 'senin',
            'waktu' => '10.00',
            'kegiatan' => 'mancing',
        ]);
    }
}