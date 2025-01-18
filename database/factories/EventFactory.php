<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        return [
            'event_type' => $this->faker->word(),
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'event_at' => Carbon::now(),
            'start_at' => Carbon::now(),
            'end_at' => Carbon::now(),
            'location' => $this->faker->word(),
            'max_attendees' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
