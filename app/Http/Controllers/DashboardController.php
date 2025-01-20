<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $isAttending = false;
        $activeEvent = Event::where('active', true)->first();

        if ($activeEvent) {
            $isAttending = $activeEvent->attendees()->where('user_id', auth()->id())->exists();
        }

        return view('dashboard', [
            'activeEvent' => $activeEvent,
            'isAttending' => $isAttending,
        ]);
    }
}
