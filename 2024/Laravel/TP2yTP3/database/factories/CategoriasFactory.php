<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categorias>
 */
class CategoriasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //ESTABLECE QUE ME GENERE UNA SOLA CATEGORIA DE CADA UNA
            "nombre"=>$this->faker->unique()->randomElement(["Romance","Fantasia","Misterio y suspenso","Bibliografia","Historia","Obras de teatro"])
        ];
    }
}
