<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Wireless Noise-Canceling Headphones',
                'category' => 'Audio',
                'price' => 1499000,
                'rating' => 4.9,
                'reviews_count' => 128,
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500&auto=format&fit=crop&q=80',
                'description' => 'Headphone bluetooth premium dengan peredam bising aktif dan daya tahan baterai hingga 30 jam.',
            ],
            [
                'id' => 2,
                'name' => 'Smart Watch Series 8 Ultra',
                'category' => 'Wearable',
                'price' => 2899000,
                'rating' => 4.8,
                'reviews_count' => 95,
                'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500&auto=format&fit=crop&q=80',
                'description' => 'Jam tangan pintar dengan pemantau kesehatan lengkap, GPS akurat, dan layar OLED jernih.',
            ],
            [
                'id' => 3,
                'name' => 'Mechanical Gaming Keyboard RGB',
                'category' => 'Computer',
                'price' => 899000,
                'rating' => 4.7,
                'reviews_count' => 210,
                'image' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=500&auto=format&fit=crop&q=80',
                'description' => 'Keyboard mekanik taktil dengan pencahayaan RGB yang dapat disesuaikan dan kabel braided.',
            ],
            [
                'id' => 4,
                'name' => 'Minimalist Leather Backpack',
                'category' => 'Fashion',
                'price' => 650000,
                'rating' => 4.6,
                'reviews_count' => 84,
                'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500&auto=format&fit=crop&q=80',
                'description' => 'Tas punggung kulit sintetis premium dengan kompartemen laptop 15 inci.',
            ],
            [
                'id' => 5,
                'name' => 'Ergonomic Wireless Mouse',
                'category' => 'Computer',
                'price' => 450000,
                'rating' => 4.8,
                'reviews_count' => 156,
                'image' => 'https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=500&auto=format&fit=crop&q=80',
                'description' => 'Mouse nirkabel desain ergonomis mengurangi pegal pada pergelangan tangan.',
            ],
            [
                'id' => 6,
                'name' => 'Portable Bluetooth Speaker',
                'category' => 'Audio',
                'price' => 799000,
                'rating' => 4.7,
                'reviews_count' => 112,
                'image' => 'https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=500&auto=format&fit=crop&q=80',
                'description' => 'Speaker portabel tahan air (IPX7) dengan suara bass mendalam dan daya tahan baterai 15 jam.',
            ],
        ];

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        return view('products.store');
    }

    public function show()
    {
        return view('products.show');
    }

    public function edit()
    {
        return view('products.edit');
    }

    public function update()
    {
        return view('products.update');
    }

    public function destroy()
    {
        return view('products.destroy');
    }
}
