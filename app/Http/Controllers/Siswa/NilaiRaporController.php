<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\NilaiRapor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class NilaiRaporController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = NilaiRapor::where('nisn', Auth::user()->siswa->nisn)->orderByRaw("FIELD(jenjang , 'X', 'XI', 'XII') ASC")->orderBy('semester', 'ASC')->get();

        return view('pages.siswa.nilai-rapor.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jenjang' => ['required', 'in:X,XI,XII'],
            'jenjang' => ['nullable', 'string'],
            'kelas' => ['nullable', 'string', 'max:255'],
            'semester' => ['required', 'string', 'max:255'],
            'tahun_ajaran' => ['required', 'string', 'max:255'],
            'al_quran_hadits' => ['required', 'numeric'],
            'akidah_akhlak' => ['required', 'numeric'],
            'fikih' => ['required', 'numeric'],
            'sejarah_kebudayaan_islam' => ['required', 'numeric'],
            'bahasa_arab' => ['required', 'numeric'],
            'pendidikan_pancasila' => ['required', 'numeric'],
            'matematika' => ['required', 'numeric'],
            'bahasa_inggris' => ['required', 'numeric'],
            'penjaskes' => ['required', 'numeric'],
            'sejarah' => ['required', 'numeric'],
            'kwu' => ['required', 'numeric'],
            'karya_ilmiah' => ['required', 'numeric'],
            'tahfidz' => ['required', 'numeric'],
            'ipa' => ['nullable', 'numeric'],
            'ips' => ['nullable', 'numeric'],
            'matematika_c' => ['nullable', 'numeric'],
            'biologi_c' => ['nullable', 'numeric'],
            'fisika_c' => ['nullable', 'numeric'],
            'kimia_c' => ['nullable', 'numeric'],
            'geografi_c' => ['nullable', 'numeric'],
            'informatika_c' => ['nullable', 'numeric'],
            'pendalaman_riset_c' => ['nullable', 'numeric'],
            'pendalaman_fisika_c' => ['nullable', 'numeric'],
            'pendalaman_sosiologi_c' => ['nullable', 'numeric'],
            'pendalaman_biologi_c' => ['nullable', 'numeric'],
            'kimia_c_c' => ['nullable', 'numeric'],
            'sosiologi_c' => ['nullable', 'numeric'],
            'geografi_c_c' => ['nullable', 'numeric'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = new NilaiRapor();
        $item->nisn = Auth::user()->siswa->nisn;
        $item->jenjang = $request->jenjang;
        $item->jurusan = $request->jurusan;
        $item->kelas = $request->kelas;
        $item->semester = $request->semester;
        $item->tahun_ajaran = $request->tahun_ajaran;
        $item->al_quran_hadits = $request->al_quran_hadits;
        $item->akidah_akhlak = $request->akidah_akhlak;
        $item->fikih = $request->fikih;
        $item->sejarah_kebudayaan_islam = $request->sejarah_kebudayaan_islam;
        $item->bahasa_arab = $request->bahasa_arab;
        $item->pendidikan_pancasila = $request->pendidikan_pancasila;
        $item->bahasa_indonesia = $request->bahasa_indonesia;
        $item->matematika = $request->matematika;
        if ($request->jenjang == 'X') {
            $item->ipa = $request->ipa;
            $item->ips = $request->ips;
        }
        $item->bahasa_inggris = $request->bahasa_inggris;
        $item->penjaskes = $request->penjaskes;
        $item->sejarah = $request->sejarah;
        $item->kwu = $request->kwu;
        $item->karya_ilmiah = $request->karya_ilmiah;
        $item->tahfidz = $request->tahfidz;
        $item->matematika_c = $request->matematika_c;
        $item->biologi_c = $request->biologi_c;
        $item->fisika_c = $request->fisika_c;
        $item->kimia_c = $request->kimia_c;
        if ($request->jenjang == 'XI' && $request->jurusan == 'IPA') {
            $item->geografi_c = $request->geografi_c;
            $item->pendalaman_fisika_c = $request->pendalaman_fisika_c;
            $item->pendalaman_sosiologi_c = NULL;
            $item->pendalaman_biologi_c = NULL;
            $item->kimia_c_c = NULL;
            $item->sosiologi_c = NULL;
        }
        if ($request->jenjang == 'XI' && $request->jurusan == 'IPS') {
            $item->kimia_c_c = $request->kimia_c_c;
            $item->pendalaman_sosiologi_c = $request->pendalaman_sosiologi_c;
            $item->pendalaman_fisika_c = NULL;
            $item->pendalaman_biologi_c = NULL;
            $item->geografi_c = NULL;
            $item->sosiologi_c = NULL;
        }
        if ($request->jenjang == 'XII' && $request->jurusan == 'IPA') {
            $item->sosiologi_c = $request->sosiologi_c;
            $item->pendalaman_biologi_c = $request->pendalaman_biologi_c;
            $item->pendalaman_fisika_c = NULL;
            $item->pendalaman_sosiologi_c = NULL;
            $item->kimia_c_c = NULL;
            $item->geografi_c = NULL;
        }
        if ($request->jenjang == 'XII' && $request->jurusan == 'IPS') {
            $item->geografi_c = $request->geografi_c;
            $item->pendalaman_fisika_c = $request->pendalaman_fisika_c;
            $item->pendalaman_sosiologi_c = NULL;
            $item->pendalaman_biologi_c = NULL;
            $item->kimia_c_c = NULL;
            $item->sosiologi_c = NULL;
        }
        $item->informatika_c = $request->informatika_c;
        $item->pendalaman_riset_c = $request->pendalaman_riset_c;
        $item->save();

        Alert::toast('Berhasil Menambah Nilai Rapor', 'success')->position('top');
        return redirect()->route('data-nilai-rapor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = NilaiRapor::findOrFail($id);

        return view('pages.siswa.nilai-rapor.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'jenjang' => ['required', 'in:X,XI,XII'],
            'jenjang' => ['nullable', 'string'],
            'kelas' => ['nullable', 'string', 'max:255'],
            'semester' => ['required', 'string', 'max:255'],
            'tahun_ajaran' => ['required', 'string', 'max:255'],
            'al_quran_hadits' => ['required', 'numeric'],
            'akidah_akhlak' => ['required', 'numeric'],
            'fikih' => ['required', 'numeric'],
            'sejarah_kebudayaan_islam' => ['required', 'numeric'],
            'bahasa_arab' => ['required', 'numeric'],
            'pendidikan_pancasila' => ['required', 'numeric'],
            'matematika' => ['required', 'numeric'],
            'bahasa_inggris' => ['required', 'numeric'],
            'penjaskes' => ['required', 'numeric'],
            'sejarah' => ['required', 'numeric'],
            'kwu' => ['required', 'numeric'],
            'karya_ilmiah' => ['required', 'numeric'],
            'tahfidz' => ['required', 'numeric'],
            'ipa' => ['nullable', 'numeric'],
            'ips' => ['nullable', 'numeric'],
            'matematika_c' => ['nullable', 'numeric'],
            'biologi_c' => ['nullable', 'numeric'],
            'fisika_c' => ['nullable', 'numeric'],
            'kimia_c' => ['nullable', 'numeric'],
            'geografi_c' => ['nullable', 'numeric'],
            'informatika_c' => ['nullable', 'numeric'],
            'pendalaman_riset_c' => ['nullable', 'numeric'],
            'pendalaman_fisika_c' => ['nullable', 'numeric'],
            'pendalaman_sosiologi_c' => ['nullable', 'numeric'],
            'pendalaman_biologi_c' => ['nullable', 'numeric'],
            'kimia_c_c' => ['nullable', 'numeric'],
            'sosiologi_c' => ['nullable', 'numeric'],
            'geografi_c_c' => ['nullable', 'numeric'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = NilaiRapor::findOrFail($id);

        $item->nisn = Auth::user()->siswa->nisn;
        $item->jenjang = $request->jenjang;
        $item->jurusan = $request->jurusan;
        $item->kelas = $request->kelas;
        $item->semester = $request->semester;
        $item->tahun_ajaran = $request->tahun_ajaran;
        $item->al_quran_hadits = $request->al_quran_hadits;
        $item->akidah_akhlak = $request->akidah_akhlak;
        $item->fikih = $request->fikih;
        $item->sejarah_kebudayaan_islam = $request->sejarah_kebudayaan_islam;
        $item->bahasa_arab = $request->bahasa_arab;
        $item->pendidikan_pancasila = $request->pendidikan_pancasila;
        $item->bahasa_indonesia = $request->bahasa_indonesia;
        $item->matematika = $request->matematika;
        if ($request->jenjang == 'X') {
            $item->ipa = $request->ipa;
            $item->ips = $request->ips;
        }
        $item->bahasa_inggris = $request->bahasa_inggris;
        $item->penjaskes = $request->penjaskes;
        $item->sejarah = $request->sejarah;
        $item->kwu = $request->kwu;
        $item->karya_ilmiah = $request->karya_ilmiah;
        $item->tahfidz = $request->tahfidz;
        $item->matematika_c = $request->matematika_c;
        $item->biologi_c = $request->biologi_c;
        $item->fisika_c = $request->fisika_c;
        $item->kimia_c = $request->kimia_c;
        if ($request->jenjang == 'XI' && $request->jurusan == 'IPA') {
            $item->geografi_c = $request->geografi_c;
            $item->pendalaman_fisika_c = $request->pendalaman_fisika_c;
            $item->pendalaman_sosiologi_c = NULL;
            $item->pendalaman_biologi_c = NULL;
            $item->kimia_c_c = NULL;
            $item->sosiologi_c = NULL;
        }
        if ($request->jenjang == 'XI' && $request->jurusan == 'IPS') {
            $item->kimia_c_c = $request->kimia_c_c;
            $item->pendalaman_sosiologi_c = $request->pendalaman_sosiologi_c;
            $item->pendalaman_fisika_c = NULL;
            $item->pendalaman_biologi_c = NULL;
            $item->geografi_c = NULL;
            $item->sosiologi_c = NULL;
        }
        if ($request->jenjang == 'XII' && $request->jurusan == 'IPA') {
            $item->sosiologi_c = $request->sosiologi_c;
            $item->pendalaman_biologi_c = $request->pendalaman_biologi_c;
            $item->pendalaman_fisika_c = NULL;
            $item->pendalaman_sosiologi_c = NULL;
            $item->kimia_c_c = NULL;
            $item->geografi_c = NULL;
        }
        if ($request->jenjang == 'XII' && $request->jurusan == 'IPS') {
            $item->geografi_c = $request->geografi_c;
            $item->pendalaman_fisika_c = $request->pendalaman_fisika_c;
            $item->pendalaman_sosiologi_c = NULL;
            $item->pendalaman_biologi_c = NULL;
            $item->kimia_c_c = NULL;
            $item->sosiologi_c = NULL;
        }
        $item->informatika_c = $request->informatika_c;
        $item->pendalaman_riset_c = $request->pendalaman_riset_c;
        $item->save();

        Alert::toast('Berhasil Mengubah Nilai Rapor', 'success')->position('top');
        return redirect()->route('data-nilai-rapor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = NilaiRapor::findOrFail($id);

        $item->delete();

        Alert::toast('Berhasil Menghapus Nilai Rapor', 'success')->position('top');
        return redirect()->route('data-nilai-rapor.index');
    }
}
