<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'idproduct' => $this->faker->numberBetween(1, 100),
                'quantity' => $this->faker->numberBetween(-100, 100),
                'observations' => $this->faker->sentence,
            ];
    }
}
