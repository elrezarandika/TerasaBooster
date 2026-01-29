<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Migrasi tabel artikel untuk blog
     */
    public function up(): void
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('ringkasan')->nullable();
            $table->longText('konten');
            $table->string('gambar')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->boolean('dipublikasikan')->default(false);
            $table->timestamp('tanggal_publikasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Rollback migrasi
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
