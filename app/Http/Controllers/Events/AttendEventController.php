<?php

namespace App\Http\Controllers\Events;

use App\Actions\Events\EventAttendingAction;
use App\Exceptions\Events\EventAttendException;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;

class AttendEventController extends Controller
{
    public function __invoke(
        Event $event,
        EventAttendingAction $attendAction,
    ): RedirectResponse {

        try {
            $attendAction->handle($event);
        } catch (EventAttendException $exception) {
            return redirect()
                ->route('events.show', $event)
                ->withErrors($exception->getMessage(), 'error');
        }

        return redirect()->route('events.show', $event);
    }
}
