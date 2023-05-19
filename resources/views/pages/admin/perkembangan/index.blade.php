@extends('layouts.admin')

@section('title', 'Perkembangan Siswa')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title mb-3">Data Nilai Rapor Siswa</h5>
                <div class="table-responsive">
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr class="text-center">
                                <th rowspan="2" style="vertical-align : middle; text-align:center;">Nama</th>
                                <th colspan="6" style="vertical-align : middle; text-align:center;">Rata Rata Nilai Per Kelas</th>
                            </tr>
                            <tr class="text-center">
                                <th style="vertical-align : middle; text-align:center;">Kelas X<br>Semester 1</th>
                                <th style="vertical-align : middle; text-align:center;">Kelas X<br>Semester 2</th>
                                <th style="vertical-align : middle; text-align:center;">Kelas XI<br>Semester 1</th>
                                <th style="vertical-align : middle; text-align:center;">Kelas XI<br>Semester 2</th>
                                <th style="vertical-align : middle; text-align:center;">Kelas XII<br>Semester 1</th>
                                <th style="vertical-align : middle; text-align:center;">Kelas XII<br>Semester 2</th>
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

@push('addon-style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush

@push('addon-script')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table').DataTable({
                "orderable" : false
            });
        });
    </script>
@endpush
