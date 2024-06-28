<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\diseñador>
 */
class DiseñadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake('es_ES') -> name(),
            'email' => fake()->unique()->safeEmail(),
            'telefono' => fake()->unique()->numerify('##########'),
            'fechaNac' => fake()->date(),
        ];
    }
}
