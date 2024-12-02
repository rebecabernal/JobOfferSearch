<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use App\Models\Offer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Feedback;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        Offer::factory(10)->create();
        Feedback::factory(10)->create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);
        Feedback::factory(10)->create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 2,
        ]);
        Feedback::factory(10)->create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 3,
        ]);
    }
}
