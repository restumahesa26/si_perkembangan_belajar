<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    public $table = 'siswa';
    protected $primaryKey = 'nisn';
    public $incrementing = false;
    protected $keyType = 'string';

    public $fillable = [
        'nisn', 'user_id', 'orang_tua_id', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'status_keluarga', 'anak_ke', 'alamat', 'no_kk', 'no_hp', 'sekolah_asal', 'npsn', 'alamat_sekolah_asal'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function orang_tua()
    {
        return $this->hasOne(OrangTua::class, 'id', 'orang_tua_id');
    }

    public function nilai()
    {
        return $this->hasMany(NilaiRapor::class, 'nisn', 'nisn')->orderByRaw("FIELD(jenjang , 'X', 'XI', 'XII') ASC")->orderBy('semester', 'ASC');
    }

    public function getRataNilai($nisn, $jenjang, $semester)
    {
        $item = NilaiRapor::where('nisn', $nisn)->where('jenjang', $jenjang)->where('semester', $semester)->first();

        if ($item) {
            $value = $item->matematika + $item->keislaman + $item->bahasa_arab + $item->bahasa_inggris + $item->ipa + $item->ips;

            return number_format($value / 6, 2) ;
        }else {
            return '-';
        }
    }
}
