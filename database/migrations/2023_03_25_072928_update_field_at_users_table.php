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
        Schema::table('users', function (Blueprint $table) {
            $table->string('tanggal_masuk')->after('nama_lengkap');
            $table->string('referensi')->after('tanggal_masuk');
            $table->string('alamat_asal')->after('referensi');
            $table->string('alamat_saat_ini')->after('alamat_asal');
            $table->string('nomor_rumah')->after('alamat_saat_ini');
            $table->string('nomor_hp')->after('nomor_rumah');
            $table->string('tempat_lahir')->after('nik');
            $table->string('tanggal_lahir')->after('tempat_lahir');
            $table->string('jenis_kelamin')->after('tanggal_lahir');
            $table->string('agama')->after('jenis_kelamin');
            $table->string('negara')->after('agama');
            $table->string('status_pernikahan')->after('negara');
            $table->string('hobi')->after('status_pernikahan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('tanggal_masuk');
            $table->dropColumn('referensi');
            $table->dropColumn('alamat_asal');
            $table->dropColumn('alamat_saat_ini');
            $table->dropColumn('nomor_rumah');
            $table->dropColumn('nomor_hp');
            $table->dropColumn('tempat_lahir');
            $table->dropColumn('tanggal_lahir');
            $table->dropColumn('jenis_kelamin');
            $table->dropColumn('agama');
            $table->dropColumn('negara');
            $table->dropColumn('status_pernikahan');
            $table->dropColumn('hobi');
        });
    }
};
