<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movimientos>
 */
class MovimientosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //datos falsos
        'user_id' => 1,
        'descripcion' => $this->faker->sentence(3),
        'comentario' => $this->faker->sentence(3),
        'tipo' => $this->faker->randomElement(['ingreso', 'egreso']),
        'monto' => $this->faker->numberBetween(100, 10000),
        'fecha' => $this->faker->date(),
        'categoria' => $this->faker->randomElement(['alimentación', 'transporte', 'salud', 'otros']),
        ];
    }
}
