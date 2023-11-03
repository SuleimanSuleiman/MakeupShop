<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'desc' => fake()->text(200),
        ];
    }

    // public function configure(): static
    // {
    //     return $this->afterCreating(function (Category $category) {
    //         $category::create([
    //             'title' => 'فئة مخصصة',
    //             'desc' => 'وصف للفئة المخصصة',
    //         ]);
    //     });
    // }
}