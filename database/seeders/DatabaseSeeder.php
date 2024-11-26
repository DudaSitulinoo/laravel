<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AreaSeeder::class,
            CulturaSeeder::class,
            InsumoSeeder::class,
            AtividadeSeeder::class,
        ]);
    }
}
