<?php

namespace App\Http\Controllers\OrangTua;

use App\Http\Controllers\Controller;
use App\Models\OrangTua;
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

        $item = OrangTua::where('user_id', Auth::user()->id)->first();

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

        Alert::toast('Berhasil Update Profile', 'success')->position('top');
        return redirect()->route('profile.edit');
    }
}
