<?php

namespace App\Exports;

use App\Models\OrangTua;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DataOrangTuaExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $items = OrangTua::orderBy('nama_ayah', 'ASC')->get();

        return view('pages.admin.laporan.excel-data-orang-tua', compact('items'));
    }
}
