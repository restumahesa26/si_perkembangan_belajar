<?php

namespace App\Exports;

use App\Models\Siswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DataSiswaExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $items = Siswa::join('users', 'users.id', 'siswa.user_id')->orderBy('users.nama', 'ASC')->get();

        return view('pages.admin.laporan.excel-data-siswa', compact('items'));
    }
}
