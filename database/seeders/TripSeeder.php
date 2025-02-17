<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
            'name' => 'Trip to Tokyo',
            'coast' => 2500.00,
            'image' => 'tokyo-trip.jpg',
            'number_of_days' => 6,
        ]);
    }

}
