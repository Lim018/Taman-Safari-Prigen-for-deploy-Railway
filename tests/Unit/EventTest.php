<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_an_event()
    {
        $event = Event::create([
            'name' => 'Tech Conference',
            'description' => 'Annual technology conference',
            'start_date' => now(),
            'end_date' => now()->addDays(1),
            'location' => 'Jakarta',
        ]);

        $this->assertDatabaseHas('events', [
            'name' => 'Tech Conference',
            'location' => 'Jakarta',
        ]);
    }

    /** @test */
    public function it_can_update_an_event()
    {
        $event = Event::create([
            'name' => 'Tech Conference',
            'description' => 'Annual technology conference',
            'start_date' => now(),
            'end_date' => now()->addDays(1),
            'location' => 'Jakarta',
        ]);

        $event->update(['location' => 'Surabaya']);

        $this->assertDatabaseHas('events', [
            'name' => 'Tech Conference',
            'location' => 'Surabaya',
        ]);
    }

    /** @test */
    public function it_can_delete_an_event()
    {
        $event = Event::create([
            'name' => 'Tech Conference',
            'description' => 'Annual technology conference',
            'start_date' => now(),
            'end_date' => now()->addDays(1),
            'location' => 'Jakarta',
        ]);

        $event->delete();

        $this->assertDatabaseMissing('events', ['name' => 'Tech Conference']);
    }
}