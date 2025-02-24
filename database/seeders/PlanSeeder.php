<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

         Plan::create([
            'type' => 'الخطة الاقتصادية',
            'price' => 260.00,
            'description' => 'خطة اقتصادية لتلبية احتياجاتك بميزانية محدودة.',
            'features' => [
                "بطاقات سفر في الدرجة الاقتصادية",
                "حجز بفندق ثلاث نجوم",
                "وجبات إفطار يومية"
            ]
        ]);



        Plan::create([
            'type' => 'خطة عائلية',
            'price' => 520.00,
            'description' => 'خطة رائعة لقضاء عطلة مع العائلة.',
            'features' => [
                "بطاقات سفر في الدرجة أولى",
                "حجز بفندق أربع نجوم",
                "رحلات ميدانية بشكل يومي",
            ]
        ]);


        Plan::create([
            'type' => 'خطة رجال الأعمال',
            'price' => 850.00,
            'description' => 'خطة مخصصة لرجال الأعمال.',
            'features' => [
                "حجز بفندق خمس نجوم",
                "متابعة خاصة لإحتياجاتك",
                "وجبات إفطار يومية"
            ]
        ]);
    }

}
