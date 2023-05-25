@extends('layouts.admin')

@section('title', 'Data Prestasi Non Akademik - Ubah')

@section('content')
<div class="row">
    <div class="col-lg-8 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title fw-semibold">Ubah Data Prestasi Non Akademik</h5>
                <form action="{{ route('prestasi-non-akademik.update', $item->id) }}" method="post" class="mt-3">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nisn">Siswa</label><sup class="text-danger">(*)</sup>
                        <select name="nisn" id="nisn" class="siswa w-100" required>
                            <option value=""></option>
                            @foreach ($siswas as $siswa)
                                <option value="{{ $siswa->nisn }}" @if (old('nisn', $item->nisn) == $siswa->nisn)
                                    selected
                                @endif>{{ $siswa->user->nama }} - {{ $siswa->nisn }}</option>
                            @endforeach
                        </select>
                        @error('nisn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for="prestasi">Prestasi</label><sup class="text-danger">(*)</sup>
                        <input type="text" name="prestasi" class="form-control @error('prestasi') is-invalid @enderror" id="prestasi" placeholder="Prestasi" value="{{ old('prestasi', $item->prestasi) }}" required>
                        @error('prestasi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for="tingkat">Tingkat</label><sup class="text-danger">(*)</sup>
                        <input type="text" name="tingkat" class="form-control @error('tingkat') is-invalid @enderror" id="tingkat" placeholder="Tingkat" value="{{ old('tingkat', $item->tingkat) }}" required>
                        @error('tingkat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Deskripsi" value="{{ old('deskripsi', $item->deskripsi) }}">
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for="sertifikat">Link Sertifikat</label>
                        <input type="text" name="sertifikat" class="form-control @error('sertifikat') is-invalid @enderror" id="sertifikat" placeholder="Link Sertifikat" value="{{ old('sertifikat', $item->sertifikat) }}">
                        @error('sertifikat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-start mt-3">
                        <a href="{{ route('prestasi-non-akademik.index') }}" class="btn btn-secondary me-2">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
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
                width: '100%'
            });
        });
    </script>
@endpush
