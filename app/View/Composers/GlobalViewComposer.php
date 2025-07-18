<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Social;
use App\Models\CompanyInfo;
use App\Models\Event;
use App\Models\Gallery;
use Carbon\Carbon;
use App\Models\Service;

class GlobalViewComposer
{
    public function compose(View $view)
    {
        // Get the nearest upcoming event, or the latest past event if none upcoming
        $nextEvent = Event::where('start_time', '>', Carbon::now())
        ->orderBy('start_time')
        ->first();

        if (!$nextEvent) {
        $nextEvent = Event::where('start_time', '<=', Carbon::now())
            ->orderBy('start_time', 'desc')
            ->first();
        }
        
        $view->with([
            'socialLinks' => Social::where('is_active', true)->get(),
            'company' => CompanyInfo::first(),
            'nextEvent' => $nextEvent,
            'eventImages' => Gallery::take(8)->get(),
            'services' => Service::where('status','active')->get(),
        ]);
    }
}
