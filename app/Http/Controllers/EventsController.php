<?php

namespace App\Http\Controllers;

use App\Actions\Events\EventAttendingAction;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;

class EventsController extends Controller
{
    public function __construct(
        private readonly EventAttendingAction $eventAttendingAction
    ) {}

    public function getEvent(): string
    {
        return 'vai brasil';
    }

    public function postAttend(Event $event): RedirectResponse
    {
        $this->eventAttendingAction->handle($event);

        return redirect()->route('events.show', $event);
    }
}
