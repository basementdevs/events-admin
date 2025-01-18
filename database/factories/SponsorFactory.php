<?php

namespace Database\Factories;

use App\Models\Sponsor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SponsorFactory extends Factory
{
    protected $model = Sponsor::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'logo_path' => $this->faker->word(),
            'homepage_url' => $this->faker->url(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
