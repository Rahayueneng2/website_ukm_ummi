<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('prodis', function (Blueprint $table) {
            $table->id('prodi_id');
            $table->string('prodi_name', 255);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('prodis');
    }
};

