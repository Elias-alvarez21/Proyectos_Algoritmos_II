<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pagos>
 */
class PagosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "actividadId"=>$this->faker->numberBetween(1,1000), 
            "socioId" =>$this->faker->numberBetween(1,1000), 
            "modalidad"=>$this->faker->randomElement(['Efectivo','Débito', 'Crédito', 'Transferencia', 'Billetera Virtual']),            
            "precio"=>$this->faker->randomFloat(2,10,100),
            "anulado"=>$this->faker->boolean()
        ];
    }
}
