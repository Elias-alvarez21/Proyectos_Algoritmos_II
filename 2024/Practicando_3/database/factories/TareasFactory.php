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
            "usuario_Id"=>$this->faker->numberBetween(1,2),
            "prioridad"=>$this->faker->numberBetween(1,10),
            "descripcion"=>$this->faker->name(),
            "vencimiento"=>$this->faker->date(),
            "alta"=>$this->faker->date(),
            "estado"=>$this->faker->randomElement(["pending","finished","expired"])
        ];
    }
}
