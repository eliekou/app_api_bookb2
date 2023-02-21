<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_fetch_of_data(): void
    {
        $response = $this->get('/1');

        $response->assertStatus(200);
    }
}
