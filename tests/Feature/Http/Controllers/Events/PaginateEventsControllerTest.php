<?php

namespace Tests\Feature\Http\Controllers\Events;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PaginateEventsControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_check_if_theres_active_events()
    {
        // Prepare
        Event::factory()->count(3)->create(['active' => false]);
        $activeEvent = Event::factory()->create(['active' => true]);
        $pastEvents = Event::whereActive(false)->paginate(5);


        // Act
        $response = $this->get(route('events.index'));

        // Assert
        $response->assertOk()
            ->assertSee($activeEvent->title)
            ->assertViewHas('activeEvent', $activeEvent);
    }
}
