<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'description' => $faker->paragraph,
                'category_id' => rand(1, 10), // Assuming there are 10 categories
                'quantity' => $faker->numberBetween(1, 100),
                'SKU' => $faker->unique()->ean13,
                'dimensions' => $faker->randomFloat(2, 0, 100) . 'x' . $faker->randomFloat(2, 0, 100) . 'x' . $faker->randomFloat(2, 0, 100),
                'material' => $faker->word,
                'weight' => $faker->numberBetween(1, 1000),
                'is_featured' => $faker->boolean,
                'is_available' => $faker->boolean,
                'price' => $faker->randomFloat(2, 10, 1000),
                'discount_price' => $faker->optional()->randomFloat(2, 5, 500),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
