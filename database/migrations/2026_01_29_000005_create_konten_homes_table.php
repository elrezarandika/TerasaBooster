<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Migrasi tabel konten homepage yang bisa diatur admin
     */
    public function up(): void
    {
        Schema::create('konten_homes', function (Blueprint $table) {
            $table->id();
            $table->string('kunci')->unique();
            $table->text('nilai')->nullable();
            $table->string('tipe')->default('text'); // text, image, html
            $table->timestamps();
        });
    }

    /**
     * Rollback migrasi
     */
    public function down(): void
    {
        Schema::dropIfExists('konten_homes');
    }
};
