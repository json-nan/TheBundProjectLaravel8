<?php

namespace Database\Factories;

use Bluemmb\Faker\PicsumPhotosProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class DesignerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new PicsumPhotosProvider($this->faker));
        return [
            "name" => $this->faker->name,
            "brand_name" => $this->faker->domainName,
            "profile_picture" => $this->faker->imageUrl(600, 700, 'cats'),
            "brand_picture" => $this->faker->imageUrl(600, 700, 'cats'),
            "description" => $this->faker->text,
            "enabled" => $this->faker->boolean(80),
        ];
    }
}
