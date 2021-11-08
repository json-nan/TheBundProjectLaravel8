<?php

namespace Database\Factories;

use App\Models\ClassOf;
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
            "profile_picture" => $this->faker->imageUrl(600, 700, ),
            "products_picture" => $this->faker->imageUrl(600, 700, ),
            "brand_picture" => $this->faker->imageUrl(300, 300),
            "logo_icon" => $this->faker->imageUrl('100', '100'),
            "description" => $this->faker->text,
            "enabled" => true,
            "class_of_id" => ClassOf::query()->inRandomOrder()->first()->id
        ];
    }
}
