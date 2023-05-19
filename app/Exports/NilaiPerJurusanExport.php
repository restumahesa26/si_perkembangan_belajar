<?php

namespace App\Exports;

use App\Models\Siswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class NilaiPerJurusanExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    public $jurusan;

    public function __construct($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function view(): View
    {
        $items = Siswa::where('jurusan', $this->jurusan)->get();

        return view('pages.admin.laporan.excel-jurusan', compact('items'));
    }
}
