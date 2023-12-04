<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chirp>
 */
class ChirpFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(0, User::count()),
            'title' => fake()->words(3, true),
            'message' => fake()->words(5, true),
        ];
    }
    // How do I run this script?
    // php artisan tinker
    // \App\Models\Chirp::factory()->count(10)->create();

}
