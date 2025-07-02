<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventRegistration;
use Carbon\Carbon;


class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('created_at','desc')->get();

        return view('frontend.events.index', compact('events'));
    }

    public function show($id)
    {
        $event = Event::where('id', $id)->first();

        // dd($id, $event);

        $upcomingEvents = Event::where('start_time', '>', Carbon::now())
                           ->where('id', '!=', $event->id)
                           ->orderBy('start_time', 'asc')
                           ->take(5)
                           ->get();

        return view('frontend.events.show', compact('event', 'upcomingEvents'));
    }

    public function register(Request $request, $id)
    {
        // dd($request->all(), $id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:25',
        ]);

        // Prevent duplicate registration for same event
        $exists = EventRegistration::where('event_id', $id)
            ->where('email', $request->email)
            ->exists();

        if ($exists) {
            return back()->with('error', 'You have already registered for this event.');
        }

        EventRegistration::create([
            'event_id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return back()->with('success', 'Thank you for registering!');
    }

}
