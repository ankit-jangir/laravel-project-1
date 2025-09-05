<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // Dummy products data
        $products = [
            ['name' => 'Product One', 'image' => 'product1.jpg', 'category_id' => 1, 'id' => 1],
            ['name' => 'Product Two', 'image' => 'product2.jpg', 'category_id' => 1, 'id' => 2],
            ['name' => 'Product Three', 'image' => 'product3.jpg', 'category_id' => 2, 'id' => 3],
        ];

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
        // Dummy products array for product listing page
        $products = [
            ['name' => 'Product One', 'image' => 'product1.jpg', 'id' => 1, 'category_id' => 1],
            ['name' => 'Product Two', 'image' => 'product2.jpg', 'id' => 2, 'category_id' => 1],
            ['name' => 'Product Three', 'image' => 'product3.jpg', 'id' => 3, 'category_id' => 2],
        ];

        return view('products.index', compact('products'));
    }

    public function showProduct($product)
    {
        $product = ['name' => 'Product '.$product, 'image' => 'product'.$product.'.jpg', 'id' => $product, 'category_id' => 1];
        return view('products.show', ['product' => $product]);
    }

    public function contact()
    {
        return view('contact');
    }
}
