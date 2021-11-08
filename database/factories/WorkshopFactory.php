<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class WorkshopFactory extends Factory
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
            'enabled' => true,
            'image' => $this->faker->imageUrl
        ];
    }
}
