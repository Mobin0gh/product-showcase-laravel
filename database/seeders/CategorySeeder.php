<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Category::create([
            'name' => 'Laptop',
            'slug' => 'laptop'
        ]);

        Category::create([
            'name' => 'Mobile',
            'slug' => 'mobile'
        ]);

        Category::create([
            'name' => 'Headphone',
            'slug' => 'headphone'
        ]);
    }
}
