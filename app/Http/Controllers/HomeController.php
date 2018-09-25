<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', ['home' => Home::first()]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title_fr' => 'required|string',
            'title_en' => 'required|string',
            'description_fr' => 'required|string',
            'description_en' => 'required|string',
        ]);

        $home = Home::first();

        $home->translate('fr')->title = $request->title_fr;
        $home->translate('en')->title = $request->title_en;
        $home->translate('en')->description = $request->description_fr;
        $home->translate('fr')->description = $request->description_en;

        $home->save();

        return redirect()->back();
    }
}
