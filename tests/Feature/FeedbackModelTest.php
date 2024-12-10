<?php

namespace Tests\Feature;

use App\Models\Feedback;
use App\Models\Offer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class FeedbackModelTest extends TestCase

{

    use RefreshDatabase;
    
    public function test_CreateFeedback(): void
    {
        
        $offer = Offer::factory()->create();


        $feedback = Feedback::create([
            'offer_id' => $offer->id,
            'news' => 'Great Offer!',
        ]);


        $this->assertDatabaseHas('feedback', [
            'offer_id' => $offer->id,
            'news' => 'Great Offer!',
        ]);
    }


    public function test_FeedbackBelongsToOffer(): void
    {
        
        $offer = Offer::factory()->create();
        $feedback = Feedback::factory()->create([
            'offer_id' => $offer->id,
            'news' => 'Great Offer!',
        ]);

        $this->assertInstanceOf(Offer::class, $feedback->offer);
        $this->assertEquals($offer->id, $feedback->offer->id);
    } 
}

