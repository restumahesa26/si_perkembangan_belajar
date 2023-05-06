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
        Schema::create('orang_tua', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('nik_ayah');
            $table->string('nik_ibu');
            $table->string('nik_wali')->nullable();
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('nama_wali')->nullable();
            $table->string('status_ayah');
            $table->string('status_ibu');
            $table->string('status_wali')->nullable();
            $table->string('pendidikan_ayah');
            $table->string('pendidikan_ibu');
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('pekerjaan_wali')->nullable();
            $table->string('no_hp_ayah');
            $table->string('no_hp_ibu');
            $table->string('no_hp_wali')->nullable();
            $table->string('penghasilan')->nullable();
            $table->string('kepemilikan_rumah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orang_tua');
    }
};
