<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    
    public function run(): void
    {
        
        $elektronik = Category::where('name', 'Elektronik & Gadget')->first();
        $fashion    = Category::where('name', 'Fashion & Pakaian')->first();
        $komputer   = Category::where('name', 'Aksesoris Komputer')->first();
        $audio      = Category::where('name', 'Audio & Speaker')->first();
        $tas        = Category::where('name', 'Tas & Travel')->first();

        $products = [
            [
                'name'        => 'Wireless Noise-Canceling Headphones',
                'description' => 'Headphone bluetooth premium dengan peredam bising aktif dan daya tahan baterai hingga 30 jam.',
                'stock'       => 50,
                'image'       => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500&auto=format&fit=crop&q=80',
                'price'       => 1499000,
                'category_id' => $audio->id,
            ],
            [
                'name'        => 'Smart Watch Series 8 Ultra',
                'description' => 'Jam tangan pintar dengan pemantau kesehatan lengkap, GPS akurat, dan layar OLED jernih.',
                'stock'       => 30,
                'image'       => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500&auto=format&fit=crop&q=80',
                'price'       => 2899000,
                'category_id' => $elektronik->id,
            ],
            [
                'name'        => 'Mechanical Gaming Keyboard RGB',
                'description' => 'Keyboard mekanik taktil dengan pencahayaan RGB yang dapat disesuaikan dan kabel braided.',
                'stock'       => 75,
                'image'       => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=500&auto=format&fit=crop&q=80',
                'price'       => 899000,
                'category_id' => $komputer->id,
            ],
            [
                'name'        => 'Minimalist Leather Backpack',
                'description' => 'Tas punggung kulit sintetis premium dengan kompartemen laptop 15 inci.',
                'stock'       => 40,
                'image'       => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500&auto=format&fit=crop&q=80',
                'price'       => 650000,
                'category_id' => $tas->id,
            ],
            [
                'name'        => 'Ergonomic Wireless Mouse',
                'description' => 'Mouse nirkabel desain ergonomis mengurangi pegal pada pergelangan tangan.',
                'stock'       => 100,
                'image'       => 'https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=500&auto=format&fit=crop&q=80',
                'price'       => 450000,
                'category_id' => $komputer->id,
            ],
            [
                'name'        => 'Portable Bluetooth Speaker',
                'description' => 'Speaker portabel tahan air (IPX7) dengan suara bass mendalam dan daya tahan baterai 15 jam.',
                'stock'       => 60,
                'image'       => 'https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=500&auto=format&fit=crop&q=80',
                'price'       => 799000,
                'category_id' => $audio->id,
            ],
            [
                'name'        => 'Casual Streetwear Hoodie',
                'description' => 'Hoodie streetwear premium berbahan cotton fleece tebal, cocok untuk segala cuaca.',
                'stock'       => 80,
                'image'       => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=500&auto=format&fit=crop&q=80',
                'price'       => 350000,
                'category_id' => $fashion->id,
            ],
            [
                'name'        => 'USB-C Hub Multiport Adapter',
                'description' => 'Hub USB-C 7-in-1 dengan HDMI 4K, USB 3.0, SD card reader, dan power delivery 100W.',
                'stock'       => 45,
                'image'       => 'https://images.unsplash.com/photo-1625842268584-8f3296236761?w=500&auto=format&fit=crop&q=80',
                'price'       => 550000,
                'category_id' => $komputer->id,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
