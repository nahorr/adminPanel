<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;

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
        return view('frontend.about-us');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }
}
