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
            "libro_Id"=>$this->faker->numberBetween(1,1000),
            "fecha"=>$this->faker->dateTime(),
            "total"=>$this->faker->randomFloat(2)
        ];
    }
}
