<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OrangTua;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->role == 'Admin') {
            $items = Siswa::latest()->paginate(6);
            $items2 = OrangTua::latest()->paginate(6);
            $siswa = Siswa::count();
            $orang_tua = OrangTua::count();

            return view('pages.dashboard', compact('items', 'items2', 'siswa', 'orang_tua'));
        }elseif (Auth::user()->role == 'Siswa') {
            $item = Siswa::where('user_id', Auth::user()->id)->first();

            return view('pages.dashboard-siswa', compact('item'));
        }elseif (Auth::user()->role == 'Orang Tua') {
            $items = Siswa::where('orang_tua_id', Auth::user()->orang_tua->id)->get();

            return view('pages.dashboard-orang-tua', compact('items'));
        }
    }
}
