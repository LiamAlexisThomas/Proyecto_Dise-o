<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cliente>
 */
class ClienteFactory extends Factory
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
            'dni' => fake()->unique()->numerify('########'),
            'direccion' => fake('es_ES') -> address(),
            'telefono' => fake()->numerify('##########'),
            'fechaNac' => fake()->date(),
        ];
    }
}
