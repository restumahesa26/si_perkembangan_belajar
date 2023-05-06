<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    use HasFactory;

    public $table = 'orang_tua';

    public $fillable = [
        'user_id', 'nik_ayah', 'nik_ibu', 'nik_wali', 'nama_ayah', 'nama_ibu', 'nama_wali', 'status_ayah', 'status_ibu', 'status_wali', 'pendidikan_ayah', 'pendidikan_ibu', 'pendidikan_wali', 'pekerjaan_ayah', 'pekerjaan_ibu', 'pekerjaan_wali', 'no_hp_ayah', 'no_hp_ibu', 'no_hp_wali', 'penghasilan', 'kepemilikan_rumah'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'orang_tua_id', 'id');
    }
}
