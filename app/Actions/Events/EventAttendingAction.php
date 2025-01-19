<?php

namespace App\Actions\Events;

use App\Models\Event;

class EventAttendingAction
{
    public function handle(Event $event): void
    {
        $event->attendees()->attach(auth()->id(), ['status' => 'attending']);
    }
}
