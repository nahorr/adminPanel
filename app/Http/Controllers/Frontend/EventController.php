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
        return view('frontend.events.index');
    }

    public function show(Event $event)
    {
        $upcomingEvents = Event::where('start_time', '>', Carbon::now())
                           ->where('id', '!=', $event->id)
                           ->orderBy('start_time', 'asc')
                           ->take(5)
                           ->get();

        return view('frontend.events.show', compact('event', 'upcomingEvents'));
    }

    public function register(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
        ]);

        EventRegistration::create([
            'event_id' => $event->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->back()->with('success', 'You have been registered for the event!');
    }
}
