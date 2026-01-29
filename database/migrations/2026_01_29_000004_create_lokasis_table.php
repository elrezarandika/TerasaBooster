<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Migrasi tabel lokasi toko/admin
     */
    public function up(): void
    {
        Schema::create('lokasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kota');
            $table->text('alamat')->nullable();
            $table->string('nomor_whatsapp');
            $table->string('nama_admin')->nullable();
            $table->boolean('aktif')->default(true);
            $table->integer('urutan')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Rollback migrasi
     */
    public function down(): void
    {
        Schema::dropIfExists('lokasis');
    }
};
