<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Prodi;
use App\Models\Semester;
use App\Models\Ukm;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil data dari UKM, Prodi, dan Semester
        $ukms = Ukm::all();
        $prodis = Prodi::all();
        $semesters = Semester::all();

        foreach (range(1, 50) as $index) {
            Member::create([
                'name' => fake()->name(),
                'ukm_id' => $ukms->random()->ukm_id,
                'ukm_name' => $ukms->random()->ukm_name,
                'prodi_id' => $prodis->random()->prodi_id,
                'semester_id' => $semesters->random()->semester_id,
            ]);
        }
    }
}
