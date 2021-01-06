<?php

use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('pizzas')->insert([
            'name' => 'Bacon Pizza',
            'price' => 2500023,
            'desc' => 'Sebuah pizza dengan bacon',
            'image' => 'bacon_and_egg_breakfast_pizza.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Beef Pizza',
            'price' => 2500023,
            'desc' => 'Sebuah pizza dengan beef',
            'image' => 'beef_pepper_and_onion_pizza.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Bufallo Pizza',
            'price' => 2500023,
            'desc' => 'Sebuah pizza dengan bufallo',
            'image' => 'buffalo_chicken_pizza.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Cheese Pizza',
            'price' => 2500023,
            'desc' => 'Sebuah pizza dengan cheese',
            'image' => 'cheese_pizza.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Garlic Pizza',
            'price' => 2500023,
            'desc' => 'Sebuah pizza dengan garlic',
            'image' => 'garlic_chicken_pizza.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Hawaii Pizza',
            'price' => 2500023,
            'desc' => 'Sebuah pizza dengan hawaii',
            'image' => 'hawaii_pizza.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Lamb Pizza',
            'price' => 2500023,
            'desc' => 'Sebuah pizza dengan lamb',
            'image' => 'middle_eastern_spiced_lamb_pizza.jpeg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Bufallo Pizza',
            'price' => 2500023,
            'desc' => 'Sebuah pizza dengan bufallo',
            'image' => 'buffalo_chicken_pizza.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Mushroom Pizza',
            'price' => 2500023,
            'desc' => 'Sebuah pizza dengan mushroom',
            'image' => 'mushroom_pizza.jpeg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Pepperoni Pizza',
            'price' => 2500023,
            'desc' => 'Sebuah pizza dengan pepperoni',
            'image' => 'pepperoni_pizza.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Rosina Pizza',
            'price' => 2500023,
            'desc' => 'Sebuah pizza dengan rosina',
            'image' => 'rosina_italian_meatball_pizza.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Supreme Pizza',
            'price' => 2500023,
            'desc' => 'Sebuah pizza dengan supreme',
            'image' => 'supreme_pizza.jpg',
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Tuna Pizza',
            'price' => 2500023,
            'desc' => 'Sebuah pizza dengan tuna',
            'image' => 'tuna_onion_pizza.jpg',
        ]);        
    }
}
