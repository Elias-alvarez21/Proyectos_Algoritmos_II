<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asignacion>
 */
class AsignacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "rrhh"=>$this->faker->numberBetween(1,5),
            "areas"=>$this->faker->numberBetween(1,8),
            "fecha"=>$this->faker->date(),
            "habilitado"=>$this->faker->boolean()
        ];
    }
}
