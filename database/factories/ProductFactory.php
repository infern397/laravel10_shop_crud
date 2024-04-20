<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ucfirst(fake()->unique()->word),
            'description' => fake()->paragraph,
            'price' => fake()->numberBetween(1, 1000),
            'stock' => fake()->numberBetween(1, 100),
            'image_url' => null,
        ];
    }
}
