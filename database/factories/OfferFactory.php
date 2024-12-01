<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // need to add title faker
            'enterprise' => $this->faker->company(),
            'description' => $this ->faker->realText($maxNbChars = 200),
            'status' => $this->faker->boolean(),
        ];
    }
}
