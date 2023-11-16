<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategoriesSeeder::class,
            IngredientsSeeder::class,
            RecipesSeeder::class
        ]);

        User::factory()->create([
            'email' => 'link@email.com',
            'password' => bcrypt('password'),
            'name' => 'Link'
        ]);
        User::factory(10)->create();
    }
}
