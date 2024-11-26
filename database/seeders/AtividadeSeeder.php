<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtividadeSeeder extends Seeder
{
    public function run()
    {
        $area1 = DB::table('areas')->first();
        $cultura1 = DB::table('culturas')->first();
        $insumo1 = DB::table('insumos')->first();
        DB::table('atividades')->insert([
            ['cultura_id' => 1, 'area_id' => 1, 'insumo_id' => 1, 'descricao' => 'Plantio inicial', 'data_hora' => '2024-01-15T08:00:00'],
            ['cultura_id' => 2, 'area_id' => 2, 'insumo_id' => 2, 'descricao' => 'Adubação', 'data_hora' => '2024-02-10T10:30:00'],
            ['cultura_id' => 3, 'area_id' => 3, 'insumo_id' => 3, 'descricao' => 'Controle de pragas', 'data_hora' => '2024-03-05T14:00:00'],
            ['cultura_id' => 1, 'area_id' => 1, 'insumo_id' => 2, 'descricao' => 'Colheita', 'data_hora' => '2024-04-20T16:00:00'],
        ]);
    }
}
