<?php

namespace App\Http\Controllers\Events;

use App\Actions\Events\EventLeaveAction;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;

class LeaveEventController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(
        EventLeaveAction $leaveAction,
        Event $event
    ): RedirectResponse {
        $leaveAction->handle($event);

        return redirect()->route('dashboard');
    }
}
