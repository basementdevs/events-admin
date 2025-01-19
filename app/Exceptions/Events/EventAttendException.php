<?php

namespace App\Exceptions\Events;

class EventAttendException extends \Exception
{
    public static function alreadyAttending(): self
    {
        return new static('User is already attending the event.');
    }
}
