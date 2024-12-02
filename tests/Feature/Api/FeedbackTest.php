<?php

namespace Tests\Feature\Api;

use App\Models\Feedback;
use Tests\TestCase;
use App\Models\Offer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FeedbackTest extends TestCase
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
        Feedback::factory(1)->create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);

        $response = $this->get('/api/offers/1/news');

        $response->assertStatus(200)->assertJsonCount(1);
    }



    public function test_GetElementsById()
    {   
        Offer::factory(10)->create();
        Feedback::factory(1)->create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);

        $response = $this->get('/api/offers/1/news/1');

        $response->assertStatus(200)->assertJsonFragment(['offer_id' => 1]);
    }


    public function test_DeleteElement()
    {   
        Offer::factory(10)->create();
        Feedback::factory(1)->create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);
        
        $response = $this->delete('/api/offers/1/news/1');
        $this->assertDatabaseCount('feedback', 0);
    }

    public function test_CreateElement()
    { 
        Offer::factory(1)->create();

        $response = $this->post('/api/offers/1/news', [

            'offer_id' => 1,
            'news' => 'asldasdas',
        ]);

        $response = $this->get('/api/offers/1/news/1');

        $response->assertStatus(200)->assertJsonFragment([

            'offer_id' => 1,
            'news' => 'asldasdas',
        ]);
    }

    public function test_UpdateElements()
    {   
        Offer::factory(10)->create();
        Feedback::factory(1)->create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);
        
        $response = $this->put('/api/offers/1/news/1', 
        [
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);

        $response = $this->get('/api/offers/1/news/1');

        $response->assertStatus(200)->assertJsonFragment([

            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);
    }
}


