<?php

namespace Database\Factories;

use App\Models\diseñador;
use App\Models\material;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\proyecto>
 */
class ProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'confirmacion' => fake()->boolean(),
            'fechaProy' => fake()->date(),
            'lugar' => fake()->name(),
        ];
    }
}
