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
            $table->string('kelas');
            $table->char('semester');
            $table->string('tahun_ajaran');
            $table->decimal('matematika', 6, 3);
            $table->decimal('keislaman', 6, 3);
            $table->decimal('bahasa_arab', 6, 3);
            $table->decimal('bahasa_inggris', 6, 3);
            $table->decimal('ipa', 6, 3)->nullable();
            $table->decimal('ips', 6, 3)->nullable();
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
