<?php

namespace Database\Seeders;

use App\Models\OurService;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Trip;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call(TripSeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(OurServiceSeeder::class);
    }
}
