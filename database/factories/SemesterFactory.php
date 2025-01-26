<?php

namespace Database\Factories;

// database/factories/SemesterFactory.php
use App\Models\Semester;
use Illuminate\Database\Eloquent\Factories\Factory;

class SemesterFactory extends Factory {
    protected $model = Semester::class;

    public function definition(): array {
        return [
           'semester_number' => $this->faker->randomElement([
                '1', '2', '3', '4', '5', '6', '7', '8'
            ]),
        ];
    }
}

