<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    public function run()
    {
        DB::table('areas')->insert([
            ['localizacao' => 'Área 1', 'tamanho' => 50.75],
            ['localizacao' => 'Área 2', 'tamanho' => 30.25],
            ['localizacao' => 'Área 3', 'tamanho' => 75.00],
        ]);
    }
}
