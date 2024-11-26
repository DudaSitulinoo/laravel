<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsumoSeeder extends Seeder
{
    public function run()
    {
        DB::table('insumos')->insert([
            ['nome' => 'Fertilizante A', 'quantidade' => 120.50],
            ['nome' => 'Fertilizante B', 'quantidade' => 75.00],
            ['nome' => 'Herbicida C', 'quantidade' => 200.00],
        ]);
    }
}
