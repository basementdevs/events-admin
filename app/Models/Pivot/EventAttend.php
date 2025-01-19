<?php

namespace App\Models\Pivot;

use App\Enums\Events\AttendingStatusEnum;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EventAttend extends Pivot
{
    protected $table = 'event_attend';

    protected $fillable = [
        'status',
    ];

    protected $casts = [
        'status' => AttendingStatusEnum::class,
    ];
}
