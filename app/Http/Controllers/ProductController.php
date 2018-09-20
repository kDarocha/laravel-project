<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index')->with('products', Product::orderBy('id', 'desc')->get());
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function edit($id)
    {
        return view('admin.products.edit')->with('product', Product::find($id));
    }

    public function destroy()
    {
        return redirect()->back();
    }

    public function trashed()
    {
        return view('admin.products.trashed')->with('products', Product::onlyTrashed()->get());
    }
}
