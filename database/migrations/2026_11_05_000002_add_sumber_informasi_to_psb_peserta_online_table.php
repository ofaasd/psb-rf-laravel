<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('psb_peserta_online', function (Blueprint $table) {
            $table->string('sumber_informasi', 100)->nullable()->after('tahun_lulus_saudara');
            $table->string('sumber_informasi_keterangan', 255)->nullable()->after('sumber_informasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('psb_peserta_online', function (Blueprint $table) {
            $table->dropColumn(['sumber_informasi', 'sumber_informasi_keterangan']);
        });
    }
};

