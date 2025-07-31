<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $products = Product::with('category')->where('is_active', true)->get();

        return view('menu', compact('category', 'products'));
    }
    public function byCategory(Category $category)
    {
        $category = Category::all();
        $products = $category->products()->where('is_active', true)->get();
        return view('menu', compact('category', 'products'));
    }
    //
}
