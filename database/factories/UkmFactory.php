<?php

namespace Database\Factories;
use App\Models\Ukm;
use Illuminate\Database\Eloquent\Factories\Factory;

class UkmFactory extends Factory {
    protected $model = Ukm::class;

    public function definition(): array {
        return [
            'ukm_name' => $this->faker->company,
            'description' => $this->faker->paragraph,
            'history' => $this->faker->paragraph,
            'social_media' => $this->faker->url,
            'image_ukm' => $this->faker->imageUrl(640, 480, 'business', true, 'UKM'),
        ];
    }
}