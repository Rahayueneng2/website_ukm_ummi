<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemesterSeeder extends Seeder {
    public function run(): void {
        DB::table('semesters')->insert([
            ['semester_number' => 1, 'created_at' => now()],
            ['semester_number' => 2, 'created_at' => now()],
            ['semester_number' => 3, 'created_at' => now()],
            ['semester_number' => 4, 'created_at' => now()],
            ['semester_number' => 5, 'created_at' => now()],
            ['semester_number' => 6, 'created_at' => now()],
            ['semester_number' => 7, 'created_at' => now()],
            ['semester_number' => 8, 'created_at' => now()],
        ]);
    }
}
