<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_firstname' => fake()->firstName,
            'customer_lastname' => fake()->lastName,
            'customer_email' => fake()->email,
            'customer_address' => fake()->address,
        ];
    }
}
