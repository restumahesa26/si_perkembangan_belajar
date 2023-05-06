<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PerkembanganController extends Controller
{
    public function index()
    {
        $items = Siswa::latest()->get();

        return view('pages.admin.perkembangan.index', compact('items'));
    }
}
