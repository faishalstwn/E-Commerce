<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function home()
    {
        return view('welcome');
    }

    
    public function cart()
    {
        return view('cart');
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
