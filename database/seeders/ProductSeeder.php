<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['category_id' => 1, 'title' => 'Asus TUF Gaming F15', 'description' => 'Laptop مناسب برنامه نویسی و گیمینگ', 'image' => 'asus-tuf.jpg'],
            ['category_id' => 1, 'title' => 'HP Victus', 'description' => 'Laptop مناسب دانشجویان', 'image' => 'hp-victus.jpg'],
            ['category_id' => 2, 'title' => 'iPhone 15', 'description' => 'جدیدترین گوشی اپل', 'image' => 'iphone15.jpg'],
            ['category_id' => 2, 'title' => 'Samsung S24', 'description' => 'پرچمدار سامسونگ', 'image' => 's24.jpg'],
            ['category_id' => 3, 'title' => 'Sony WH-1000XM5', 'description' => 'هدفون نویز کنسلینگ', 'image' => 'sony.jpg'],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['title' => $product['title']],
                [
                    'category_id' => $product['category_id'],
                    'description' => $product['description'],
                    'image' => $product['image'],
                ]
            );
        }
    }
}
