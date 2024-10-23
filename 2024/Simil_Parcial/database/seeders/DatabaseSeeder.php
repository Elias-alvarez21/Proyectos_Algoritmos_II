<?php

namespace Database\Seeders;

use App\Models\{User,areas,personas};
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        areas::factory(50)->create();
        personas::factory(10)->create();
    }
}
