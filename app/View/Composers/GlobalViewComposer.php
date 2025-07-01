<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Social;
use App\Models\CompanyInfo;
use App\Models\Event;
use Carbon\Carbon;

class GlobalViewComposer
{
    public function compose(View $view)
    {
        //Get the nearest upcomming event
        $nextEvent = Event::where('start_time', '>', Carbon::now())
                  ->orderBy('start_time')
                  ->first();

        $view->with([
            'socialLinks' => Social::where('is_active', true)->get(),
            'company' => CompanyInfo::first(),
            'nextEvent' => $nextEvent,
        ]);
    }
}
