<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('trips')->insert([
            [
                'name' => 'الرياض',
                'coast' => 1500.00,
                'image' => 'storage/trips/Riyadh.png',
                'number_of_days' => 2,
            ],
            [
                'name' => 'القاهرة',
                'coast' => 1250.00,
                'image' => 'storage/trips/Cairo.png',
                'number_of_days' => 3,
            ],
            [
                'name' => 'دبي',
                'coast' => 2500.00,
                'image' => 'storage/trips/dubai-img.png',
                'number_of_days' => 3,
            ],
            [
                'name' => 'اسطنبول',
                'coast' => 1500.00,
                'image' => 'storage/trips/istanbul-img.png',
                'number_of_days' => 5,
            ],
        ]);
    }
}
