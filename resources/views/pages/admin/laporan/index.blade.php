@extends('layouts.admin')

@section('title', 'Laporan')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Nilai Per Siswa</h5>
                <form id="form-nilai-siswa" method="get" target="_blank">
                    <select name="siswa" id="siswa" class="siswa w-100" required>
                        <option value=""></option>
                        @foreach ($items as $siswa)
                            <option value="{{ $siswa->nisn }}" @if (old('siswa', $siswa->siswa) == $siswa->nisn)
                                selected
                            @endif>{{ $siswa->user->nama }} - {{ $siswa->nisn }}</option>
                        @endforeach
                    </select>
                    <button type="button" class="btn btn-success mt-2" id="nilai-siswa-excel">Cetak Excel</button>
                </form>
            </div>
        </div>
        <div class="card w-100 mt-3">
            <div class="card-body">
                <h5 class="card-title">Nilai Semua Siswa</h5>
                <p style="margin-bottom: 14px">Semua Nilai Siswa</p>
                <a href="{{ route('laporan.cetak-semua-excel') }}" class="btn btn-success" target="_blank">Cetak Excel</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Nilai Per Angkatan</h5>
                <form method="get" target="_blank" action="{{ route('laporan.cetak-angkatan-excel') }}">
                    <div class="form-group">
                        <select name="angkatan" id="angkatan" class="angkatan w-100" required>
                            <option value=""></option>
                            @foreach ($angkatan as $item)
                                <option value="{{ $item }}" @if (old('angkatan') == $item)
                                    selected
                                @endif>{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success mt-2" id="nilai-siswa-excel">Cetak Excel</button>
                </form>
            </div>
        </div>
        <div class="card w-100 mt-3">
            <div class="card-body">
                <h5 class="card-title">Data Orang Tua</h5>
                <p style="margin-bottom: 14px">Semua data orang tua</p>
                <a href="{{ route('laporan.cetak-data-orang-tua') }}" class="btn btn-danger me-2" target="_blank">Cetak PDF</a>
                <a href="{{ route('laporan.cetak-data-orang-tua-excel') }}" class="btn btn-success" target="_blank">Cetak Excel</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Data Siswa</h5>
                <p style="margin-bottom: 14px">Semua data siswa</p>
                <a href="{{ route('laporan.cetak-data-siswa') }}" class="btn btn-danger me-2" target="_blank">Cetak PDF</a>
                <a href="{{ route('laporan.cetak-data-siswa-excel') }}" class="btn btn-success" target="_blank">Cetak Excel</a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.siswa').select2({
                placeholder: "-- Pilih Siswa --",
                allowClear: true,
                theme: "classic",
            });
            $('.angkatan').select2({
                placeholder: "-- Pilih Angkatan --",
                allowClear: true,
                theme: "classic",
            });
        });
    </script>
    <script>
        $("#nilai-siswa-excel").on("click", function(e) {
            e.preventDefault();
            $('#form-nilai-siswa').attr('action', "{{ route('laporan.cetak-siswa-excel') }}").submit();
        });
    </script>
@endpush
