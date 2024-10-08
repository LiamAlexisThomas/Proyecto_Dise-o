<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pago>
 */
class PagoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cuentaPago' =>fake()->name(),
            'fechaLim' =>fake()->date(),
            'monto' =>fake()->numerify('####'),
            'tipo' =>fake()->text(20),
        ];
    }
}
