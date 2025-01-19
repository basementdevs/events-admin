<?php

namespace App\Http\Controllers;

use App\Actions\Events\EventAttendingAction;
use App\Actions\Events\EventLeaveAction;
use App\Exceptions\Events\EventAttendException;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;

class EventsController extends Controller
{
    public function __construct(
        private readonly EventAttendingAction $eventAttendingAction,
        private readonly EventLeaveAction $eventLeaveAction
    ) {}

    public function getEvent(): string
    {
        return 'vai brasil';
    }

    public function postAttend(Event $event): RedirectResponse
    {
        try {
            $this->eventAttendingAction->handle($event);
        } catch (EventAttendException $exception) {
            return redirect()
                ->route('events.show', $event)
                ->withErrors($exception->getMessage(), 'error');
        }

        return redirect()->route('events.show', $event);
    }

    public function postLeave(Event $event): RedirectResponse
    {
        $this->eventLeaveAction->handle($event);

        return redirect()->route('events.show', $event);
    }
}
