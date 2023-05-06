<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrangTua;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rules;

class OrangTuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = OrangTua::withCount('siswa')->latest()->get();

        return view('pages.admin.data-orang-tua.index', compact('items'));
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
            'nama' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nik_ayah' => ['required', 'string', 'max:255'],
            'nik_ibu' => ['required', 'string', 'max:255'],
            'nik_wali' => ['nullable', 'string', 'max:255'],
            'nama_ayah' => ['required', 'string', 'max:255'],
            'nama_ibu' => ['required', 'string', 'max:255'],
            'nama_wali' => ['nullable', 'string', 'max:255'],
            'status_ayah' => ['required', 'string', 'max:255'],
            'status_ibu' => ['required', 'string', 'max:255'],
            'status_wali' => ['nullable', 'string', 'max:255'],
            'pendidikan_ayah' => ['required', 'string', 'max:255'],
            'pendidikan_ibu' => ['required', 'string', 'max:255'],
            'pendidikan_wali' => ['nullable', 'string', 'max:255'],
            'pekerjaan_ayah' => ['required', 'string', 'max:255'],
            'pekerjaan_ibu' => ['required', 'string', 'max:255'],
            'pekerjaan_wali' => ['nullable', 'string', 'max:255'],
            'no_hp_ayah' => ['required', 'string', 'max:255'],
            'no_hp_ibu' => ['required', 'string', 'max:255'],
            'no_hp_wali' => ['nullable', 'string', 'max:255'],
            'penghasilan' => ['nullable', 'string', 'max:255'],
            'kepemilikan_rumah' => ['nullable', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Siswa'
        ]);

        OrangTua::create([
            'user_id' => $user->id,
            'nik_ayah' => $request->nik_ayah,
            'nik_ibu' => $request->nik_ibu,
            'nik_wali' => $request->nik_wali,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'nama_wali' => $request->nama_wali,
            'status_ayah' => $request->status_ayah,
            'status_ibu' => $request->status_ibu,
            'status_wali' => $request->status_wali,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'pendidikan_wali' => $request->pendidikan_wali,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'no_hp_ayah' => $request->no_hp_ayah,
            'no_hp_ibu' => $request->no_hp_ibu,
            'no_hp_wali' => $request->no_hp_wali,
            'penghasilan' => $request->penghasilan,
            'kepemilikan_rumah' => $request->kepemilikan_rumah,
        ]);

        Alert::toast('Berhasil Menambah Data Orang Tua', 'success')->position('top');
        return redirect()->route('data-orang-tua.index');
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
        $item = OrangTua::findOrFail($id);

        return view('pages.admin.data-orang-tua.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => ['required', 'string', 'max:255'],
            'nik_ayah' => ['required', 'string', 'max:255'],
            'nik_ibu' => ['required', 'string', 'max:255'],
            'nik_wali' => ['nullable', 'string', 'max:255'],
            'nama_ayah' => ['required', 'string', 'max:255'],
            'nama_ibu' => ['required', 'string', 'max:255'],
            'nama_wali' => ['nullable', 'string', 'max:255'],
            'status_ayah' => ['required', 'string', 'max:255'],
            'status_ibu' => ['required', 'string', 'max:255'],
            'status_wali' => ['nullable', 'string', 'max:255'],
            'pendidikan_ayah' => ['required', 'string', 'max:255'],
            'pendidikan_ibu' => ['required', 'string', 'max:255'],
            'pendidikan_wali' => ['nullable', 'string', 'max:255'],
            'pekerjaan_ayah' => ['required', 'string', 'max:255'],
            'pekerjaan_ibu' => ['required', 'string', 'max:255'],
            'pekerjaan_wali' => ['nullable', 'string', 'max:255'],
            'no_hp_ayah' => ['required', 'string', 'max:255'],
            'no_hp_ibu' => ['required', 'string', 'max:255'],
            'no_hp_wali' => ['nullable', 'string', 'max:255'],
            'penghasilan' => ['nullable', 'string', 'max:255'],
            'kepemilikan_rumah' => ['nullable', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = OrangTua::findOrFail($id);

        if ($item->user->email != $request->email) {
            $validator2 = Validator::make($request->all(), [
                'email' => ['required', 'string', 'max:255', 'email', 'unique:users'],
            ]);

            if ($validator2->fails()) {
                Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
                return redirect()->back()->withErrors($validator2)->withInput();
            }
        }

        if ($item->user->username != $request->username) {
            $validator4 = Validator::make($request->all(), [
                'username' => ['required', 'string', 'max:255', 'unique:users'],
            ]);

            if ($validator4->fails()) {
                Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
                return redirect()->back()->withErrors($validator4)->withInput();
            }
        }

        if ($request->password) {
            $validator3 = Validator::make($request->all(), [
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            if ($validator3->fails()) {
                Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
                return redirect()->back()->withErrors($validator3)->withInput();
            }
        }

        $user = User::findOrFail($item->user_id);
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        $item->update([
            'nik_ayah' => $request->nik_ayah,
            'nik_ibu' => $request->nik_ibu,
            'nik_wali' => $request->nik_wali,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'nama_wali' => $request->nama_wali,
            'status_ayah' => $request->status_ayah,
            'status_ibu' => $request->status_ibu,
            'status_wali' => $request->status_wali,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'pendidikan_wali' => $request->pendidikan_wali,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'no_hp_ayah' => $request->no_hp_ayah,
            'no_hp_ibu' => $request->no_hp_ibu,
            'no_hp_wali' => $request->no_hp_wali,
            'penghasilan' => $request->penghasilan,
            'kepemilikan_rumah' => $request->kepemilikan_rumah,
        ]);

        Alert::toast('Berhasil Mengubah Data Orang Tua', 'success')->position('top');
        return redirect()->route('data-orang-tua.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = OrangTua::findOrFail($id);
        $user_id = $item->user_id;

        $item->delete();

        $item2 = User::findOrFail($user_id);

        $item2->delete();

        Alert::toast('Berhasil Menghapus Data Orang Tua', 'success')->position('top');
        return redirect()->route('data-orang-tua.index');
    }
}
