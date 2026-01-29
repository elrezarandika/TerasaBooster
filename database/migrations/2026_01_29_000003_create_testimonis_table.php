<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Migrasi tabel testimoni pelanggan
     */
    public function up(): void
    {
        Schema::create('testimonis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('pesan');
            $table->tinyInteger('rating')->default(5);
            $table->boolean('disetujui')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Rollback migrasi
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonis');
    }
};
