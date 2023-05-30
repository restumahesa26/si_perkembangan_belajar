<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiRapor extends Model
{
    use HasFactory;

    public $table = 'nilai_rapor';

    public $fillable = [
        'nisn', 'kelas', 'jenjang', 'semester', 'tahun_ajaran', 'al_quran_hadits', 'akidah_akhlak', 'fikih', 'sejarah_kebudayaan_islam', 'bahasa_arab', 'pendidikan_pancasila', 'bahasa_indonesia', 'matematika', 'ipa', 'ips', 'bahasa_inggris', 'penjaskes', 'sejarah', 'kwu', 'karya_ilmiah', 'tahfidz', 'matematika_c', 'biologi_c', 'fisika_c', 'kimia_c', 'geografi_c', 'informatika_c', 'pendalaman_riset_c', 'pendalaman_fisika_c', 'kimia_c_c', 'sosiologi_c','pendalaman_sosiologi_c', 'pendalaman_biologi_c',
    ];

    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'nisn', 'nisn');
    }

    public function getRataNilai($id)
    {
        $item = NilaiRapor::where('id', $id)->first();

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
