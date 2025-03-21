<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ventas>
 */
class VentasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "fecha_realizada"=>$this->faker->dateTime(),
            "precio_total"=>$this->faker->randomFloat(2, 5000, 100000),
            "auto_Id"=>$this->faker->numberBetween(1, 100),
            "cliente_Id"=>$this->faker->numberBetween(1, 50)
        ];
    }
}
