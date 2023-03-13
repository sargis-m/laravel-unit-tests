<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

// Import the room
use App\Room;

class RoomTest extends TestCase
{
    /**
     * Test the has() method in Room class
     *
     * @return void
     */
    public function test_room_has()
    {
        $room = new Room(["Jack", "Peter", "Amy"]); // Create a new room
        $this->assertTrue($room->has("Jack")); // Expect true
        $this->assertFalse($room->has("Eric")); // Expect false
    }
    
    /**
     * Test the add() method in Room class
     *
     * @return void
     */
    public function test_room_add()
    {
        $room = new Room(["Jack"]); // Create a new room
        $this->assertContains("Peter", $room->add("Peter"));
    }


}
