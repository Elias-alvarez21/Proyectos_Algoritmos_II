<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
   public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'email' => $this->faker->email(),
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address()
        ];
    }
}
