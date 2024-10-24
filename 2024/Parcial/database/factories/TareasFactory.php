<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tareas>
 */
class TareasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { 
        
        return [
            //"User_Id"=>$this->faker->numberBetweeen(1,2),
            //ALTA
            "prioriodad"=>$this->faker->numberBetween(1,10),
            "descripcion"=>$this->faker->sentence(),
            "vencimiento"=>$this->faker->date(),
            "estado"=>$this->faker->randomElements(["pending","finished","expired"])
        ];
    }
}
