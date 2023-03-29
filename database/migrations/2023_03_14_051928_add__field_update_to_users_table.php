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
            $table->integer('id_cabang')->after('id');
            $table->integer('id_jabatan')->after('id_cabang');
            $table->integer('id_divisi')->after('id_jabatan');
            $table->string('nik')->after('id_divisi');
            $table->string('nama_lengkap')->after('nik');
            $table->string('tmt')->after('nama_lengkap');
            $table->integer('active')->default(1)->after('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('id_cabang');
            $table->dropColumn('id_jabatan');
            $table->dropColumn('id_divisi');
            $table->dropColumn('nik');
            $table->dropColumn('nama_lengkap');
            $table->dropColumn('tmt');
            $table->dropColumn('active');
        });
    }
};
