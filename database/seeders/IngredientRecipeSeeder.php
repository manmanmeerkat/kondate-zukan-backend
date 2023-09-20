<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 200; $i++) {
            DB::table('ingredient_recipe')->insert([
                'ingredient_id' => rand(1, 100), // Replace with actual ingredient IDs.
                'recipe_id' => rand(1, 100), // Replace with actual recipe IDs.
                'quantity' => rand(1, 10) + (rand(0, 99) / 100), // Random quantity with 2 decimal places.
            ]);
        }
    }
}
