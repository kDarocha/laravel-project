<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Product;
use App\About;
use App\Slider;

class FrontController extends Controller
{
    public function index()
    {
        return view('index')
            ->with('products', Product::orderBy('id', 'desc')->take(3)->get())
            ->with('sliders', Slider::all());
    }

    public function about()
    {
        return view('about-us')->with('about', About::first());
    }

    public function products()
    {
        return view('products')
            ->with('products', Product::orderBy('id', 'desc')->get());
    }

    public function singleProduct($slug)
    {
        $product = Product::where('slug', $slug)->get()->first();

        if (empty($product)) {
            return redirect()->route('products');
        }

        return view('single-product')
            ->with('product', $product);
    }

    public function contact()
    {
        return view('contact')
            ->with('contact', Contact::first());
    }
}
