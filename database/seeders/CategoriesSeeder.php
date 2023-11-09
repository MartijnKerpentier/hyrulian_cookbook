<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Soup'
            ],
            [
                'name' => 'Stew'
            ],
            [
                'name' => 'Risotto'
            ],
            [
                'name' => 'Rice Curry'
            ],
            [
                'name' => 'Rice Balls'
            ],
            [
                'name' => 'Other Rice Dishes'
            ],
            [
                'name' => 'Omelette'
            ],
            [
                'name' => 'Sauté'
            ],
            [
                'name' => 'Salt-Grilled'
            ],
            [
                'name' => 'Steamed'
            ],
            [
                'name' => 'Skewer'
            ],
            [
                'name' => 'Fried'
            ],
            [
                'name' => 'Pie'
            ],
            [
                'name' => 'Meuniere'
            ],
            [
                'name' => 'Glazed'
            ],
            [
                'name' => 'Stir-Fried'
            ],
            [
                'name' => 'Spicy Peppered'
            ],
            [
                'name' => 'Meat Stuffed'
            ],
            [
                'name' => 'Pilafs'
            ],
            [
                'name' => 'Fried'
            ],
            [
                'name' => 'Cake'
            ],
            [
                'name' => 'Crepe'
            ],
            [
                'name' => 'Other Sweets or Pastries'
            ],
            [
                'name' => 'Honeyed'
            ],
            [
                'name' => 'Dubious'
            ],
            [
                'name' => 'Potions and Elixirs'
            ],
            [
                'name' => 'Simmered'
            ],
            [
                'name' => 'Drinks'
            ],
            [
                'name' => 'Mixed'
            ],
            [
                'name' => 'Monster Food'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
