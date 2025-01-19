<?php

namespace App\Models;

use App\Models\Pivot\SponsorAttend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sponsor extends Model
{
    use HasFactory;

    protected $table = 'sponsors';

    protected $fillable = [
        'name',
        'logo_path',
        'homepage_url',
    ];

    public function events(): BelongsToMany
    {
        return $this
            ->belongsToMany(
                Event::class,
                'events_sponsors',
                'sponsor_id',
                'event_id'
            )->using(SponsorAttend::class)
            ->withTimestamps()
            ->withPivot('level');
    }
}
