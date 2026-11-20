<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Our Location',
                'slug' => 'our-location',
                'description' => 'Destination-based taxi service posts and location landing pages.',
                'status' => 'active',
            ],
            [
                'name' => 'Book Taxi',
                'slug' => 'book-taxi',
                'description' => 'Route-based booking taxi posts and city transfer guides.',
                'status' => 'active',
            ],
            [
                'name' => 'Services',
                'slug' => 'services',
                'description' => 'Specialized taxi, rental, and travel offerings.',
                'status' => 'active',
            ],
        ];

        foreach ($categories as $cat) {
            Category::firstOrCreate(
                ['slug' => $cat['slug']],
                [
                    'name' => $cat['name'],
                    'description' => $cat['description'],
                    'status' => $cat['status'],
                ]
            );
        }
    }
}
