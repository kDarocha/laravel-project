<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.sliders.index', ['sliders' => Slider::all()]);
    }

    public function create()
    {
        return view('admin.sliders.create', ['products' => Product::all()]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|int',
            'title_fr' => 'required|string',
            'title_en' => 'required|string',
            'description_fr' => 'required|string',
            'description_en' => 'required|string',
            'picture' => 'required|image',
        ]);

        $picture = $request->picture->store('public/photos');
        $picturePath = str_replace('public/', '/storage/', $picture);

        $data = [
            'picture' => $picturePath,
            'product_id' => $request->product_id,
            'fr' => [
                'title' => $request->title_fr,
                'description' => $request->description_fr,
            ],
            'en' => [
                'title' => $request->title_en,
                'description' => $request->description_en,
            ],
        ];

        Slider::create($data);

        return redirect()->route('admin.home.sliders');
    }

    public function edit($id)
    {
        return view('admin.sliders.edit', ['slider' => Slider::find($id), 'products' => Product::all()]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'product_id' => 'required|int',
            'title_fr' => 'required|string',
            'title_en' => 'required|string',
            'description_fr' => 'required|string',
            'description_en' => 'required|string',
        ]);

        $slider = Slider::find($id);

        $slider->product_id = $request->product_id;
        $slider->translate('fr')->title = $request->title_fr;
        $slider->translate('en')->title = $request->title_en;
        $slider->translate('en')->description = $request->description_fr;
        $slider->translate('fr')->description = $request->description_en;

        if ($request->hasFile('picture')) {
            $picture = $request->picture->store('public/photos');
            $slider->picture = str_replace('public/', '/storage/', $picture);
        }

        $slider->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);

        $slider->delete();

        return redirect()->back();
    }
}
