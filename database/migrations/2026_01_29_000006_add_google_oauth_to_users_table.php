<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tambah kolom untuk Google OAuth pada tabel users
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('google_id')->nullable()->after('id');
            $table->string('avatar')->nullable()->after('email');
            $table->boolean('is_admin')->default(false)->after('avatar');
        });
    }

    /**
     * Rollback migrasi
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['google_id', 'avatar', 'is_admin']);
        });
    }
};
