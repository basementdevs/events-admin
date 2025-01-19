<?php

namespace App\Enums\Events;

enum AttendingStatusEnum: string
{
    case Attending = 'attending';
    case NotAttending = 'not_attending';
    case Waitlist = 'waitlist';
}
