<?php

namespace App\Http\Controllers\Admin;

use App\Exports\DataOrangTuaExport;
use App\Exports\DataSiswaExport;
use App\Exports\NilaiAngkatanExport;
use App\Exports\NilaiPerJurusanExport;
use App\Exports\NilaiPerSiswaExport;
use App\Exports\NilaiSemuaSiswaExport;
use App\Http\Controllers\Controller;
use App\Models\OrangTua;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function index()
    {
        $items = Siswa::join('users', 'users.id', 'siswa.user_id')->orderBy('users.nama', 'ASC')->get();
        $angkatan = Siswa::distinct('angkatan')->pluck('angkatan');

        return view('pages.admin.laporan.index', compact('items', 'angkatan'));
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

    public function cetak_siswa_excel(Request $request)
    {
        return Excel::download(new NilaiPerSiswaExport($request->siswa), 'nilai-siswa.xlsx');
    }

    public function cetak_angkatan_excel(Request $request)
    {
        return Excel::download(new NilaiAngkatanExport($request->angkatan), 'nilai-siswa.xlsx');
    }

    public function cetak_semua_excel()
    {
        return Excel::download(new NilaiSemuaSiswaExport(), 'nilai-siswa.xlsx');
    }

    public function cetak_data_siswa_excel()
    {
        return Excel::download(new DataSiswaExport(), 'data-siswa.xlsx');
    }

    public function cetak_data_orang_tua_excel()
    {
        return Excel::download(new DataOrangTuaExport(), 'data-orang-tua.xlsx');
    }
}
