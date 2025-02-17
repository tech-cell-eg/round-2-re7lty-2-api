<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OurService;

class OurServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OurService::create([
            'service_name' => 'رحلات ميدانية',
            'image' => 'field_trip.jpg',
            'description' => 'استمتع بأجمل الرحلات الميدانية لاستكشاف الأماكن السياحية.'
        ]);

        OurService::create([
            'service_name' => 'حجوزات فندقية',
            'image' => 'hotel_booking.jpg',
            'description' => 'نوفر لك أفضل خيارات الإقامة في أفخم الفنادق.'
        ]);

        OurService::create([
            'service_name' => 'دليل سياحي',
            'image' => 'tour_guide.jpg',
            'description' => 'نقدم لك خدمات الإرشاد السياحي لبناء خطط سفر مميزة.'
        ]);
    }
}

