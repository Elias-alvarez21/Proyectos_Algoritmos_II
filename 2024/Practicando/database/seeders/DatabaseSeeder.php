<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Categorias;
use \App\Models\Autores;
use \App\Models\Libros;
use \App\Models\Ventas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Categorias::factory(6)->create();
        Autores::factory(50)->create();
        Libros::factory(100)->create();
        Ventas::factory(250)->create();
    }
}
