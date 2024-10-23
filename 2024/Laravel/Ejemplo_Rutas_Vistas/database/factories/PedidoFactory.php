<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'clienteId' => $this->faker->numberBetween(1, 1000),
            'fecha' => $this->faker->date(),
            'total' => $this->faker->randomFloat(2)
        ];
    }
}
