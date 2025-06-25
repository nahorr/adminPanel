<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function aboutUs()
    {
        return view('frontend.about-us');
    }

    public function events()
    {
        return view('frontend.events');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
