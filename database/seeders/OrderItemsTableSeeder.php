<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderItemsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('order_items')->insert([
                'order_id' => rand(4, 13), // Assuming there are 10 orders
                'product_id' => rand(1, 10), // Assuming there are 10 products
                'quantity' => $faker->numberBetween(1, 5),
                'price' => $faker->numberBetween(10, 1000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
