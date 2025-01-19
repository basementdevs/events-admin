<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventsControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_user_can_participate_into_a_event()
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
        ]);
    }
}
