<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('ukms', function (Blueprint $table) {
            $table->id('ukm_id');
            $table->string('ukm_name', 255);
            $table->text('description')->nullable();
            $table->text('history')->nullable();
            $table->string('social_media', 255)->nullable();
            $table->string('image_ukm', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('ukms');
    }
};