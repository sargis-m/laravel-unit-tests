<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * Test if the returned HTML page contains the name Megan.
     *
     * @return void
     */
    public function test_if_view_contains_Megan()
    {
        $response = $this->get('/view-test');

        $response->assertStatus(200);
        $response->assertSee('Megan');
        $response->assertSee('<p>The name is Megan.</p>', false);
    }
}
