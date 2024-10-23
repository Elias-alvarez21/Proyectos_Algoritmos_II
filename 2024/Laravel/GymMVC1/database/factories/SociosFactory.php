<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\socios>
 */
class SociosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "apellido"=>$this->faker->name(),
            "nombre"=>$this->faker->surname(),
            "DNI" =>$this->faker->numberBetween(30000000, 50000000),
            "fechaNacimiento" =>$this->faker->date(),
            "genero"=>$this->faker->randomElement(['Masculino','Femenino', 'Otros']),
            "actividadId"=>$this->faker->numberBetween(1,1000)       
        ];
    }
}
