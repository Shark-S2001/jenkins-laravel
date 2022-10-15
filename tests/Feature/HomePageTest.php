<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');
        
        //$response->assertSeeText(['Documentation']);

        $response->assertStatus(200);
    }

    // public function test_you_can_see(){
     

    //     $response->assertStatus(200);
    // }
}
