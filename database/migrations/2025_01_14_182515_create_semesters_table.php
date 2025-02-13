<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('semesters', function (Blueprint $table) {
            $table->id('semester_id');
            $table->integer('semester_number');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('semesters');
    }
};