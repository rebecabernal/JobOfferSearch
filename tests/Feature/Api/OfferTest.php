<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Offer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OfferTest extends TestCase

{
    use RefreshDatabase;
    /**
     * A basic feature test example.
    */
    /*public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
        */

        public function test_GetElements()
    {   
        Offer::factory(10)->create();
        
        $response = $this->get('/api/offers');

        $response->assertStatus(200)->assertJsonCount(10);
    }

    public function test_GetElementById()
    {   
        Offer::factory(10)->create();
        
        $response = $this->get('/api/offers/1');

        $response->assertStatus(200)->assertJsonFragment([
            'id' => 1
        ]);
    }

    public function test_DeleteElement()
    {   
        Offer::factory(10)->create();
        
        $response = $this->delete('/api/offers/1');
        $this->assertDatabaseCount('offers', 9);
    }

    public function test_CreateElement()
    { 
        
        $response = $this->post('/api/offers', [

            'title' => 'test',
            'enterprise' => 'asldasdas',
            'description' => 'asdasdasd',
            'status' => 0,
        ]);

        $response = $this->get('/api/offers');

        $response->assertStatus(200)->assertJsonCount(1)->assertJsonFragment([

            'title' => 'test',
            'enterprise' => 'asldasdas',
            'description' => 'asdasdasd',
            'status' => 0,
        ]);
    }

    public function test_UpdateElements()
    {   
        Offer::factory(10)->create();
        
        $response = $this->put('/api/offers/1', 
        [
            'title' => 'test',
            'enterprise' => 'asldasdas',
            'description' => 'asdasdasd',
            'status' => 0,
        ]);

        $response = $this->get('/api/offers/1');

        $response->assertStatus(200)->assertJsonFragment([

            'title' => 'test',
            'enterprise' => 'asldasdas',
            'description' => 'asdasdasd',
            'status' => 0,
        ]);
    }
}