<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeSubscriberMail;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
    
        $existing = Subscription::where('email', $request->email)->first();
    
        if (!$existing) {
            Subscription::create(['email' => $request->email]);
    
            // ✅ Queue the welcome email (as shown in your image)
            Mail::to($request->email)->queue(new WelcomeSubscriberMail($request->email));
        }
    
        return back()->with('success', 'Thank you for subscribing!');
    }
}
