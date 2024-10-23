<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\{actividades,socios,pagos};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      actividades::factory(1000)->create();
      socios::factory(1000)->create();
      pagos::factory(1000)->create();  
    }
}
