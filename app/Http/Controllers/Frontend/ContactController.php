<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactFormSubmitted;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.contact');
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($data);

        Notification::route('mail', 'info@victopman.com') // Replace with your admin email
            ->notify(new ContactFormSubmitted($contact));

        return back()->with('success', 'Your message has been sent successfully!');
    }

}
