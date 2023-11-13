<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            [
                'name' => 'Apple Pie',
                'ingredients' => [
                    'Tabantha Wheat',
                    'Cane Sugar',
                    'Goat Butter',
                    'Apple',
                ],
                'description' => 'The crispy, flaky pie crust and sweet apples are a match made in heaven.'
            ],
            [
                'name' => 'Carrot Cake',
                'ingredients' => [
                    'Tabantha Wheat',
                    'Cane Sugar',
                    'Goat Butter',
                    'Any Carrot',
                ],
                'description' => "Even those who don't like carrots tend to enjoy the mild sweetness of this cake."
            ],
            [
                'name' => 'Carrot Stew',
                'ingredients' => [
                    'Fresh Milk',
                    'Goat Butter',
                    'Any Carrot',
                ],
                'description' => 'This simple stew sat simmering for a long time to bring out the sweetness of the carrots.'
            ],
            [
                'name' => 'Clam Chowder',
                'ingredients' => [
                    'Fresh Milk',
                    'Tabantha Wheat',
                    'Goat Butter',
                    'Hearty Blueshell Snail',
                ],
                'description' => 'The nutritional value of hearty blueshell snail combines with butter and milk in a rich soup.'
            ],
            [
                'name' => 'Crab Omelet with Rice',
                'ingredients' => [
                    'Hylian Rice',
                    'Bird Egg',
                    'Rock Salt',
                    'Any Crab',
                ],
                'description' => 'The fluffy crab legs pair perfectly with the rice for a truly scrumptious dish.'
            ],
            [
                'name' => 'Crab Risotto',
                'ingredients' => [
                    'Hylian Rice',
                    'Goat Butter',
                    'Rock Salt',
                    'Any Crab',
                ],
                'description' => 'An everyday staple of seaside villages, the secret to its delicious flavor lies in crab fat.'
            ],
            [
                'name' => 'Crab Stir-Fry',
                'ingredients' => [
                    'Goron Spice',
                    'Any Crab',
                ],
                'description' => 'The Goron spice used in preparing this crab pairs perfectly with the flavor of the meat.'
            ],
            [
                'name' => 'Cream of Mushroom Soup',
                'ingredients' => [
                    'Any Mushroom',
                    'Any Herb, Flower, or Vegetable',
                    'Fresh Milk',
                    'Rock Salt',
                ],
                'description' => 'The creamy mushroom and vegetable soup is so chunky it eats like a meal!'
            ],
            [
                'name' => 'Cream of Vegetable Soup',
                'ingredients' => [
                    'Any Herb, Flower, or Vegetable',
                    'Fresh Milk',
                    'Rock Salt',
                ],
                'description' => 'Made by simmering vegetables in milk, this healthy dish is as simple as the ingredients.'
            ],
            [
                'name' => 'Creamy Heart Soup',
                'ingredients' => [
                    'Hydromelon',
                    'Voltfruit',
                    'Any Radish',
                    'Fresh Milk',
                ],
                'description' => 'Enjoying this sweet soup with another person will bring you both closer together.'
            ],
            [
                'name' => 'Creamy Meat Soup',
                'ingredients' => [
                    'Any Meat',
                    'Any Herb, Flower, or Vegetable',
                    'Fresh Milk',
                    'Rock Salt',
                ],
                'description' => 'This nutritious soup contains serious portions of lightly-braised meat and many vegetables.'
            ], [
                'name' => 'Creamy Seafood Soup',
                'ingredients' => [
                    'Any Seafood',
                    'Any Herb, Flower, or Vegetable',
                    'Fresh Milk',
                    'Rock Salt',
                ],
                'description' => 'Thick-cut chunks of seafood and stock provides a satisfying savoriness.'
            ],
            [
                'name' => 'Curry Pilaf',
                'ingredients' => [
                    'Hylian Rice',
                    'Bird Egg',
                    'Goat Butter',
                    'Goron Spice',
                ],
                'description' => "The Goron spice used in this pilaf has given it a rich, spicy aroma."
            ],
            [
                'name' => 'Curry Rice',
                'ingredients' => [
                    'Hylian Rice',
                    'Goron Spice',
                ],
                'description' => "A favorite all over Hyrule, this simple dish has a flavor you just won't get tired of."
            ],
            [
                'name' => 'Dubious Food',
                'ingredients' => [
                    'Different Monster Parts',
                    'Gemstones',
                    'Two or more effects',
                ],
                'description' => "It's too gross to even look at. A bizarre smell issues forth from this heap. Eating it won't hurt you though...probably."
            ],
            [
                'name' => 'Egg Pudding',
                'ingredients' => [
                    'Fresh Milk',
                    'Bird Egg',
                    'Cane Sugar',
                ],
                'description' => 'Made by cooking eggs and milk in a special mold, its soft texture melts in your mouth.'
            ],
            [
                'name' => 'Egg Tart',
                'ingredients' => [
                    'Tabantha Wheat',
                    'Bird Egg',
                    'Cane Sugar',
                    'Goat Butter',
                ],
                'description' => "You'll know this simple dessert is done baking when it smells just delightful."
            ],
            [
                'name' => 'Energizing Honey Candy',
                'ingredients' => [
                    'Courser Bee Honey',
                ],
                'description' => 'A natural sweet, brimming with nutrition and made by stewing fresh honey.'
            ],
            [
                'name' => 'Fish Pie',
                'ingredients' => [
                    'Tabantha Wheat',
                    'Goat Butter',
                    'Rock Salt',
                    'Any Seafood',
                ],
                'description' => "A mainstay in any fisherman's home, the crisp crust pairs well with the fishy flavor."
            ],
            [
                'name' => 'Fish Skewer',
                'ingredients' => [
                    'Any Fish',
                ],
                'description' => 'A simple dish made by cooking chunks of fresh fish on a skewer.'
            ],
            [
                'name' => 'Fish and Mushroom Skewer',
                'ingredients' => [
                    'Any Fish',
                    'Any Mushroom',
                ],
                'description' => 'A simple dish made by cooking skewered, fresh fish alongside fragrant mushrooms.'
            ],
            [
                'name' => 'Fragrant Mushroom Sauté',
                'ingredients' => [
                    'Goron Spice',
                    'Any Mushroom',
                ],
                'description' => 'The fragrant aroma of this sautéed spice and mushroom dish makes your mouth water.'
            ],
            [
                'name' => 'Fried Bananas',
                'ingredients' => [
                    'Mighty Bananas',
                    'Cane Sugar',
                    'Tabantha Wheat',
                ],
                'description' => 'Children love fried mighty bananas. The trick is frying them over very high heat.'
            ],
            [
                'name' => 'Fried Egg and Rice',
                'ingredients' => [
                    'Hylian Rice',
                    'Bird Egg',
                ],
                'description' => "The soft egg yolk pairs well with the fresh rice in this simple dish."
            ],
            [
                'name' => 'Fried Wild Greens',
                'ingredients' => [
                    'Any Herb, Flower, or Vegetable',
                ],
                'description' => 'A basic vegetable dish made by sautéing fresh wild plants.'
            ],
            [
                'name' => 'Copious Fried Wild Greens',
                'ingredients' => [
                    'Four different Herbs, Flowers, or Vegetables',
                ],
                'description' => 'A healthy dish made by cooking mixed greens over a strong flame.'
            ],
            [
                'name' => 'Fruit and Mushroom Mix',
                'ingredients' => [
                    'Any Fruit',
                    'Any Mushroom',
                ],
                'description' => 'This dish contrasts the sweetness of fruit with the savoriness of mushrooms.'
            ],
            [
                'name' => 'Fruit Pie',
                'ingredients' => [
                    'Any Fruit',
                    'Tabantha Wheat',
                    'Cane Sugar',
                    'Goat Butter',
                ],
                'description' => "A celebration isn't a celebration until this fruit-filled crust hits the table!"
            ],
            [
                'name' => 'Fruitcake',
                'ingredients' => [
                    'Apple or Wildberry',
                    'Any Fruit',
                    'Tabantha Wheat',
                    'Cane Sugar',
                ],
                'description' => 'Making ample use of fruits found all over Hyrule, this cake is a must for celebrations.'
            ],
            [
                'name' => 'Glazed Meat',
                'ingredients' => [
                    'Courser Bee Honey',
                    'Any Meat',
                ],
                'description' => 'The sweetness of the honey permeates the meat, giving it a complex taste profile.'
            ],
            [
                'name' => 'Glazed Mushrooms',
                'ingredients' => [
                    'Courser Bee Honey',
                    'Any Mushroom',
                ],
                'description' => 'The honey in this mushroom dish gives it a sweet, complex taste and a savory finish.'
            ],
            [
                'name' => 'Glazed Seafood',
                'ingredients' => [
                    'Courser Bee Honey',
                    'Any Seafood',
                ],
                'description' => 'A seafood dish that you can actually wolf down whole!'
            ],
            [
                'name' => 'Glazed Veggies',
                'ingredients' => [
                    'Courser Bee Honey',
                    'Any Herb, Flower, or Vegetable',
                ],
                'description' => "Don't like the taste of vegetables? Simply sauté them in honey for a salty-sweet flavor!"
            ],
            [
                'name' => 'Gourmet Meat and Rice Bowl',
                'ingredients' => [
                    'Raw Gourmet Meat',
                    'Hylian Rice',
                    'Rock Salt',
                ],
                'description' => 'Only the most carefully selected cuts of high-quality meats go into this dish.'
            ],
            [
                'name' => 'Gourmet Meat and Seafood Fry',
                'ingredients' => [
                    'Any Gourmet Meat',
                    'Any Seafood',
                ],
                'description' => "A marriage of the choicest cuts of meat and seafood. As delicious as it is filling!"
            ],
            [
                'name' => 'Gourmet Meat Curry',
                'ingredients' => [
                    'Raw Gourmet Meat',
                    'Goron Spice',
                    'Hylian Rice',
                ],
                'description' => 'The high-quality meat used in this prized dish satisfies meat and curry lovers alike.'
            ],
            [
                'name' => 'Gourmet Meat Stew',
                'ingredients' => [
                    'Any Gourmet Meat',
                    'Tabantha Wheat',
                    'Fresh Milk',
                    'Goat Butter',
                ],
                'description' => 'The meat has simmered for so long it melts in your mouth. A true bucket-list meal!'
            ],
            [
                'name' => 'Gourmet Poultry Curry',
                'ingredients' => [
                    'Raw Whole Bird',
                    'Goron Spice',
                    'Hylian Rice',
                ],
                'description' => 'Once served in Hyrule Castle, the poultry used in this dish is of immensely high quality.'
            ],
            [
                'name' => 'Gourmet Poultry Pilaf',
                'ingredients' => [
                    'Raw Whole Bird',
                    'Hylian Rice',
                    'Goat Butter',
                    'Bird Egg',
                ],
                'description' => 'Made with the highest-quality poultry, every bite of this pilaf floods your mouth with flavor.'
            ],
            [
                'name' => 'Gourmet Spiced Meat Skewer',
                'ingredients' => [
                    'Raw Gourmet Meat',
                    'Goron Spice',
                ],
                'description' => 'The rich aroma and juicy texture of this high-quality meat puts it in a league of its own.'
            ],
            [
                'name' => 'Herb Sauté',
                'ingredients' => [
                    'Any Herb, Flower, or Vegetable',
                    'Goron Spice',
                ],
                'description' => "A fragrant mixture of herbs and spices.
                It's easily recognized by its unique aroma."
            ],
            [
                'name' => 'Energizing Honey Crepe',
                'ingredients' => [
                    'Fresh Milk',
                    'Bird Egg',
                    'Tabantha Wheat',
                    'Cane Sugar',
                    'Courser Bee Honey',
                ],
                'description' => 'Honey has been drizzled over thin crepes to bring out their natural sweetness and flavor.'
            ],
            [
                'name' => 'Honeyed Apple',
                'ingredients' => [
                    'Apple',
                    'Courser Bee Honey',
                ],
                'description' => 'A juicy sweet-and-sour dish combining newly ripened apples with honey.'
            ],
            [
                'name' => 'Honeyed Fruits',
                'ingredients' => [
                    'Courser Bee Honey',
                    'Any Fruit',
                ],
                'description' => 'A dish that combines the thick sweetness of honey with the acidity of sour fruits.'
            ],
            [
                'name' => 'Hot Buttered Apple',
                'ingredients' => [
                    'Apple',
                    'Goat Butter',
                ],
                'description' => "The apple's sweetness has been enhanced by smothering it with butter and baking it."
            ],
            [
                'name' => 'Tough Meat-Stuffed Pumpkin',
                'ingredients' => [
                    'Fortified Pumpkin',
                    'Any Meat',
                ],
                'description' => "This hollow, meat-filled fortified pumpkin is a local specialty of Kakariko Village."
            ],
            [
                'name' => 'Meat and Mushroom Skewer',
                'ingredients' => [
                    'Any Meat',
                    'Any Mushroom',
                ],
                'description' => 'A filling dish made by grilling various mountain ingredients with either steak or bird meat.'
            ],
            [
                'name' => 'Meat and Rice Bowl',
                'ingredients' => [
                    'Hylian Rice',
                    'Raw Meat',
                    'Rock Salt',
                ],
                'description' => 'This dish of rice and lightly seared meat is a mainstay all throughout Hyrule.'
            ],
            [
                'name' => 'Meat and Seafood Fry',
                'ingredients' => [
                    'Any Meat',
                    'Any Seafood',
                ],
                'description' => 'A filling dish made by cooking fresh seafood and meat together.'
            ],
            [
                'name' => 'Meat Curry',
                'ingredients' => [
                    'Raw Meat',
                    'Hylian Rice',
                    'Goron Spice',
                ],
                'description' => "The heat from the spice allows you to enjoy the large portion of the meat's savoriness."
            ],
            [
                'name' => 'Meat Pie',
                'ingredients' => [
                    'Tabantha Wheat',
                    'Goat Butter',
                    'Any Meat',
                    'Rock Salt',
                ],
                'description' => "You'll need an extra napkin to deal with this juicy pie of perfectly baked minced meat."
            ],
            [
                'name' => 'Meat Skewer',
                'ingredients' => [
                    'Any Meat',
                ],
                'description' => 'A juicy, filling snack made by grilling small chunks of meat on a skewer.'
            ],
            [
                'name' => 'Copious Meat Skewers',
                'ingredients' => [
                    'Four different Meats',
                ],
                'description' => "Just shove a bunch of meat on to a skewer and you're good to go."
            ],
            [
                'name' => 'Meat Stew',
                'ingredients' => [
                    'Raw Meat or Raw Bird Drumstick',
                    'Tabantha Wheat',
                    'Goat Butter',
                    'Fresh Milk',
                ],
                'description' => 'The hearty meat in this mainstay dish leaves bellies satisfied all throughout Hyrule.'
            ],
            [
                'name' => 'Meaty Rice Balls',
                'ingredients' => [
                    'Any Meat',
                    'Hylian Rice',
                ],
                'description' => 'The sweet and spicy meat stuffed into these rice balls will keep you full for some time.'
            ],
            [
                'name' => 'Monster Cake',
                'ingredients' => [
                    'Tabantha Wheat',
                    'Cane Sugar',
                    'Goat Butter',
                    'Monster Extract',
                ],
                'description' => "It's said that once you have a taste of this cake, you'll never forget its sweetness."
            ],
            [
                'name' => 'Monster Curry',
                'ingredients' => [
                    'Hylian Rice',
                    'Goron Spice',
                    'Monster Extract',
                ],
                'description' => "This unusual take on curry uses monster extract and doesn't rely on spices."
            ],
            [
                'name' => 'Monster Rice Balls',
                'ingredients' => [
                    'Hylian Rice',
                    'Rock Salt',
                    'Monster Extract',
                ],
                'description' => 'Rice balls flavored with monster extract. Their unique aroma is not for everyone.'
            ],
            [
                'name' => 'Monster Soup',
                'ingredients' => [
                    'Fresh Milk',
                    'Tabantha Wheat',
                    'Goat Butter',
                    'Monster Extract',
                ],
                'description' => "Using monster extract as a base, this soup's distinct gaminess is either loved or hated."
            ],
            [
                'name' => 'Monster Stew',
                'ingredients' => [
                    'Any Meat',
                    'Any Seafood',
                    'Monster Extract',
                ],
                'description' => 'Meat and seafood simmered in monster extract. A savory dish despite its ingredients.'
            ],
            [
                'name' => 'Mushroom Omelet',
                'ingredients' => [
                    'Any Mushroom',
                    'Bird Egg',
                    'Goat Butter',
                    'Rock Salt',
                ],
                'description' => 'The fluffy texture of this omelet is one of the great joys of this dish, as well as life.'
            ],
            [
                'name' => 'Mushroom Rice Balls',
                'ingredients' => [
                    'Hylian Rice',
                    'Any Mushroom',
                ],
                'description' => 'The aroma of the mushrooms tickles your nose as you peel back the leafy wrapping.'
            ],
            [
                'name' => 'Mushroom Risotto',
                'ingredients' => [
                    'Hylian Rice',
                    'Goat Butter',
                    'Rock Salt',
                    'Any Mushroom',
                ],
                'description' => 'The tantalizing aroma of mushrooms and butter beckons you to the table.'
            ],
            [
                'name' => 'Mushroom Skewer',
                'ingredients' => [
                    'Any Mushroom',
                ],
                'description' => 'This simple mushroom-packed skewer has its colorful presentation to thank for its appeal.'
            ],
            [
                'name' => 'Copious Mushroom Skewers',
                'ingredients' => [
                    'Four Different Mushrooms',
                ],
                'description' => "Fans of fungal cuisine can't resist this simple mushroom-skewer dish. Very filling."
            ],
            [
                'name' => 'Nutcake',
                'ingredients' => [
                    'Any Nut',
                    'Tabantha Wheat',
                    'Cane Sugar',
                    'Goat Butter',
                ],
                'description' => 'Forest nuts give this cake a pleasant texture and a simple, understated sweetness.'
            ],
            [
                'name' => 'Omelet',
                'ingredients' => [
                    'Bird Egg',
                ],
                'description' => "This simple dish is common all over Hyrule. Simply fry egg until it's nice and plump."
            ],
            [
                'name' => 'Peppered Seafood',
                'ingredients' => [
                    'Spicy Pepper',
                    'Any Seafood',
                ],
                'description' => "The pepper seeds grilled with this seafood draw out its taste and pleasant aroma."
            ],
            [
                'name' => 'Peppered Steak',
                'ingredients' => [
                    'Spicy Pepper',
                    'Any Meat',
                ],
                'description' => 'A dish made by cooking meat in crushed peppers, suppressing the gamy taste while accentuating its flavor.'
            ],
            [
                'name' => 'Plain Crepe',
                'ingredients' => [
                    'Fresh Milk',
                    'Cane Sugar',
                    'Tabantha Wheat',
                    'Bird Egg',
                    'Goat Butter',
                ],
                'description' => 'The simplicity of this dish lets the flavor of its ingredients shine.'
            ],
            [
                'name' => 'Porgy Meunière',
                'ingredients' => [
                    'Any Porgy',
                    'Goat Butter',
                    'Tabantha Wheat',
                ],
                'description' => 'Popular among residents of coastal regions, this juicy porgy is a delish dish.'
            ],
            [
                'name' => 'Poultry Curry',
                'ingredients' => [
                    'Raw Bird Drumstick',
                    'Hylian Rice',
                    'Goron Spice',
                ],
                'description' => 'The savory meat pairs well with the aroma of spice in this common curry.'
            ],
            [
                'name' => 'Poultry Pilaf',
                'ingredients' => [
                    'Raw Bird Drumstick',
                    'Hylian Rice',
                    'Goat Butter',
                    'Bird Egg',
                ],
                'description' => 'Sautéed Hylian rice steamed in poultry broth. Cook on low heat until the rice is fluffy.'
            ],
            [
                'name' => 'Prime Meat and Rice Bowl',
                'ingredients' => [
                    'Raw Prime Meat',
                    'Hylian Rice',
                    'Rock Salt',
                ],
                'description' => 'This bowl is loaded with high-quality meat. Your hunt for a serious meal ends here.'
            ],
            [
                'name' => 'Prime Meat and Seafood Fry',
                'ingredients' => [
                    'Any Prime Meat',
                    'Any Seafood',
                ],
                'description' => 'This comfort dish is made with choice cuts of meat and seafood.'
            ],
            [
                'name' => 'Prime Meat Curry',
                'ingredients' => [
                    'Raw Prime Meat',
                    'Hylian Rice',
                    'Goron Spice',
                ],
                'description' => 'The high-quality meat in this curry has given it a deeper taste than most other curries.'
            ],
            [
                'name' => 'Prime Meat Stew',
                'ingredients' => [
                    'Any Prime Meat',
                    'Tabantha Wheat',
                    'Goat Butter',
                    'Fresh Milk',
                ],
                'description' => 'Letting the large portions of choice cuts of meat simmer brought out their savoriness.'
            ],
            [
                'name' => 'Prime Poultry Curry',
                'ingredients' => [
                    'Raw Bird Thigh',
                    'Goron Spice',
                    'Hylian Rice',
                ],
                'description' => "The secret to this curry's flavor is taking it off the heat while you add the spices."
            ],
            [
                'name' => 'Prime Poultry Pilaf',
                'ingredients' => [
                    'Raw Bird Thigh',
                    'Hylian Rice',
                    'Bird Egg',
                    'Goat Butter',
                ],
                'description' => "The rice permeates the savory taste of the poultry in this Gerudo-region favorite."
            ],
            [
                'name' => 'Prime Spiced Meat Skewer',
                'ingredients' => [
                    'Raw Prime Meat',
                    'Goron Spice',
                ],
                'description' => 'The simple preparation of this steak dish belies its complex taste profile.'
            ],
            [
                'name' => 'Pumpkin Pie',
                'ingredients' => [
                    'Fortified Pumpkin',
                    'Tabantha Wheat',
                    'Goat Butter',
                    'Fresh Milk',
                ],
                'description' => 'Simply simmer a fortified pumpkin to make this dish. A favorite in Kakariko Village.'
            ],
            [
                'name' => 'Rock-Hard Food',
                'ingredients' => [
                    'Wood or Gemstones',
                ],
                'description' => "A dish gone awry after adding the wrong ingredient.
                Chewing your way through this won't be fun, but it will fill you up when you're between a rock and a hard place."
            ],
            [
                'name' => 'Salmon Meunière',
                'ingredients' => [
                    'Tabantha Wheat',
                    'Goat Butter',
                    'Hearty Salmon',
                ],
                'description' => 'The crispy skin of this fried hearty salmon puts its texture in a class all its own.'
            ],
            [
                'name' => 'Salmon Risotto',
                'ingredients' => [
                    'Hearty Salmon',
                    'Hylian Rice',
                    'Goat Butter',
                    'Rock Salt',
                ],
                'description' => 'The rice used in this rich risotto permeates the light flavor of the salmon.'
            ],
            [
                'name' => 'Salt-Grilled Crab',
                'ingredients' => [
                    'Rock Salt',
                    'Any Crab',
                ],
                'description' => 'Nine out of ten fishermen agree: crab is best enjoyed grilled and with just a bit of salt.'
            ],
            [
                'name' => 'Salt-Grilled Fish',
                'ingredients' => [
                    'Rock Salt',
                    'Any Fish or Snail',
                ],
                'description' => 'A simple dish made by rolling a whole fish in natural rock salt before grilling it.'
            ],
            [
                'name' => 'Salt-Grilled Gourmet Meat',
                'ingredients' => [
                    'Rock Salt',
                    'Any Gourmet Meat',
                ],
                'description' => 'This lavish grilled dish makes liberal use of high-quality cuts of meat.'
            ],
            [
                'name' => 'Salt-Grilled Greens',
                'ingredients' => [
                    'Rock Salt',
                    'Any Herb, Flower, or Vegetable',
                ],
                'description' => 'A health-boosting dish made with leafy greens and a touch of salt.'
            ],
            [
                'name' => 'Salt-Grilled Meat',
                'ingredients' => [
                    'Rock Salt',
                    'Raw Meat or Raw Bird Drumstick',
                ],
                'description' => 'Short on ingredients? Just rub some meat in salt and cook it for a simple, tasty dish.'
            ],
            [
                'name' => 'Salt-Grilled Mushrooms',
                'ingredients' => [
                    'Any Mushroom',
                    'Rock Salt',
                ],
                'description' => "A basic mushroom dish made by lightly salting mushrooms and grilling them."
            ],
            [
                'name' => 'Salt-Grilled Prime Meat',
                'ingredients' => [
                    'Any Prime Meat',
                    'Rock Salt',
                ],
                'description' => 'A simple yet exquisite dish made by grilling high-quality meat on top of rock salt.'
            ],
            [
                'name' => 'Sauteed Nuts',
                'ingredients' => [
                    'Any Nut',
                ],
                'description' => 'These sautéed tree seeds are the perfect snack for the busy adventurer on the go!'
            ],
            [
                'name' => 'Seafood Curry',
                'ingredients' => [
                    'Goron Spice',
                    'Hylian Rice',
                    'Hearty Blueshell Snail or Any Porgy',
                ],
                'description' => "This dish brims with treasures from the sea. Its spice packs a kick, so it's not for kids."
            ],
            [
                'name' => 'Seafood Fried Rice',
                'ingredients' => [
                    'Hylian Rice',
                    'Rock Salt',
                    'Hearty Blueshell Snail or Any Porgy',
                ],
                'description' => 'Various seafood has been sautéed with rice. The stronger the flame, the tastier the dish!'
            ],
            [
                'name' => 'Seafood Meunière',
                'ingredients' => [
                    'Any Seafood',
                    'Tabantha Wheat',
                    'Goat Butter',
                ],
                'description' => 'Rich butter flanks fresh seafood. The secret ingredient is lots and lots of love.'
            ],
            [
                'name' => 'Seafood Paella',
                'ingredients' => [
                    'Hearty Blueshell Snail',
                    'Any Porgy',
                    'Hylian Rice',
                    'Goat Butter',
                    'Rock Salt',
                ],
                'description' => "No fisherman's birthday bash would be complete without this top-shelf seafood dish."
            ],
            [
                'name' => 'Seafood Rice Balls',
                'ingredients' => [
                    'Hylian Rice',
                    'Any Seafood',
                ],
                'description' => 'Stuffed with aromatic seafood, the flavor can vary by ingredients but never disappoints.'
            ],
            [
                'name' => 'Seafood Skewer',
                'ingredients' => [
                    'Any Crab or Snail',
                ],
                'description' => 'The natural water in this medley of seafaring creatures makes for a delicious broth.'
            ],
            [
                'name' => 'Copious Seafood Skewers',
                'ingredients' => [
                    'Four Different Seafoods',
                ],
                'description' => "It's just a whole heap of stuff shoved on to a skewer, but it's still a pretty tasty dish."
            ],
            [
                'name' => 'Simmered Fruit',
                'ingredients' => [
                    'Any Fruit',
                ],
                'description' => 'This sweet dish is made by heaping tasty fruits into a pan and simmering until tender.'
            ],
            [
                'name' => 'Copious Simmered Fruit',
                'ingredients' => [
                    'Four Different Fruits',
                ],
                'description' => "The flavors of the various fruits in this simmered dish exist in perfect harmony."
            ],
            [
                'name' => 'Sautéed Peppers',
                'ingredients' => [
                    'Spicy Pepper',
                ],
                'description' => 'The spiciness of these sautéed peppers has been broken by the heat for a sweeter taste.'
            ],
            [
                'name' => 'Steamed Fish',
                'ingredients' => [
                    'Any Herb, Flower, or Vegetable',
                    'Any Seafood',
                ],
                'description' => 'A refined dish made by wrapping a fresh fish in fragrant wild greens and cooking it.'
            ],
            [
                'name' => 'Steamed Fruit',
                'ingredients' => [
                    'Any Fruit',
                    'Any Herb, Flower, or Vegetable',
                ],
                'description' => 'A regional dish made by steaming near-ripened fruits in the leaves of fragrant plants.'
            ],
            [
                'name' => 'Steamed Meat',
                'ingredients' => [
                    'Any Meat',
                    'Any Herb, Flower, or Vegetable',
                ],
                'description' => 'This meat dish has been wrapped in fragrant leaves and steamed to preserve its moisture.'
            ],
            [
                'name' => 'Steamed Mushrooms',
                'ingredients' => [
                    'Any Mushroom',
                    'Any Herb, Flower, or Vegetable',
                ],
                'description' => 'A healthy vegetable dish achieved by steaming mushrooms in plant leaves.'
            ],
            [
                'name' => 'Vegetable Curry',
                'ingredients' => [
                    'Any Carrot or Pumpkin',
                    'Hylian Rice',
                    'Goron Spice',
                ],
                'description' => 'This healthy curry is popular for its mild flavor and moderate spiciness.'
            ],
            [
                'name' => 'Vegetable Omelet',
                'ingredients' => [
                    'Any Herb, Flower, or Vegetable',
                    'Bird Egg',
                    'Goat Butter',
                    'Rock Salt',
                ],
                'description' => 'This home-style dish mixes fluffy eggs with chopped vegetables for nutritional balance.'
            ],
            [
                'name' => 'Vegetable Risotto',
                'ingredients' => [
                    'Any Carrot or Pumpkin',
                    'Hylian Rice',
                    'Goat Butter',
                    'Rock Salt',
                ],
                'description' => 'The sweetness of the ingredients gives this risotto a mild flavor.'
            ],
            [
                'name' => 'Veggie Cream Soup',
                'ingredients' => [
                    'Any Carrot or Pumpkin',
                    'Fresh Milk',
                    'Rock Salt',
                ],
                'description' => 'This creamy soup showcases the sweetness of vegetables in a veritable taste explosion.'
            ],
            [
                'name' => 'Veggie Rice Balls',
                'ingredients' => [
                    'Any Herb, Flower, or Vegetable',
                    'Hylian Rice',
                ],
                'description' => 'This home-style dish of Kakariko Village is stuffed with the bounty of the mountains.'
            ],
            [
                'name' => 'Warm Milk',
                'ingredients' => [
                    'Fresh Milk',
                ],
                'description' => "Make this by heating up some milk. Drink it before bed to ensure a good night's sleep."
            ],
            [
                'name' => 'Wheat Bread',
                'ingredients' => [
                    'Tabantha Wheat',
                    'Rock Salt',
                ],
                'description' => 'Made with wheat from the Tabantha region, this soft, springy bread smells just heavenly.'
            ],
            [
                'name' => 'Wildberry Crepe',
                'ingredients' => [
                    'Wildberry',
                    'Fresh Milk',
                    'Cane Sugar',
                    'Tabantha Wheat',
                    'Bird Egg',
                ],
                'description' => 'Sweet, tart wildberries are folded into thin, springy dough to make this dessert.'
            ],
            [
                'name' => 'Chilly Elixir',
                'ingredients' => [
                    'Chilly Critter',
                    'Any Monster Part',
                ],
                'description' => "Grants a X-level cooling effect, raising your body's resistance to heat.
                Crucial for long journeys through the desert.",
                'effect' => 'Heat Resistance',
            ],
            [
                'name' => 'Electro Elixir',
                'ingredients' => [
                    'Electro Critter',
                    'Any Monster Part',
                ],
                'description' => 'Grants a X-level resistance to electricity.
                Useful against enemies with electrical attacks.',
                'effect' => 'Shock Resistance',
            ],
            [
                'name' => 'Enduring Elixir',
                'ingredients' => [
                    'Enduring Critter',
                    'Any Monster Part',
                ],
                'description' => "Restores stamina and temporarily extends your Stamina Wheel.
                The additional stamina will disappear as it's used.",
                'effect' => 'Extra Stamina',
            ],
            [
                'name' => 'Energizing Elixir',
                'ingredients' => [
                    'Energizing Critter',
                    'Any Monster Part',
                ],
                'description' => 'Restores your Stamina,
                which is used when performing physical actions such as climbing walls and swimming.',
                'effect' => 'Restores Stamina',
            ],
            [
                'name' => 'Fairy Tonic',
                'ingredients' => [
                    'Fairy',
                ],
                'description' => 'This powerful recovery elixir harnesses the power of fairies.
                It has a sweet fragrance.',
                'effect' => 'Restores Hearts',
            ],
            [
                'name' => 'Fireproof Elixir',
                'ingredients' => [
                    'Fireproof Critter',
                    'Any Monster Part',
                ],
                'description' => 'Grants a fireproof effect, which prevents your body from catching fire.
                Be sure to pack this when venturing out to explore Death Mountain.',
                'effect' => 'Flame Guard',
            ],
            [
                'name' => 'Hasty Elixir',
                'ingredients' => [
                    'Hasty Critter',
                    'Any Monster Part',
                ],
                'description' => 'Grants a X-level haste effect,
                which boosts your movement speed while running, swimming, or climbing.',
                'effect' => 'Speed Up',
            ],
            [
                'name' => 'Hearty Elixir',
                'ingredients' => [
                    'Hearty Animal',
                    'Any Monster Part',
                ],
                'description' => 'Restores you to full health and increases your maximum hearts.
                The additional hearts are lost as you take damage.',
                'effect' => 'Extra Hearts',
            ],
            [
                'name' => 'Mighty Elixir',
                'ingredients' => [
                    'Mighty Animal',
                    'Any Monster Part',
                ],
                'description' => 'Grants a X-level might effect,
                which strengthens your body and mind to boost your attack power with all weapons.',
                'effect' => 'Attack Up',
            ],
            [
                'name' => 'Sneaky Elixir',
                'ingredients' => [
                    'Sneaky Critter',
                    'Any Monster Part',
                ],
                'description' => "Grants a X-level stealth effect, which calms the nerves and silences footfalls.
                Allows you to move about undetected by monsters and animals.",
                'effect' => 'Stealth Up',
            ],
            [
                'name' => 'Spicy Elixir',
                'ingredients' => [
                    'Spicy Critter',
                    'Any Monster Part',
                ],
                'description' => 'Warms your body from its core, increasing your resistance to cold environments.
                Very useful in the snow-covered mountains.',
                'effect' => 'Cold Resistance',
            ],
            [
                'name' => 'Tough Elixir',
                'ingredients' => [
                    'Tough Critter',
                    'Any Monster Part',
                ],
                'description' => 'Grants a X-level toughness effect, which fortifies your bones to strengthen your defense.
                Best to use before facing off against hard-hitting enemies.',
                'effect' => 'Defense Up',
            ],
            [
                'name' => 'Steamed Tomatoes',
                'ingredients' => [
                    'Any Herb, Flower, or Vegetable',
                    'Hylian Tomato',
                ],
                'description' => 'Tomato cooked while wrapped in a leaf.
                The heat brings out its medicinal effect.',
            ],
            [
                'name' => 'Cooked Stambulb',
                'ingredients' => [
                    'Stambulb',
                ],
                'description' => 'A wild dish of a whole stambulb roasted with its skin on.
                Sweet and tasty.'
            ],
            [
                'name' => 'Buttered Stambulb',
                'ingredients' => [
                    'Stambulb',
                    'Goat Butter',
                ],
                'description' => 'A simple dish of stambulb sauteed with goat butter.
                Sweet with a hint of spice.'
            ],
            [
                'name' => 'Fragrant Seafood Stew',
                'ingredients' => [
                    'Stambulb',
                    'Any Seafood',
                    'Oil Jar',
                ],
                'description' => 'A tasty dish of seafood and stambulb cooked in oil.
                Its aroma will whet your appetite.'
            ],
            [
                'name' => 'Deep-Fried Drumstick',
                'ingredients' => [
                    'Oil Jar',
                    'Raw Bird Drumstick',
                ],
                'description' => "A drumstick fried in high-quality oil.
                It's full of out-of-this-world flavor."
            ],
            [
                'name' => 'Deep-Fried Thigh',
                'ingredients' => [
                    'Oil Jar',
                    'Raw Bird Thigh',
                ],
                'description' => "A deep-fried thigh so good,
                it's hard to take bites that aren't too big!",
            ],
            [
                'name' => 'Deep-Fried Bird Roast',
                'ingredients' => [
                    'Oil Jar',
                    'Raw Whole Bird',
                ],
                'description' => "A deep-fried whole bird of the highest grade.
                It's a standard item in any celebratory feast."
            ],
            [
                'name' => 'Simmered Tomato',
                'ingredients' => [
                    'Hylian Tomato',
                ],
                'description' => 'Health recovery and other effects vary based on ingredients.
                Base offers at least two hearts recovered.'
            ],
            [
                'name' => 'Fruity Tomato Stew',
                'ingredients' => [
                    'Hylian Tomato',
                    'Fresh Milk',
                    'Rock Salt',
                ],
                'description' => 'A colorful dish, a bounty of fruit simmered with fresh tomatoes.'
            ],
            [
                'name' => 'Tomato Mushroom Stew',
                'ingredients' => [
                    'Any Mushroom',
                    'Hylian Tomato',
                ],
                'description' => "A dish of fragrant mushrooms simmered with tomato. Healthy and rich in fiber."
            ],
            [
                'name' => 'Steamed Tomatoes',
                'ingredients' => [
                    'Any Herb, Flower, or Vegetable',
                    'Hylian Tomato',
                ],
                'description' => 'Tomato cooked while wrapped in a leaf.
                The heat brings out its medicinal effect.',
            ],
            [
                'name' => 'Tomato Seafood Soup',
                'ingredients' => [
                    'Hylian Tomato',
                    'Any Seafood',
                ],
                'description' => 'Seafood simmered with tomato. Full of intense flavor.'
            ],
            [
                'name' => 'Snail Chowder',
                'ingredients' => [
                    'Sneaky River Snail',
                    'Goat Butter',
                    'Fresh Milk',
                    'Tabantha Wheat',
                ],
                'description' => 'The pleasant texture and flavor of snails combine with butter and milk in a rich soup.'
            ],
            [
                'name' => 'Cheesy Curry',
                'ingredients' => [
                    'Hateno Cheese',
                    'Hylian Rice',
                    'Goron Spice',
                ],
                'description' => 'Curry with plenty of Hateno cheese, which balances the spiciness and urges seconds.'
            ],
            [
                'name' => 'Cheesy Risotto',
                'ingredients' => [
                    'Any Fish',
                    'Hylian Rice',
                    'Goat Butter',
                    'Rock Salt',
                    'Hateno Cheese',
                ],
                'description' => 'Rich risotto made with fish or mushroom mixed with Hylian rice and Hateno cheese.'
            ],
            [
                'name' => 'Crunchy Fried Rice',
                'ingredients' => [
                    'Any Meat',
                    'Hylian Rice',
                    'Oil Jar',
                    'Bird Egg',
                ],
                'description' => 'Hylian rice fried up with meat in high-quality oil.
                Each bite is packed with toasty flavor',
            ],
        ];

        // attach ingredients to recipes
        foreach ($recipes as $recipe) {
            if (isset($recipe['effect'])) {
                $effect = $recipe['effect'];
            } else {
                $effect = null;
            }
            
            $recipeModel = \App\Models\Recipe::create([
                'name' => $recipe['name'],
                'description' => $recipe['description'],
                'effect' => $effect,
                'category_id' => 32,
            ]);

            if (isset($recipe['category'])) {
                $categoryName = $recipe['category'];
            } else {
                $categoryName = 'Food';
            }
            $category = Category::firstOrCreate([
                'name' => $categoryName,
            ]);
            $recipeModel->category()->associate($category);
            $recipeModel->save();

            foreach ($recipe['ingredients'] as $ingredient) {
                $ingredient = Ingredient::firstOrCreate([
                    'name' => $ingredient,
                ]);
                $recipeModel->ingredients()->attach($ingredient->id);
            }
        }
    }
}
