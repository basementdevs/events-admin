<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_type',
        'title',
        'description',
        'event_at',
        'start_at',
        'end_at',
        'location',
        'max_attendees',
    ];

    protected function casts()
    {
        return [
            'event_at' => 'timestamp',
            'start_at' => 'timestamp',
            'end_at' => 'timestamp',
        ];
    }
}
