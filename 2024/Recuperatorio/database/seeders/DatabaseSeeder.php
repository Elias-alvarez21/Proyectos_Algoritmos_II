<?php

namespace Database\Seeders;

use App\Models\{User,Areas,Asignacion,RRHH};
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Areas::factory(8)->create();
        RRHH::factory(5)->create();
        Asignacion::factory(10)->create();
    }
}
