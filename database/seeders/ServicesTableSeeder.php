<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'name' => 'Classic Haircut',
                'description' => 'Professional haircut with styling and finishing',
                'price' => 35.00,
                'duration' => 45,
                'category' => 'hair'
            ],
            [
                'name' => 'Beard Trim & Shape',
                'description' => 'Precise beard shaping and trimming with hot towel',
                'price' => 20.00,
                'duration' => 30,
                'category' => 'grooming'
            ],
            [
                'name' => 'Hair Coloring',
                'description' => 'Full hair color service with conditioning treatment',
                'price' => 80.00,
                'duration' => 120,
                'category' => 'hair'
            ],
            [
                'name' => 'Facial Treatment',
                'description' => 'Relaxing facial with deep cleansing and moisturizing',
                'price' => 60.00,
                'duration' => 60,
                'category' => 'skincare'
            ],
            [
                'name' => 'Manicure',
                'description' => 'Classic manicure with shaping and polish',
                'price' => 25.00,
                'duration' => 45,
                'category' => 'nails'
            ],
            [
                'name' => 'Hair Styling',
                'description' => 'Professional blowout and styling for any occasion',
                'price' => 40.00,
                'duration' => 60,
                'category' => 'hair'
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}