<?php

namespace App\Models\Pivot;

use App\Enums\Sponsors\SponsoringLevelEnum;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SponsorAttend extends Pivot
{
    protected $table = 'sponsor_attend';

    protected $fillable = [
        'level',
    ];

    protected $casts = [
        'level' => SponsoringLevelEnum::class,
    ];
}
