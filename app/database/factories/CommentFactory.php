<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'content' => fake()->paragraphs(3, true),
            'status' => fake()->regexify('[A-Za-z0-9]{20}'),
            'user_id' => User::factory(),
            'article_id' => Article::factory(),
            'parent_id' => Comment::factory(),
        ];
    }
}
