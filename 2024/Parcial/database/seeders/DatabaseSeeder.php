<?php

namespace Database\Seeders;

use App\Models\{User,Tareas,Tareas_1};
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory()->create(2);
        Tareas::factory()->create(15);
    }
}
