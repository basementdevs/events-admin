<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\View\View;

class PaginateEventsController extends Controller
{
    public function __invoke(): View
    {
        $activeEvent = Event::whereActive(true)->first();
        $pastEvents = Event::whereActive(false)->paginate(1);

        return view('events.index', [
            'activeEvent' => $activeEvent,
            'pastEvents' => $pastEvents,
        ]);
    }
}
