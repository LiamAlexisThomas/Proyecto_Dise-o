<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' =>fake('es_ES')->name(),
            'descripcion' =>fake()->text(),
            'cantidad' =>fake()->numerify('####'),
            'precioUnid' =>fake()->numerify('####'),
        ];
    }
}
