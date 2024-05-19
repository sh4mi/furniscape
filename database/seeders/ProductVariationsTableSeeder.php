<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductVariationsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('product_variations')->insert([
                'product_id' => rand(1, 10), // Assuming there are 10 products
                'color' => $faker->colorName(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
