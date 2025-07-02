<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use App\Models\Gallery;
use App\Models\AboutUs;

class IndexController extends Controller
{
    public function index()
    {
        $upcomingEvents = Event::where('start_time', '>', Carbon::now())
        ->orderBy('start_time')
        ->take(3)
        ->get();

        return view('frontend.index', compact('upcomingEvents'));
    }

    public function aboutUs()
    {
        $about_us = AboutUs::first();

        $teamMembers = collect(json_decode($about_us->team_images, true));

        return view('frontend.about-us', compact('about_us','teamMembers'));
    }

    public function gallery()
    {
        $gallery_images = Gallery::orderBy('created_at', 'desc')->get();

        return view('frontend.gallery', compact('gallery_images'));
    }
}
