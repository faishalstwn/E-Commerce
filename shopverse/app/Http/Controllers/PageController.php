<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $featuredProducts = [
            [
                'id' => 1,
                'name' => 'Wireless Noise-Canceling Headphones',
                'category' => 'Audio & Accessories',
                'price' => 1499000,
                'rating' => 4.9,
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500&auto=format&fit=crop&q=80',
                'is_new' => true,
            ],
            [
                'id' => 2,
                'name' => 'Smart Watch Series 8 Ultra',
                'category' => 'Wearable Tech',
                'price' => 2899000,
                'rating' => 4.8,
                'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500&auto=format&fit=crop&q=80',
                'is_new' => false,
            ],
            [
                'id' => 3,
                'name' => 'Mechanical Gaming Keyboard RGB',
                'category' => 'Computer Accessories',
                'price' => 899000,
                'rating' => 4.7,
                'image' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=500&auto=format&fit=crop&q=80',
                'is_new' => true,
            ],
            [
                'id' => 4,
                'name' => 'Minimalist Leather Backpack',
                'category' => 'Fashion & Travel',
                'price' => 650000,
                'rating' => 4.6,
                'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500&auto=format&fit=crop&q=80',
                'is_new' => false,
            ],
        ];

        return view('home', compact('featuredProducts'));
    }

    public function cart()
    {
        $cartItems = [
            [
                'id' => 1,
                'name' => 'Wireless Noise-Canceling Headphones',
                'price' => 1499000,
                'quantity' => 1,
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&auto=format&fit=crop&q=80',
            ],
            [
                'id' => 2,
                'name' => 'Smart Watch Series 8 Ultra',
                'price' => 2899000,
                'quantity' => 1,
                'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=200&auto=format&fit=crop&q=80',
            ],
            [
                'id' => 3,
                'name' => 'Mechanical Gaming Keyboard RGB',
                'price' => 899000,
                'quantity' => 2,
                'image' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=200&auto=format&fit=crop&q=80',
            ],
        ];

        $subtotal = array_reduce($cartItems, function ($sum, $item) {
            return $sum + ($item['price'] * $item['quantity']);
        }, 0);

        $tax = $subtotal * 0.11; // PPN 11%
        $shipping = 25000;
        $total = $subtotal + $tax + $shipping;

        return view('cart', compact('cartItems', 'subtotal', 'tax', 'shipping', 'total'));
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function contoh()
    {
        return view('contoh', ['name' => 'Faishal']);
    }

    public function layout()
    {
        return view('template.layout', ['title' => 'Layout', 'content' => 'Content']);
    }
}
