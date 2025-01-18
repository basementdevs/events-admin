<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Talk extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'user_id',
        'status',
        'field_type',
        'title',
        'description',
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function events(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
