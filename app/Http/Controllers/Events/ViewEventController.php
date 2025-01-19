<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;

class ViewEventController extends Controller
{
    public function __invoke(Event $event)
    {
        return $event->title;
    }
}
