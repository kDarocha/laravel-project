<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.contact')->with('contact', Contact::first());
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title_fr' => 'required|string',
            'title_en' => 'required|string',
            'subtitle_fr' => 'required|string',
            'subtitle_en' => 'required|string',
            'infos_fr' => 'required|string',
            'infos_en' => 'required|string',
        ]);

        $contact = Contact::first();

        $contact->translate('fr')->title = $request->title_fr;
        $contact->translate('en')->title = $request->title_en;
        $contact->translate('en')->subtitle = $request->subtitle_fr;
        $contact->translate('fr')->subtitle = $request->subtitle_en;
        $contact->translate('fr')->infos = $request->infos_fr;
        $contact->translate('en')->infos = $request->infos_en;

        $contact->save();

        return redirect()->back();
    }
}
