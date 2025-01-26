<?php

namespace Database\Factories;

use App\Models\Prodi;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdiFactory extends Factory
{
    protected $model = Prodi::class;

    public function definition(): array
    {
        return [
            'prodi_name' => $this->faker->words(2, true), // Misalnya: "Teknik Informatika"
        ];
    }
}
