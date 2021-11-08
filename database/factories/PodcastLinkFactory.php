<?php

namespace Database\Factories;

use App\Models\Podcast;
use App\Models\PodcastLink;
use Illuminate\Database\Eloquent\Factories\Factory;

class PodcastLinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'podcast_id' => Podcast::query()->inRandomOrder()->first()->id,
            'platform' => $this->faker->randomElement(['spotify', 'soundcloud']),
            'url' => $this->faker->url
        ];
    }
}
