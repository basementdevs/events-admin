<?php

namespace App\Actions\Events;

use App\Enums\Events\AttendingStatusEnum;
use App\Exceptions\Events\EventAttendException;
use App\Models\Event;

class EventAttendingAction
{
    /**
     * @throws EventAttendException
     */
    public function handle(Event $event): void
    {
        $userId = auth()->id();
        $userAlreadyAttending = $event->attendees()->where('user_id', $userId)->exists();

        if ($userAlreadyAttending) {
            throw EventAttendException::alreadyAttending();
        }


        $attendingType = $event->attendees_count >= $event->max_attendees
            ? AttendingStatusEnum::Waitlist
            : AttendingStatusEnum::Attending;


        $event->attend($userId, $attendingType);
    }
}
