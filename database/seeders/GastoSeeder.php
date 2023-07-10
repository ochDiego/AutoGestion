<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gasto;
use App\Models\Pago;

class GastoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\Pago::factory(12)->create();

        $gastos = Gasto::factory(15)->has(Pago::factory())->create();

        foreach ($gastos as $gasto) {
            $gasto->etiquetas()->attach([
                rand(1,4),
                rand(5,8),
                rand(9,12)
            ]);
        }
    }
}
