<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clientes>
 */
class ClientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nombre"=>$this->faker->name(),
            "apellido"=>$this->faker->lastname(),
            "email"=>$this->faker->unique->safeEmail(),
            "telefono"=>$this->faker->phoneNumber(),
            "direccion"=>$this->faker->address()
        ];
    }
}
