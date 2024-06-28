<?php

namespace Database\Factories;

use App\Models\cliente;
use App\Models\diseñador;
use App\Models\proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\contrato>
 */
class ContratoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cliente_id' =>cliente::all()->random()->id,
            'diseñador_id' =>diseñador::all()->random()->id,
            'proyecto_id' =>proyecto::all()->random()->id,
        ];
    }
}
