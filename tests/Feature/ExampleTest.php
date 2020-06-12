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
    public function testLandingPage()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
        $response->assertLocation('/login');
    }

//    public function test(){
//        $response = $this->get('/');
//        $response->assertStatus(302);
//    }
}

