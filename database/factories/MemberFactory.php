<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\Prodi;
use App\Models\Semester;
use App\Models\Ukm;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory {
    protected $model = Member::class;

    public function definition(): array {
        return [
            'ukm_id' => Ukm::factory(),
            'ukm_name' => $this->faker->company,
            'name' => $this->faker->name,
            'prodi_id' => Prodi::factory(),
            'semester_id' => Semester::factory(),
        ];
    }
}
