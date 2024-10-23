<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Category, Product, Movement, User};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Category::factory(20)->create();
        Product::factory(100)->create();
        Movement::factory(5000)->create();
    }
}
