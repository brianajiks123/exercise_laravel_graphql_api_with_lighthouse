<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Speaker>
 */
class SpeakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'email' => fake()->unique()->safeEmail(),
            'bio' => fake()->paragraph(),
            'photo' => 'http://randomuser.me/api/portraits/',
            'linkedin' => fake()->optional()->userName(),
            'city' => fake()->city,
            'country' => fake()->country,
            'event_id' => Event::pluck('id')->random(),
        ];
    }
}