<?php

namespace Database\Factories;

use App\Models\Talk;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TalkFactory extends Factory
{
    protected $model = Talk::class;

    public function definition()
    {
        return [
            'event_id' => $this->faker->randomNumber(),
            'user_id' => $this->faker->randomNumber(),
            'status' => $this->faker->word(),
            'field_type' => $this->faker->word(),
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
