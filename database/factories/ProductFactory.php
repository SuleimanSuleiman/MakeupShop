<?php

namespace Database\Factories;

use App\Models\Category;
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
            'name' => fake()->name(),
            'Quantity' => fake()->randomNumber(),
            'price' => fake()->randomFloat(10),
            'Description' => fake()->text(200),
            'Image' => fake()->imageUrl(),
            'category_id' => Category::factory()
        ];
    }
}