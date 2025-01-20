<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_authenticated_user_access_dashboard()
    {
        // Prepare
        $user = User::factory()->create();

        // Act
        $response = $this
            ->actingAs($user)
            ->get(route('dashboard'));

        // Assert
        $response->assertOk();
    }

    public function test_cannot_unauthenticated_user_access_dashboard()
    {
        // Act
        $response = $this->get(route('dashboard'));

        // Assert
        $response->assertRedirect(route('login'));
    }

    public function test_user_can_see_attend_to_event_button()
    {
        // Prepare
        $user = User::factory()->create();
        $event = Event::factory()->create(['active' => true]);

        // Act
        $response = $this
            ->actingAs($user)
            ->get(route('dashboard'));

        // Assert
        $response->assertOk()
            ->assertViewHas('activeEvent', $event)
            ->assertSee($event->title)
            ->assertSee(route('events.join', $event))
            ->assertDontSee('Leave');
    }

    public function test_user_can_see_leave_event_button()
    {
        // Prepare
        $user = User::factory()->create();
        $event = Event::factory()->create(['active' => true]);
        $event->attend($user);

        // Act
        $response = $this
            ->actingAs($user)
            ->get(route('dashboard'));

        // Assert
        $response->assertOk()
            ->assertViewHas('activeEvent', $event)
            ->assertSee($event->title)
            ->assertDontSee('Attend')
            ->assertSee(route('events.leave', $event));
    }
}
