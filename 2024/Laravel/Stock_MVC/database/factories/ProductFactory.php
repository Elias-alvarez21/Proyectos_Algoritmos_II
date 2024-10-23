<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idcategory' => $this->faker->numberBetween(1, 20),
            'denomination' => $this->faker->word(100),
            'additional_info' => $this->faker->sentence,
            'price' => $this->faker->randomNumber(3),
            'stock' => $this->faker->randomNumber(2, false),
        ];
    }
}
