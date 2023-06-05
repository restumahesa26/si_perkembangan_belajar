<?php

namespace App\Exports;

use App\Models\Siswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class NilaiAngkatanExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    public $angkatan;

    public function __construct($angkatan)
    {
        $this->angkatan = $angkatan;
    }

    public function view(): View
    {
        $items = Siswa::where('angkatan', $this->angkatan)->get();

        return view('pages.admin.laporan.excel-angkatan', compact('items'));
    }
}
