<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'slug' => fake()->slug(),
            'excerpt' => fake()->text(),
            'content' => fake()->paragraphs(3, true),
            'featured_image_path' => fake()->word(),
            'status' => fake()->regexify('[A-Za-z0-9]{20}'),
            'published_at' => fake()->dateTime(),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
