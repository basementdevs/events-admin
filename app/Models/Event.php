<?php

namespace App\Models;

use App\Models\Pivot\EventAttend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'active',
        'event_type',
        'title',
        'description',
        'event_at',
        'start_at',
        'end_at',
        'location',
        'max_attendees',
        'attendees_count',
        'waitlist_count',
    ];

    protected function casts()
    {
        return [
            'event_at' => 'timestamp',
            'start_at' => 'timestamp',
            'end_at' => 'timestamp',
        ];
    }

    public function attendees(): BelongsToMany
    {
        return $this
            ->belongsToMany(
                User::class,
                'events_attendees',
                'event_id',
                'user_id'
            )
            ->using(EventAttend::class)
            ->withTimestamps();
    }
}
