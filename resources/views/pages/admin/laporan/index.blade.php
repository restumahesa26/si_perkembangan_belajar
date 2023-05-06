@extends('layouts.admin')

@section('title', 'Laporan')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Nilai Per Siswa</h5>
                <form action="{{ route('laporan.cetak-siswa') }}" method="get" target="_blank">
                    <select name="siswa" id="siswa" class="siswa w-100" required>
                        <option value=""></option>
                        @foreach ($items as $siswa)
                            <option value="{{ $siswa->nisn }}" @if (old('siswa', $siswa->siswa) == $siswa->nisn)
                                selected
                            @endif>{{ $siswa->user->nama }} - {{ $siswa->nisn }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary mt-2">Cetak</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Nilai Semua Siswa</h5>
                <p style="margin-bottom: 14px">Nilai rata-rata tiap siswa</p>
                <a href="{{ route('laporan.cetak-semua') }}" class="btn btn-primary" target="_blank">Cetak</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Data Siswa</h5>
                <p style="margin-bottom: 14px">Semua data siswa</p>
                <a href="{{ route('laporan.cetak-data-siswa') }}" class="btn btn-primary" target="_blank">Cetak</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Data Orang Tua</h5>
                <p style="margin-bottom: 14px">Semua data orang tua</p>
                <a href="{{ route('laporan.cetak-data-orang-tua') }}" class="btn btn-primary" target="_blank">Cetak</a>
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
        });
    </script>
@endpush
