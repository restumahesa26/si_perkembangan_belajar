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
        'nisn', 'user_id', 'orang_tua_id', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'status_keluarga', 'anak_ke', 'alamat', 'no_kk', 'no_hp', 'sekolah_asal', 'npsn', 'alamat_sekolah_asal', 'jurusan', 'minat_jurusan', 'hobi', 'cita_cita', 'target_prestasi'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function prestasi_akademik()
    {
        return $this->hasMany(PrestasiAkademik::class, 'nisn', 'nisn');
    }

    public function prestasi_non_akademik()
    {
        return $this->hasMany(PrestasiNonAkademik::class, 'nisn', 'nisn');
    }

    public function orang_tua()
    {
        return $this->hasOne(OrangTua::class, 'id', 'orang_tua_id');
    }

    public function nilai()
    {
        return $this->hasMany(NilaiRapor::class, 'nisn', 'nisn')->orderByRaw("FIELD(jenjang , 'X', 'XI', 'XII') ASC")->orderBy('semester', 'ASC');
    }

    public function getNilai($nisn, $jenjang, $semester)
    {
        $item = NilaiRapor::where('nisn', $nisn)->where('jenjang', $jenjang)->where('semester', $semester)->first();

        return $item;
    }

    public function getRataNilai($nisn, $jenjang, $semester)
    {
        $item = NilaiRapor::where('nisn', $nisn)->where('jenjang', $jenjang)->where('semester', $semester)->first();

        if ($item) {
            if ($item->jenjang == 'X') {
                $value = $item->al_quran_hadits + $item->akidah_akhlak + $item->fikih + $item->sejarah_kebudayaan_islam + $item->bahasa_arab + $item->pendidikan_pancasila + $item->bahasa_indonesia + $item->matematika + $item->ipa + $item->ips + $item->bahasa_inggris + $item->penjaskes + $item->sejarah + $item->kwu + $item->karya_ilmiah + $item->tahfidz;

                return number_format($value / 16, 2) ;
            }elseif ($item->jenjang == 'XI' && $item->jurusan == 'IPA') {
                $value = $item->al_quran_hadits + $item->akidah_akhlak + $item->fikih + $item->sejarah_kebudayaan_islam + $item->bahasa_arab + $item->pendidikan_pancasila + $item->bahasa_indonesia + $item->matematika + $item->bahasa_inggris + $item->penjaskes + $item->sejarah + $item->kwu + $item->karya_ilmiah + $item->tahfidz + $item->matematika_c + $item->biologi_c + $item->fisika_c + $item->kimia_c + $item->geografi_c + $item->informatika_c + $item->pendalaman_riset_c + $item->pendalaman_fisika_c;

                return number_format($value / 22, 2) ;
            }elseif ($item->jenjang == 'XI' && $item->jurusan == 'IPS') {
                $value = $item->al_quran_hadits + $item->akidah_akhlak + $item->fikih + $item->sejarah_kebudayaan_islam + $item->bahasa_arab + $item->pendidikan_pancasila + $item->bahasa_indonesia + $item->matematika + $item->ipa + $item->ips + $item->bahasa_inggris + $item->penjaskes + $item->sejarah + $item->kwu + $item->karya_ilmiah + $item->tahfidz + $item->matematika_c + $item->biologi_c + $item->fisika_c + $item->kimia_c + $item->informatika_c + $item->pendalaman_riset_c + $item->pendalaman_sosiologi_c;

                return number_format($value / 22, 2) ;
            }elseif ($item->jenjang == 'XII' && $item->jurusan == 'IPA') {
                $value = $item->al_quran_hadits + $item->akidah_akhlak + $item->fikih + $item->sejarah_kebudayaan_islam + $item->bahasa_arab + $item->pendidikan_pancasila + $item->bahasa_indonesia + $item->matematika + $item->ipa + $item->ips + $item->bahasa_inggris + $item->penjaskes + $item->sejarah + $item->kwu + $item->karya_ilmiah + $item->tahfidz + $item->matematika_c + $item->biologi_c + $item->fisika_c + $item->kimia_c + $item->sosiologi_c + $item->informatika_c + $item->pendalaman_riset_c + $item->pendalaman_biologi_c;

                return number_format($value / 22, 2) ;
            }elseif ($item->jenjang == 'XII' && $item->jurusan == 'IPS') {
                $value = $item->al_quran_hadits + $item->akidah_akhlak + $item->fikih + $item->sejarah_kebudayaan_islam + $item->bahasa_arab + $item->pendidikan_pancasila + $item->bahasa_indonesia + $item->matematika + $item->ipa + $item->ips + $item->bahasa_inggris + $item->penjaskes + $item->sejarah + $item->kwu + $item->karya_ilmiah + $item->tahfidz + $item->matematika_c + $item->biologi_c + $item->fisika_c + $item->kimia_c + $item->geografi_c + $item->informatika_c + $item->pendalaman_riset_c + $item->pendalaman_fisika_c;

                return number_format($value / 22, 2) ;
            }
        }else {
            return '-';
        }
    }
}
