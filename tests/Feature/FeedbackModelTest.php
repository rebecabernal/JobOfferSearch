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
    
    /**
     * Test if a Feedback can be created and inserted into the database.
     *
     */
    public function test_CreateFeedback(): void
    {
        // Create an Offer first since Feedback belongs to Offer
        $offer = Offer::factory()->create(); // Assuming you have a factory for the Offer model

        // Create Feedback using factory
        $feedback = Feedback::create([
            'offer_id' => $offer->id,
            'news' => 'Great Offer!',
        ]);

        // Assert that the feedback was saved correctly in the database
        $this->assertDatabaseHas('feedback', [
            'offer_id' => $offer->id,
            'news' => 'Great Offer!',
        ]);
    }

    /**
     * Test the relationship between Feedback and Offer.
     *
     */
    public function test_FeedbackBelongsToOffer(): void
    {
        // Create Offer and Feedback using factories
        $offer = Offer::factory()->create();
        $feedback = Feedback::factory()->create([
            'offer_id' => $offer->id,
            'news' => 'Great Offer!',
        ]);

        // Assert that the feedback's offer is correct
        $this->assertInstanceOf(Offer::class, $feedback->offer);
        $this->assertEquals($offer->id, $feedback->offer->id);
    } 
}

