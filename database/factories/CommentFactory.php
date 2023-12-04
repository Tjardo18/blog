<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Chirp;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chirp>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'chirp_id' => fake()->numberBetween(0, Chirp::count()),
            'user_id' => fake()->numberBetween(0, User::count()),
            'content' => fake()->words(3, true),
        ];
    }
    // How do I run this script?
    // php artisan tinker
    // \App\Models\Comment::factory()->count(10)->create();

}
