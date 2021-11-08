<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PodcastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'slug' => fn($fields) => Str::of($fields['name'])->slug(),
            'url' => $this->faker->url,
            'description' => $this->faker->text,
            'image' => $this->faker->imageUrl,
            'enabled' => true,
            'duration' => '00:30',
            'date' => 'Noviembre, 10, 2021'
        ];
    }
}
