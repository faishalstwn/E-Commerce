<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    
    public function run(): void
    {
        $categories = [
            ['name' => 'Elektronik & Gadget'],
            ['name' => 'Fashion & Pakaian'],
            ['name' => 'Aksesoris Komputer'],
            ['name' => 'Audio & Speaker'],
            ['name' => 'Tas & Travel'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
