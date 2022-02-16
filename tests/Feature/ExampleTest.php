<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
<<<<<<< HEAD
    public function test_example()
=======
    public function testBasicTest()
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
