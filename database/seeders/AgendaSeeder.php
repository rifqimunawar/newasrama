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
        DB::table('agendas')->insert([
            'hari' => 'senin',
            'waktu' => '21.00',
            'kegiatan' => 'mengaji sambil tidur',
        ]);
        DB::table('agendas')->insert([
            'hari' => 'selasa',
            'waktu' => '21.00',
            'kegiatan' => 'dakwah',
        ]);
    }
}