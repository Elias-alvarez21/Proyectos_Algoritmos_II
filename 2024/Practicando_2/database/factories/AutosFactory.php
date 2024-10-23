<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autos>
 */
class AutosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "marca"=>$this->faker->randomElement(['Toyota', 'Honda', 'Ford', 'Chevrolet','Mitsubishi','Peugeot','Fiat','MC-Laren','Ferrari']),
            "modelo"=>$this->faker->word(),
            "año"=>$this->faker->date(),
            "color"=>$this->faker->safeColorName(),
            "precio"=>$this->faker->randomFloat(2, 5000, 100000)
        ];
    }
}
