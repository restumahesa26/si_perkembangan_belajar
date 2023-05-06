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
        Schema::create('siswa', function (Blueprint $table) {
            $table->string('nisn')->primary();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('orang_tua_id')->references('id')->on('orang_tua');
            $table->enum('jenis_kelamin', ['L','P']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('status_keluarga');
            $table->char('anak_ke');
            $table->string('alamat');
            $table->string('no_kk');
            $table->string('no_hp');
            $table->string('sekolah_asal')->nullable();
            $table->string('npsn')->nullable();
            $table->string('alamat_sekolah_asal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
