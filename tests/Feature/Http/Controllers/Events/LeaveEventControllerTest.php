<?php

namespace Tests\Feature\Http\Controllers\Events;

use App\Enums\Events\AttendingStatusEnum;
use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LeaveEventControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_cancel_his_participation_into_an_event()
    {
        // Prepare
        $event = Event::factory()->create();
        $user = User::factory()->create();
        $event->attendees()->attach($user, ['status' => AttendingStatusEnum::Attending]);
        $event->increment('attendees_count');

        // Act
        $response = $this
            ->actingAs($user)
            ->post(route('events.leave', $event));

        // Assert
        $response->assertRedirect(route('events.show', $event));
        $this->assertDatabaseMissing('events_attendees', [
            'event_id' => $event->getKey(),
            'user_id' => $user->getKey(),
            'status' => AttendingStatusEnum::Attending,
        ]);

        $this->assertDatabaseCount('events_attendees', 0);
        $this->assertDatabaseHas('events', [
            'id' => $event->getKey(),
            'attendees_count' => 0,
        ]);
    }
}
