<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Content;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TicketTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_ticket()
    {
        $ticket = Content::create([
            'TITLE' => 'Tiket Masuk Safari',
            'DESCRIPSION' => 'Tiket untuk masuk ke Safari Park',
            'HARGA_ADULT' => 150000,
            'HARGA_CHILD' => 100000,
            'IMAGE' => 'tiket.jpg',
        ]);

        $this->assertDatabaseHas('contents', [
            'TITLE' => 'Tiket Masuk Safari',
            'HARGA_ADULT' => 150000,
        ]);
    }

    /** @test */
    public function it_can_update_a_ticket()
    {
        $ticket = Content::create([
            'TITLE' => 'Tiket Masuk Safari',
            'HARGA_ADULT' => 150000,
            'HARGA_CHILD' => 100000,
        ]);

        $ticket->update(['HARGA_ADULT' => 160000]);

        $this->assertDatabaseHas('contents', [
            'TITLE' => 'Tiket Masuk Safari',
            'HARGA_ADULT' => 160000,
        ]);
    }

    /** @test */
    public function it_can_delete_a_ticket()
    {
        $ticket = Content::create([
            'TITLE' => 'Tiket Masuk Safari',
            'HARGA_ADULT' => 150000,
            'HARGA_CHILD' => 100000,
        ]);

        $ticket->delete();

        $this->assertDatabaseMissing('contents', ['TITLE' => 'Tiket Masuk Safari']);
    }
}