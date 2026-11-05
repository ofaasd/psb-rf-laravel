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
            if (!Schema::hasColumn('psb_peserta_online', 'keterkaitan_saudara')) {
                $table->string('keterkaitan_saudara', 50)->nullable()->default('tidak_ada')->after('anak_ke');
            }
            if (!Schema::hasColumn('psb_peserta_online', 'saudara_id')) {
                $table->integer('saudara_id')->nullable()->after('keterkaitan_saudara');
            }
            if (!Schema::hasColumn('psb_peserta_online', 'nama_saudara')) {
                $table->string('nama_saudara', 180)->nullable()->after('saudara_id');
            }
            if (!Schema::hasColumn('psb_peserta_online', 'kelas_saudara')) {
                $table->string('kelas_saudara', 50)->nullable()->after('nama_saudara');
            }
            if (!Schema::hasColumn('psb_peserta_online', 'tahun_lulus_saudara')) {
                $table->string('tahun_lulus_saudara', 10)->nullable()->after('kelas_saudara');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('psb_peserta_online', function (Blueprint $table) {
            $cols = ['keterkaitan_saudara', 'saudara_id', 'nama_saudara', 'kelas_saudara', 'tahun_lulus_saudara'];
            foreach ($cols as $col) {
                if (Schema::hasColumn('psb_peserta_online', $col)) {
                    $table->dropColumn($col);
                }
            }
        });
    }
};

