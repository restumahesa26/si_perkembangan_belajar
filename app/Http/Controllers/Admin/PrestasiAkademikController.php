<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PrestasiAkademik;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PrestasiAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = PrestasiAkademik::latest('created_at')->get();
        $siswas = Siswa::all();

        return view('pages.admin.prestasi-akademik.index', compact('items', 'siswas'));
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
            'prestasi' => ['required', 'string', 'max:255'],
            'tingkat' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'sertifikat' => ['nullable', 'string'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $prestasi_akademik = new PrestasiAkademik();
        $prestasi_akademik->nisn = $request->nisn;
        $prestasi_akademik->prestasi = $request->prestasi;
        $prestasi_akademik->deskripsi = $request->deskripsi;
        $prestasi_akademik->sertifikat = $request->sertifikat;
        $prestasi_akademik->tingkat = $request->tingkat;
        $prestasi_akademik->save();

        Alert::toast('Berhasil Menambah Data Prestasi Akademik', 'success')->position('top');
        return redirect()->route('prestasi-akademik.index');
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
        $item = PrestasiAkademik::findOrFail($id);
        $siswas = Siswa::all();

        return view('pages.admin.prestasi-akademik.edit', compact('item', 'siswas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'prestasi' => ['required', 'string', 'max:255'],
            'tingkat' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'sertifikat' => ['nullable', 'string'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = PrestasiAkademik::findOrFail($id);

        $item->prestasi = $request->prestasi;
        $item->deskripsi = $request->deskripsi;
        $item->sertifikat = $request->sertifikat;
        $item->tingkat = $request->tingkat;
        $item->save();

        Alert::toast('Berhasil Mengubah Data Prestasi Akademik', 'success')->position('top');
        return redirect()->route('prestasi-akademik.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = PrestasiAkademik::findOrFail($id);

        $item->delete();

        Alert::toast('Berhasil Menghapus Data Prestasi Akademik', 'success')->position('top');
        return redirect()->route('prestasi-akademik.index');
    }
}
