<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::with('categorie')->where('is_active', true)->get();

        return view('menu', compact('categorie', 'products'));
    }
    public function byCategory(Category $category)
    {
        $categories = Category::all();
        $products = $category->products()->where('is_active', true)->get();
        return view('menu', compact('categories', 'products'));
    }
    //
}
