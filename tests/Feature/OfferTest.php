<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Offer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OfferTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    /*public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    */
    public function test_indexIsWorking()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_showIsWorking()
    {
        Offer::factory(1)->create();
        
        $response = $this->get('/offers/1');

        $response->assertStatus(200);
        
    }
}
