@extends('layouts.admin')

@section('title', 'Data Prestasi Non Akademik')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Prestasi Non Akademik</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('prestasi-non-akademik.store') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="nisn">Siswa</label><sup class="text-danger">(*)</sup>
                                        <select name="nisn" id="nisn" class="siswa w-100" required>
                                            <option value=""></option>
                                            @foreach ($siswas as $siswa)
                                                <option value="{{ $siswa->nisn }}" @if (old('nisn') == $siswa->nisn)
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
                                        <input type="text" name="prestasi" class="form-control @error('prestasi') is-invalid @enderror" id="prestasi" placeholder="Prestasi" value="{{ old('prestasi') }}" required>
                                        @error('prestasi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="tingkat">Tingkat</label><sup class="text-danger">(*)</sup>
                                        <input type="text" name="tingkat" class="form-control @error('tingkat') is-invalid @enderror" id="tingkat" placeholder="Tingkat" value="{{ old('tingkat') }}" required>
                                        @error('tingkat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="deskripsi">Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Deskripsi" value="{{ old('deskripsi') }}">
                                        @error('deskripsi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="sertifikat">Link Sertifikat</label>
                                        <input type="text" name="sertifikat" class="form-control @error('sertifikat') is-invalid @enderror" id="sertifikat" placeholder="Link Sertifikat" value="{{ old('sertifikat') }}">
                                        @error('sertifikat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title fw-semibold">Data Prestasi Non Akademik</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Siswa</th>
                                <th>Prestasi</th>
                                <th>Tingkat</th>
                                <th>Sertifikat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->siswa->user->nama }} ({{ $item->nisn }})</td>
                                <td>{{ $item->prestasi }}</td>
                                <td>{{ $item->tingkat }}</td>
                                <td>@if ($item->sertifikat != '')
                                    <a href="{{ $item->sertifikat }}" target="_blank" class="text-decoration-none text-primary">Link Sertifikat</a>
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('prestasi-non-akademik.edit', $item->id) }}"
                                        class="btn btn-primary btn-sm" style="box-shadow: none;">
                                        <i class="fa fa-pencil"></i> Ubah
                                    </a>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $item->id }}">
                                        Hapus
                                    </button>
                                    <div class="modal fade" id="modalHapus{{ $item->id }}" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Prestasi Non Akademik</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Hapus Prestasi Non Akademik {{ $item->siswa->user->nama }} ({{ $item->nisn }})</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <form action="{{ route('prestasi-non-akademik.destroy', $item->id) }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa fa-trash"></i> Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr class="text-center">
                                <td colspan="6">-- Data Kosong --</td>
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
    @if ($errors->any())
    <script>
        $(document).ready(function() {
            $('#exampleModal').modal('show');
        });
    </script>
    @endif

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    @if ($items->count() > 0)
    <script>
        $(document).ready(function () {
            $('#table').DataTable({
                "orderable" : false
            });
        });
    </script>
    @endif
@endpush

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
                dropdownParent: $('#exampleModal'),
                width: '100%'
            });
        });
    </script>
@endpush
