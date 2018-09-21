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
}
