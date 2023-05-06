<?php

namespace App\Http\Controllers\OrangTua;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerkembanganController extends Controller
{
    public function index()
    {
        $items = Siswa::where('orang_tua_id', Auth::user()->orang_tua->id)->get();

        return view('pages.orang-tua.perkembangan.index', compact('items'));
    }

    public function rekapan($nisn)
    {
        $item = Siswa::findOrFail($nisn);
        $items = Siswa::where('orang_tua_id', Auth::user()->orang_tua->id)->get();

        if (Auth::user()->orang_tua->id == $item->orang_tua_id) {
            return view('pages.orang-tua.rekapan.index', compact('item', 'items'));
        }else {
            return redirect()->back();
        }
    }

    public function cetak(string $nisn)
    {
        $item = Siswa::findOrFail($nisn);

        return view('pages.orang-tua.rekapan.pdf', compact('item'));
    }
}
