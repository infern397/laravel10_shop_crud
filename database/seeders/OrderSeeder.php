<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory(5)
            ->create()
            ->each(function ($order) {
                $products = Product::inRandomOrder()->limit(5)->get();
                foreach ($products as $product) {
                    $order->products()->attach(
                        $product,
                        ['quantity' => fake()->numberBetween(1, 5)]
                    );
                }
            });
    }
}
