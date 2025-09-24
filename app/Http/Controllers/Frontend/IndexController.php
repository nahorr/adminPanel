<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use App\Models\Gallery;
use App\Models\AboutUs;
use App\Models\Team;

class IndexController extends Controller
{
    public function index()
    {
        $upcomingEvents = Event::where('start_time', '>', Carbon::now())
        ->orderBy('start_time')
        ->take(3)
        ->get();

        $pastEvents = Event::where('start_time', '<', now())->orderByDesc('start_time')->take(3)->get();

        $about_us = AboutUs::first();

        return view('frontend.index', compact('upcomingEvents','pastEvents','about_us'));
    }

    public function aboutUs()
    {
        $about_us = AboutUs::first();

        $teams = Team::all();

        return view('frontend.about-us', compact('about_us', 'teams'));
    }

    public function gallery()
    {
        $gallery_images = Gallery::orderBy('created_at', 'desc')->get();

        return view('frontend.gallery', compact('gallery_images'));
    }
}
