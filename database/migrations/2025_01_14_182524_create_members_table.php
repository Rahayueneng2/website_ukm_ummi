<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('members', function (Blueprint $table) {
            $table->id('member_id');
            $table->unsignedBigInteger('ukm_id');
            $table->string('ukm_name')->default(''); // Set default value untuk ukm_name
            $table->string('name');
            $table->unsignedBigInteger('prodi_id');
            $table->unsignedBigInteger('semester_id');
            $table->timestamps();

            $table->foreign('ukm_id')->references('ukm_id')->on('ukms')->onDelete('cascade');
            $table->foreign('prodi_id')->references('prodi_id')->on('prodis')->onDelete('cascade');
            $table->foreign('semester_id')->references('semester_id')->on('semesters')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('members');
    }
};
