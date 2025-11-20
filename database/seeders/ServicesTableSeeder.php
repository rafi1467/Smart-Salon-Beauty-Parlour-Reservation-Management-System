<?php
namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'name' => 'Classic Haircut',
                'description' => 'Professional haircut with styling',
                'price' => 35.00,
                'duration' => 45,
                'category' => 'hair'
            ],
            [
                'name' => 'Beard Trim',
                'description' => 'Precise beard shaping and trimming',
                'price' => 20.00,
                'duration' => 30,
                'category' => 'grooming'
            ],
            [
                'name' => 'Hair Coloring',
                'description' => 'Full hair color service with conditioning',
                'price' => 80.00,
                'duration' => 120,
                'category' => 'hair'
            ],
            [
                'name' => 'Facial Treatment',
                'description' => 'Relaxing facial with deep cleansing',
                'price' => 60.00,
                'duration' => 60,
                'category' => 'skincare'
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}