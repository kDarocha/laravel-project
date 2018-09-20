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

    public function store(Request $request)
    {
        $this->validate($request, [
            'title_fr' => 'required|string',
            'title_en' => 'required|string',
            'description_fr' => 'required|string',
            'description_en' => 'required|string',
            'content_fr' => 'required|string',
            'content_en' => 'required|string',
            'picture' => 'required|image',
        ]);

        $picture = $request->picture;

        $pictureNewName = time() . $picture->getClientOriginalName();

        $picture->move('uploads/products', $pictureNewName);

        $data = [
            'slug' => str_slug($request->title_en),
            'picture' => 'uploads/products/' . $pictureNewName,
            'fr' => [
                'title' => $request->title_fr,
                'description' => $request->description_fr,
                'content' => $request->content_fr,
            ],
            'en' => [
                'title' => $request->title_en,
                'description' => $request->description_en,
                'content' => $request->content_en,
            ],
        ];

        Product::create($data);

        return redirect()->route('admin.products');
    }

    public function edit($id)
    {
        return view('admin.products.edit')->with('product', Product::find($id));
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect()->back();
    }

    public function restore($id)
    {
        $product = Product::withTrashed()->where('id', $id)->first();

        $product->restore();

        return redirect()->route('admin.products');
    }

    public function kill($id)
    {
        $product = Product::withTrashed()->where('id', $id)->first();

        $product->forceDelete();

        return redirect()->back();
    }

    public function trashed()
    {
        return view('admin.products.trashed')->with('products', Product::onlyTrashed()->get());
    }
}
