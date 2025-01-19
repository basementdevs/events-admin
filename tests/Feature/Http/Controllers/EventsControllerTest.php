<?php

namespace Tests\Feature\Http\Controllers;

use App\Enums\Events\AttendingStatusEnum;
use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventsControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_participate_into_an_event()
    {
        // Prepare
        $event = Event::factory()->create();
        $user = User::factory()->create();

        // Act
        $response = $this
            ->actingAs($user)
            ->post(route('events.join', $event));

        // Assert
        $response->assertRedirect(route('events.show', $event));
        $this->assertDatabaseHas('events_attendees', [
            'event_id' => $event->getKey(),
            'user_id' => $user->getKey(),
            'status' => AttendingStatusEnum::Attending,
        ]);

        $this->assertDatabaseCount('events_attendees', 1);
        $this->assertDatabaseHas('events', [
            'attendees_count' => 1,
        ]);
    }

    public function test_user_can_not_participate_into_an_event_twice()
    {
        // Prepare
        $event = Event::factory()->create();
        $user = User::factory()->create();
        $event->attendees()->attach($user, ['status' => AttendingStatusEnum::Attending]);
        $event->increment('attendees_count');

        // Act
        $response = $this
            ->actingAs($user)
            ->post(route('events.join', $event));

        // Assert
        $response->assertRedirect(route('events.show', $event));
        $this->assertDatabaseHas('events_attendees', [
            'event_id' => $event->getKey(),
            'user_id' => $user->getKey(),
            'status' => AttendingStatusEnum::Attending,
        ]);

        $this->assertDatabaseCount('events_attendees', 1);
        $this->assertDatabaseHas('events', [
            'attendees_count' => 1,
        ]);
    }

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

    public function test_event_after_hit_max_participants_should_send_to_waitlist(): void
    {
        // Prepare
        $event = Event::factory()->create(['max_attendees' => 1]);
        $attendedUser = User::factory()->create();
        $event->attend($attendedUser->getKey());

        $waitlistedUser = User::factory()->create();

        $response = $this
            ->actingAs($waitlistedUser)
            ->post(route('events.join', $event));

        // Assert
        $response->assertRedirect(route('events.show', $event));

        $this->assertDatabaseHas('events_attendees', [
            'event_id' => $event->getKey(),
            'user_id' => $attendedUser->getKey(),
            'status' => AttendingStatusEnum::Attending,
        ]);

        $this->assertDatabaseHas('events_attendees', [
            'event_id' => $event->getKey(),
            'user_id' => $waitlistedUser->getKey(),
            'status' => AttendingStatusEnum::Waitlist,
        ]);

        $this->assertDatabaseCount('events_attendees', 2);
        $this->assertDatabaseHas('events', [
            'id' => $event->getKey(),
            'attendees_count' => 1,
            'waitlist_count' => 1,
        ]);
    }

    public function test_user_should_be_redirected_to_login_after_trying_to_participate_into_an_event()
    {
        // Prepare
        $event = Event::factory()->create();

        // Act
        $response = $this->post(route('events.join', $event));

        // Assert
        $response->assertRedirect(route('login'));
    }
}
