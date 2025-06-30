<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(10);
        return view('backend.events.index', compact('events'));
    }

    public function create()
    {
        return view('backend.events.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validateForm($request);

        if ($request->hasFile('banner_image')) {
            $validated['banner_image'] = $request->file('banner_image')->store('events', 'public');
        }

        Event::create($validated);

        return redirect()->route('admin.events.index')->with('success', 'Event created successfully.');
    }

    public function edit($id)
    {
        $event = Event::where('id',$id)->first();

        return view('backend.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::where('id',$id)->first();

        $validated = $this->validateForm($request);

        if ($request->hasFile('banner_image')) {
            $validated['banner_image'] = $request->file('banner_image')->store('events', 'public');
        }

        $event->update($validated);

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy($id)
    {
        $event = Event::where('id',$id)->first();

        $event->delete();
        
        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully.');
    }

    private function validateForm(Request $request)
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'organizer' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'event_type' => 'nullable|string|max:50',
            'start_time' => 'required|date',
            'end_time' => 'nullable|date|after_or_equal:start_time',
            'time_zone' => 'required|string|max:100',
            'location' => 'nullable|string|max:255',
            'is_free' => 'boolean',
            'ticket_price' => 'nullable|numeric',
            'currency' => 'nullable|string|max:10',
            'banner_image' => 'nullable|image|max:2048',
            'capacity' => 'nullable|integer|min:1',
        ]);
    }
}
