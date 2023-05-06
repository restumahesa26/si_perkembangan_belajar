<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jenis_kelamin' => ['required', 'in:L,P'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date'],
            'status_keluarga' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'anak_ke' => ['required', 'numeric'],
            'no_kk' => ['required', 'numeric'],
            'no_hp' => ['required', 'numeric'],
            'sekolah_asal' => ['nullable', 'string', 'max:255'],
            'npsn' => ['nullable', 'string', 'max:255'],
            'alamat_sekolah_asal' => ['nullable', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item = Siswa::where('user_id', Auth::user()->id)->first();

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

        if ($item->nisn != $request->nisn) {
            $validator5 = Validator::make($request->all(), [
                'nisn' => ['required', 'string', 'max:255', 'unique:siswa'],
            ]);

            if ($validator5->fails()) {
                Alert::toast('Perhatikan data yang diisi', 'error')->position('top');
                return redirect()->back()->withErrors($validator5)->withInput();
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
            'nisn' => $request->nisn,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'status_keluarga' => $request->status_keluarga,
            'anak_ke' => $request->anak_ke,
            'no_kk' => $request->no_kk,
            'no_hp' => $request->no_hp,
            'sekolah_asal' => $request->sekolah_asal,
            'npsn' => $request->npsn,
            'alamat_sekolah_asal' => $request->alamat_sekolah_asal,
        ]);

        Alert::toast('Berhasil Update Profile', 'success')->position('top');
        return redirect()->route('profile.edit');
    }
}
