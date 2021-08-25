<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Tweet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->has(Tweet::factory()->count(3))
            ->create();

        User::factory()
            ->has(Tweet::factory()->count(2))
            ->create();

        User::factory()
            ->has(Tweet::factory()->count(4))
            ->create();

    }
}
