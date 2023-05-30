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
        Schema::create('nilai_rapor', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->foreign('nisn')->references('nisn')->on('siswa')->onUpdate('cascade');
            $table->enum('jenjang', ['X','XI','XII']);
            $table->string('jurusan')->nullable();
            $table->string('kelas')->nullable();
            $table->char('semester');
            $table->string('tahun_ajaran');
            $table->integer('al_quran_hadits');
            $table->integer('akidah_akhlak');
            $table->integer('fikih');
            $table->integer('sejarah_kebudayaan_islam');
            $table->integer('bahasa_arab');
            $table->integer('pendidikan_pancasila');
            $table->integer('bahasa_indonesia');
            $table->integer('matematika');
            $table->integer('ipa')->nullable();
            $table->integer('ips')->nullable();
            $table->integer('bahasa_inggris');
            $table->integer('penjaskes');
            $table->integer('sejarah');
            $table->integer('kwu');
            $table->integer('karya_ilmiah');
            $table->integer('tahfidz');
            $table->integer('matematika_c')->nullable();
            $table->integer('biologi_c')->nullable();
            $table->integer('fisika_c')->nullable();
            $table->integer('kimia_c')->nullable();
            $table->integer('geografi_c')->nullable();
            $table->integer('informatika_c')->nullable();
            $table->integer('pendalaman_riset_c')->nullable();
            $table->integer('pendalaman_fisika_c')->nullable();
            $table->integer('pendalaman_sosiologi_c')->nullable();
            $table->integer('pendalaman_biologi_c')->nullable();
            $table->integer('kimia_c_c')->nullable();
            $table->integer('sosiologi_c')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_rapor');
    }
};
