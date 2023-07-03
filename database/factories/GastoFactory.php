<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;
use App\Models\Perfile;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gasto>
 */
class GastoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'detalle' => $this->faker->text(255),
            'importe' => $this->faker->randomFloat(2,500,10000),
            'fecha' => $this->faker->date(),
            'fijo' => $this->faker->randomDigit(),
            'categoria_id' => Categoria::all()->random()->id,
            'perfile_id' => Perfile::all()->random()->id
        ];
    }
}
