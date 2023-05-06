<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrangTua;
use App\Models\Siswa;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $items = Siswa::join('users', 'users.id', 'siswa.user_id')->orderBy('users.nama', 'ASC')->get();

        return view('pages.admin.laporan.index', compact('items'));
    }

    public function cetak_siswa(Request $request)
    {
        $item = Siswa::findOrFail($request->siswa);

        return view('pages.admin.laporan.pdf-siswa', compact('item'));
    }

    public function cetak_semua()
    {
        $items = Siswa::join('users', 'users.id', 'siswa.user_id')->orderBy('users.nama', 'ASC')->get();

        return view('pages.admin.laporan.pdf-semua', compact('items'));
    }

    public function cetak_data_siswa()
    {
        $items = Siswa::join('users', 'users.id', 'siswa.user_id')->orderBy('users.nama', 'ASC')->get();

        return view('pages.admin.laporan.pdf-data-siswa', compact('items'));
    }

    public function cetak_data_orang_tua()
    {
        $items = OrangTua::latest()->get();

        return view('pages.admin.laporan.pdf-data-orang-tua', compact('items'));
    }
}
