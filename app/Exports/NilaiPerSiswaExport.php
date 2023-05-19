<?php

namespace App\Exports;

use App\Models\Siswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class NilaiPerSiswaExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    public $nisn;

    public function __construct($nisn)
    {
        $this->nisn = $nisn;
    }

    public function view(): View
    {
        $item = Siswa::where('nisn', $this->nisn)->first();

        return view('pages.admin.laporan.excel-siswa', compact('item'));
    }
}
