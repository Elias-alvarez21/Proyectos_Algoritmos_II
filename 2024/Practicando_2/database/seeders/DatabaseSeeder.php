<?php

namespace Database\Seeders;

use App\Models\{User,Autos,Ventas,Clientes};
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Autos::factory(100)->create();
        Clientes::factory(50)->create();
        Ventas::factory(75)->create();
    }
}
