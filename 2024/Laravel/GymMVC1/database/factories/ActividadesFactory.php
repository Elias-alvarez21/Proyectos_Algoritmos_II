<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\actividades>
 */
class ActividadesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "descripcion"=>$this->faker->sentences(),
            "precio"=>$this->faker->randomFloat(2,10,100),
            "habilitada"=>$this->faker->boolean()
        ];
    }
}
