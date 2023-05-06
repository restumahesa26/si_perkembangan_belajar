@extends('layouts.admin')

@section('title', 'Perkembangan Siswa')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Data Nilai Rapor Siswa</h5>
                <div class="table-responsive">
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr class="text-center">
                                <th rowspan="2" style="vertical-align : middle; text-align:center;">Nama</th>
                                <th colspan="6">Rata Rata Nilai Per Kelas</th>
                            </tr>
                            <tr class="text-center">
                                <th>Kelas X<br>Semester 1</th>
                                <th>Kelas X<br>Semester 2</th>
                                <th>Kelas XI<br>Semester 1</th>
                                <th>Kelas XI<br>Semester 2</th>
                                <th>Kelas XII<br>Semester 1</th>
                                <th>Kelas XII<br>Semester 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr class="text-center">
                                <td>{{ $item->user->nama }}</td>
                                <td>{{ $item->getRataNilai($item->nisn, 'X', '1') }}</td>
                                <td>{{ $item->getRataNilai($item->nisn, 'X', '2') }}</td>
                                <td>{{ $item->getRataNilai($item->nisn, 'XI', '1') }}</td>
                                <td>{{ $item->getRataNilai($item->nisn, 'XI', '2') }}</td>
                                <td>{{ $item->getRataNilai($item->nisn, 'XII', '1') }}</td>
                                <td>{{ $item->getRataNilai($item->nisn, 'XII', '2') }}</td>
                            </tr>
                        </div>
                            @empty
                            <tr class="text-center">
                                <td colspan="7">-- Data Kosong --</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
