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
            'kelas' => ['required', 'string', 'max:255'],
            'semester' => ['required', 'string', 'max:255'],
            'tahun_ajaran' => ['required', 'string', 'max:255'],
            'matematika' => ['required', 'numeric'],
            'keislaman' => ['required', 'numeric'],
            'bahasa_arab' => ['required', 'numeric'],
            'bahasa_inggris' => ['required', 'numeric'],
            'ipa' => ['nullable', 'numeric'],
            'ips' => ['nullable', 'numeric'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        NilaiRapor::create([
            'nisn' => Auth::user()->siswa->nisn,
            'jenjang' => $request->jenjang,
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'tahun_ajaran' => $request->tahun_ajaran,
            'matematika' => $request->matematika,
            'keislaman' => $request->keislaman,
            'bahasa_arab' => $request->bahasa_arab,
            'bahasa_inggris' => $request->bahasa_inggris,
            'ipa' => $request->ipa,
            'ips' => $request->ips,
        ]);

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
            'kelas' => ['required', 'string', 'max:255'],
            'semester' => ['required', 'string', 'max:255'],
            'tahun_ajaran' => ['required', 'string', 'max:255'],
            'matematika' => ['required', 'numeric'],
            'keislaman' => ['required', 'numeric'],
            'bahasa_arab' => ['required', 'numeric'],
            'bahasa_inggris' => ['required', 'numeric'],
            'ipa' => ['nullable', 'numeric'],
            'ips' => ['nullable', 'numeric'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = NilaiRapor::findOrFail($id);

        $item->update([
            'jenjang' => $request->jenjang,
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'tahun_ajaran' => $request->tahun_ajaran,
            'matematika' => $request->matematika,
            'keislaman' => $request->keislaman,
            'bahasa_arab' => $request->bahasa_arab,
            'bahasa_inggris' => $request->bahasa_inggris,
            'ipa' => $request->ipa,
            'ips' => $request->ips,
        ]);

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
