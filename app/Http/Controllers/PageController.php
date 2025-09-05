<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function home()
    {
        $products = Product::latest()->take(3)->get();
        return view('home', [
            'subtitle' => 'Welcome To',
            'title' => 'Laxmi And Sons',
            'products' => $products,
        ]);
    }

    public function about()
    {
        return view('about-us');
    }

    public function products()
    {
        $products = Product::with('category')->paginate(9);
        return view('products.index', compact('products'));
    }

    public function showProduct($product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function contact()
    {
        return view('contact');
    }
}
