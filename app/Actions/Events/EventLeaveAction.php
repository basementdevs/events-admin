<?php

namespace App\Actions\Events;

use App\Enums\Events\AttendingStatusEnum;
use App\Models\Event;

class EventLeaveAction
{
    public function handle(Event $event): void
    {
        $userId = auth()->id();
        $eventAttend = $event->attendees()->where('user_id', $userId)->first();

        if (! $eventAttend) {
            return;
        }

        $event->leave($userId);
    }
}
