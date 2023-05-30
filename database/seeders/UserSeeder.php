<?php

namespace Database\Seeders;

use App\Models\OrangTua;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Admin 123',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'username' => 'admin123',
            'role' => 'Admin'
        ]);

        $orangTua = User::create([
            'nama' => 'Yusuf 123',
            'email' => 'yusuf@gmail.com',
            'password' => Hash::make('password'),
            'username' => 'yusuf123',
            'role' => 'Orang Tua'
        ]);

        $orang_tua = OrangTua::create([
            'user_id' => $orangTua->id,
            'nik_ayah' => '12345678910111213',
            'nik_ibu' => '12345678910111214',
            'nama_ayah' => 'Joko Widodo',
            'nama_ibu' => 'Iriana Jokowi',
            'status_ayah' => 'Ayah Kandung',
            'status_ibu' => 'Ibu Kandung',
            'pendidikan_ayah' => 'S2',
            'pendidikan_ibu' => 'S2',
            'pekerjaan_ayah' => 'Presiden',
            'pekerjaan_ibu' => 'Ibu Negara',
            'no_hp_ayah' => '082375790919',
            'no_hp_ibu' => '082375790918',
        ]);

        $siswa = User::create([
            'nama' => 'Yusuf 456',
            'email' => 'yusuff@gmail.com',
            'password' => Hash::make('password'),
            'username' => 'yusuf456',
            'role' => 'Siswa'
        ]);

        Siswa::create([
            'nisn' => '123456',
            'user_id' => $siswa->id,
            'orang_tua_id' => $orang_tua->id,
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Bengkulu',
            'tanggal_lahir' => '2022-12-22',
            'status_keluarga' => 'Anak Kandung',
            'anak_ke' => '1',
            'alamat' => 'Bengkulu',
            'no_kk' => '123456789010111215',
            'no_hp' => '082375790917',
        ]);
    }
}
