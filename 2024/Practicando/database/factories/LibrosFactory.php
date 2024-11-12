<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libros>
 */
class LibrosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             "titulo"=>$this->faker->sentence(),
             "autor_Id"=>$this->faker->numberBetween(1,50),
             "categoria_Id"=>$this->faker->numberBetween(1,6),
             "precio"=>$this->faker->randomFloat(2, 5, 100)      
            
        ];
    }
}
