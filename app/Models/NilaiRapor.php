<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiRapor extends Model
{
    use HasFactory;

    public $table = 'nilai_rapor';

    public $fillable = [
        'nisn', 'kelas', 'jenjang', 'semester', 'tahun_ajaran', 'matematika', 'keislaman', 'bahasa_arab', 'bahasa_inggris', 'ipa', 'ips'
    ];

    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'nisn', 'nisn');
    }
}
