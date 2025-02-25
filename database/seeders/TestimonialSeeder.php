<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { Testimonial::insert([
        [
            'name' => 'أسامة الأبيض',
            'content' => 'يمكنني القول إنني قمت بأفضل رحلة عائلية على الإطلاق، الفنادق رائعة وخطة السفر ممتازة.',
            'image' => 'storage/testimonials/user-avatar-03.jpg',
            'rating' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'ماهر عبد اللطيف',
            'content' => 'تقدم شركة رحلاتي خدمات ممتازة لرجال الأعمال، مما ساعدني كثيرًا في رحلتي.',
            'image' => 'storage/testimonials/user-avatar-02.jpg',
            'rating' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'محمد الأحمد',
            'content' => 'تجربة رائعة! قضيت أفضل إجازة منذ فترة طويلة، أنصح الجميع بشركة رحلاتي.',
            'image' => 'storage/testimonials/user-avatar-01.jpg',
            'rating' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]
    ]);


    }
}
