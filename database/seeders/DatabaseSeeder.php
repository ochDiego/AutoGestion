<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Categoria::factory(10)->create();
        \App\Models\Perfile::factory(7)->create();
        \App\Models\Ingreso::factory(20)->create();
        \App\Models\Etiqueta::factory(12)->create();

        $this->call(GastoSeeder::class);

        \App\Models\Item::factory(25)->create();

        
    }
}
