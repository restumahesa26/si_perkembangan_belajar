<?php

namespace App\Helper;

use App\Models\NilaiRapor;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Helper
{
    public static function getNilaiRapor($nisn)
    {
        $items = NilaiRapor::where('nisn', $nisn)->orderByRaw("FIELD(jenjang , 'X', 'XI', 'XII') ASC")->orderBy('semester', 'ASC')->get();

        return $items;
    }

    public static function checkSiswa()
    {
        $item = Siswa::where('orang_tua_id', Auth::user()->orang_tua->id)->first();

        if ($item) {
            return true;
        } else {
            return false;
        }
    }

    public static function getSiswa()
    {
        $item = Siswa::where('orang_tua_id', Auth::user()->orang_tua->id)->first();

        return $item;
    }

    public static function getNilaiRaporPelajaran($nisn, $pelajaran)
    {
        $items = NilaiRapor::where('nisn', $nisn)->get();
        $count = NilaiRapor::where('nisn', $nisn)->count();

        $nilai = 0;

        if ($pelajaran == 'Matematika') {
            foreach ($items as $value) {
                $nilai = $nilai + $value->matematika;
            }
        }elseif ($pelajaran == 'Keislaman') {
            foreach ($items as $value) {
                $nilai = $nilai + $value->keislaman;
            }
        }elseif ($pelajaran == 'Bahasa Arab') {
            foreach ($items as $value) {
                $nilai = $nilai + $value->bahasa_arab;
            }
        }elseif ($pelajaran == 'Bahasa Inggris') {
            foreach ($items as $value) {
                $nilai = $nilai + $value->bahasa_inggris;
            }
        }elseif ($pelajaran == 'IPA') {
            foreach ($items as $value) {
                $nilai = $nilai + $value->ipa;
            }
        }elseif ($pelajaran == 'IPS') {
            foreach ($items as $value) {
                $nilai = $nilai + $value->ips;
            }
        }

        return $nilai / $count;
    }
}
