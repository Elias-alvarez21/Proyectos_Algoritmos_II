<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class personasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   $a=['Activo', 'Baja', 'Jubilado'];
        return [
            'legajo' => $this->faker->numberBetween(100000, 999999),
            'area_Id' => $this->faker->numberBetween(1, 50),
            'apellido' => $this->faker->lastName(),
            'nombre' => $this->faker->firstName(),
            'fecha_ingreso' => $this->faker->date(),
            'estado' => $this->faker->randomElement($a)
        ];
    }
}
