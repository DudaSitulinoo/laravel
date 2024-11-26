<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CulturaSeeder extends Seeder
{
    public function run()
    {
        DB::table('culturas')->insert([
            ['nome' => 'Milho'],
            ['nome' => 'Soja'],
            ['nome' => 'Trigo'],
        ]);
    }
}
