<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestasiAkademik extends Model
{
    use HasFactory;

    public $table = 'prestasi_akademik';

    public $fillable = [
        'nisn', 'prestasi', 'tingkat', 'deskripsi', 'sertifikat'
    ];

    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'nisn', 'nisn');
    }
}
