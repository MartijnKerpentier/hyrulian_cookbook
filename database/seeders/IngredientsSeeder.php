<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            [
                'name' => 'Any Radish',
            ],
            [
                'name' => 'Hydromelon',
            ],
            [
                'name' => 'Voltfruit',
            ],
            [
                'name' => 'Fresh Milk',
            ],
            [
                'name' => 'Fortified Pumpkin',
            ],
            [
                'name' => 'Goat Butter',
            ],
            [
                'name' => 'Tabantha Wheat',
            ],
            [
                'name' => 'Any Carrot or Pumpkin',
            ],
            [
                'name' => 'Rock Salt',
            ],
            [
                'name' => 'Any Mushroom',
            ],
            [
                'name' => 'Any Herb, Flower, or Vegetable',
            ],
            [
                'name' => 'Any Carrot',
            ],
            [
                'name' => 'Hylian Rice',
            ],
            [
                'name' => 'Goron Spice',
            ],
            [
                'name' => 'Bird Egg',
            ],
            [
                'name' => 'Four Different Mushrooms',
            ],
            [
                'name' => 'Any Herb, Flower, or Vegetable combined',
            ],
            [
                'name' => 'Four Different Herbs, Flowers, or Vegetables',
            ],
            [
                'name' => 'Hearty Blueshell Snail',
            ],
            [
                'name' => 'Any Seafood',
            ],
            [
                'name' => 'Any Porgy',
            ],
            [
                'name' => 'Hearty Salmon',
            ],
            [
                'name' => 'Any Crab',
            ],
            [
                'name' => 'Any Fish',
            ],
            [
                'name' => 'Courser Bee Honey',
            ],
            [
                'name' => 'Four Different Seafoods',
            ],
            [
                'name' => 'Spicy Pepper',
            ],
            [
                'name' => 'Any Snail or Crab',
            ],
            [
                'name' => 'Raw Gourmet Meat',
            ],
            [
                'name' => 'Raw Whole Bird',
            ],
            [
                'name' => 'Raw Bird Thigh',
            ],
            [
                'name' => 'Raw Meat',
            ],
            [
                'name' => 'Raw Bird Drumstick',
            ],
            [
                'name' => 'Any Meat',
            ],
            [
                'name' => 'Raw Prime Meat',
            ],
            [
                'name' => 'Four Different Meats',
            ],
            [
                'name' => 'Hyrule Bass',
            ],
            [
                'name' => 'Apple',
            ],
            [
                'name' => 'Cane Sugar',
            ],
            [
                'name' => 'Any Fruit',
            ],
            [
                'name' => 'Wildberry',
            ],
            [
                'name' => 'Any Nut',
            ],
            [
                'name' => 'Mighty Bananas',
            ],
            [
                'name' => 'Monster Extract',
            ],
            [
                'name' => 'Two or more effects',
            ],
            [
                'name' => 'Different Monster Parts',
            ],
            [
                'name' => 'Gemstones',
            ],
            [
                'name' => 'Wood or Gemstones',
            ],
            [
                'name' => 'Fairy',
            ],
            [
                'name' => 'Any Creature',
            ],
            [
                'name' => 'Four Different Fruits',
            ],
            [
                'name' => 'Any Vegetable',
            ],
            [
                'name' => 'Any Gourmet Meat',
            ],
            [
                'name' => 'Apple or Wildberry',
            ],
            [
                'name' => 'Raw Meat or Raw Bird Drumstick',
            ],
            [
                'name' => 'Chilly Critter',
            ],
            [
                'name' => 'Electro Critter',
            ],
            [
                'name' => 'Enduring Critter',
            ],
            [
                'name' => 'Energizing Critter',
            ],
            [
                'name' => 'Fireproof Critter',
            ],
            [
                'name' => 'Hasty Critter',
            ],
            [
                'name' => 'Hearty Animal',
            ],
            [
                'name' => 'Mighty Animal',
            ],
            [
                'name' => 'Sneaky Critter',
            ],
            [
                'name' => 'Spicy Critter',
            ],
            [
                'name' => 'Tough Critter',
            ],
            [
                'name' => 'Any Monster Part',
            ],
            [
                'name' => 'Hylian Tomato'
            ],
            [
                'name' => 'Stambulb'
            ],
            [
                'name' => 'Oil Jar'
            ],
            [
                'name' => 'Hateno Cheese'
            ],
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
    }
}
