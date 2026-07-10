<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'category_id' => 1,
            'title' => 'Asus TUF Gaming F15',
            'description' => 'Laptop مناسب برنامه نویسی و گیمینگ',
            'image' => 'asus-tuf.jpg',
        ]);

        Product::create([
            'category_id' => 1,
            'title' => 'HP Victus',
            'description' => 'Laptop مناسب دانشجویان',
            'image' => 'hp-victus.jpg',
        ]);

        Product::create([
            'category_id' => 2,
            'title' => 'iPhone 15',
            'description' => 'جدیدترین گوشی اپل',
            'image' => 'iphone15.jpg',
        ]);

        Product::create([
            'category_id' => 2,
            'title' => 'Samsung S24',
            'description' => 'پرچمدار سامسونگ',
            'image' => 's24.jpg',
        ]);

        Product::create([
            'category_id' => 3,
            'title' => 'Sony WH-1000XM5',
            'description' => 'هدفون نویز کنسلینگ',
            'image' => 'sony.jpg',
        ]);
    }
}
