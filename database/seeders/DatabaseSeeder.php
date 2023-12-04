<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Chirp;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->times(10)->create();

        Chirp::factory()->times(10)->create();

        // for ($i = 0; $i < 20; $i++) {
        //     \App\Models\Chirp::factory()->count(10)->create([
        //         'user_id' => 1,
        //         'title' => 'My Title',
        //         'message' => 'My Message',
        //     ]);
        // }
    }
}
