<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.about')->with('about', About::first());
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'content_fr' => 'required|string',
            'content_en' => 'required|string',
        ]);

        $about = About::first();

        if ($request->hasFile('picture')) {
            $picture = $request->picture->store('public/photos');
            $about->picture = str_replace('public/', '/storage/', $picture);
        }

        $about->translate('fr')->content = $request->content_fr;
        $about->translate('en')->content = $request->content_en;

        $about->save();

        return redirect()->back();
    }
}
