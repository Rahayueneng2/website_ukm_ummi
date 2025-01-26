<?php

namespace Database\Seeders;

use App\Models\Ukm;
use Illuminate\Database\Seeder;

class UkmSeeder extends Seeder {
    public function run(): void {
        Ukm::factory()->count(10)->create();
    }
}