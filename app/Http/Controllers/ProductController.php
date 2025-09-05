<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        $category = null;
        return view('products.index', compact('products', 'category'));
    }

    public function category($category)
    {
        $category = Category::where('name', $category)->firstOrFail();
        $products = $category->products()->paginate(10);
        return view('products.index', compact('products', 'category'));
    }

    public function show($category, $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product', 'category'));
    }
}
