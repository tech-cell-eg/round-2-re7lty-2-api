<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Trip;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $faker = Faker::create();

        // Insert several trips with fake data
        Trip::create([
            'name' => 'Trip to Bali',
            'coast' => 2000.00,
            'image' => 'bali-trip.jpg',
            'number_of_days' => 7,
        ]);

        Trip::create([
            'name' => 'Trip to Paris',
            'coast' => 3000.00,
            'image' => 'paris-trip.jpg',
            'number_of_days' => 5,
        ]);

        Trip::create([
            'name' => $faker->city, // Random city as trip name
            'coast' => $faker->randomFloat(2, 1000, 5000), // Random cost
            'image' => $faker->imageUrl(), // Random image URL
            'number_of_days' => $faker->numberBetween(5, 15), // Random number of days
        ]);
    }
}
