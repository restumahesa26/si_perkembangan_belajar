<?php

namespace App\Imports;

use App\Models\OrangTua;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class OrangTuaImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        $user = User::create([
            'nama' => $row[1],
            'username' => $row[2],
            'email' => $row[3],
            'password' => Hash::make('username'),
            'role' => 'Orang Tua'
        ]);

        return new OrangTua([
            'user_id' => $user->id,
            'nik_ayah' => $row[4],
            'nama_ayah' => $row[5],
            'status_ayah' => $row[6],
            'pendidikan_ayah' => $row[7],
            'pekerjaan_ayah' => $row[8],
            'no_hp_ayah' => $row[9],
            'nik_ibu' => $row[10],
            'nama_ibu' => $row[11],
            'status_ibu' => $row[12],
            'pendidikan_ibu' => $row[13],
            'pekerjaan_ibu' => $row[14],
            'no_hp_ibu' => $row[15],
            'nik_wali' => $row[16],
            'nama_wali' => $row[17],
            'status_wali' => $row[18],
            'pendidikan_wali' => $row[19],
            'pekerjaan_wali' => $row[20],
            'no_hp_wali' => $row[21],
            'penghasilan' => $row[22],
            'kepemilikan_rumah' => $row[23],
        ]);
    }
}
