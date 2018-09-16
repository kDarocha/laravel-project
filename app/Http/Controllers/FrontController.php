<?php

namespace App\Http\Controllers;

use App\Product;

class FrontController extends Controller
{
    public function index()
    {
        return view('index')
            ->with('products', Product::orderBy('id', 'desc')->take(3)->get());
    }

    public function about()
    {
        return view('about-us');
    }

    public function products()
    {
        return view('products')
            ->with('products', Product::orderBy('id', 'desc')->get());
    }

    public function SingleProduct($slug)
    {
        return view('single-product')
            ->with('product', Product::where('slug', $slug)->get()->first());
    }
}
