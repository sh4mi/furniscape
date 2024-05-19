<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('orders')->insert([
                'user_id' => rand(1, 2), // Assuming there are 10 users
                'number' => $faker->unique()->randomNumber(),
                'status' => $faker->randomElement(['pending', 'confirmed', 'delivered', 'dispatched', 'cancelled']),
                'payment_method' => $faker->randomElement(['cod', 'card']),
                'payment_status' => $faker->boolean,
                'shipping_address' => $faker->address,
                'billing_address' => $faker->address,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
