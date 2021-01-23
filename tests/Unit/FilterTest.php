<?php

namespace Tests\Unit;

use Tests\TestCase;

class FilterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_filter()
    {

        $id = 1;

        $response = $this->get('/filters/' . $id);

        $response->assertStatus(200);
    }
}
