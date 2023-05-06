@extends('layouts.admin')

@section('title', 'Data Orang Tua')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Orang Tua</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('data-orang-tua.store') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nama">Nama Akun</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Akun" value="{{ old('nama') }}" required>
                                                @error('nama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Username</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}" required>
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Email</label><sup class="text-danger">(*)</sup>
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Password</label><sup class="text-danger">(*)</sup>
                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" value="{{ old('password') }}" required>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password_confirmation">Konfirmasi Password</label><sup class="text-danger">(*)</sup>
                                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Konfirmasi Password" value="{{ old('password_confirmation') }}" required>
                                                @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nik_ayah">NIK Ayah</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="nik_ayah" class="form-control @error('nik_ayah') is-invalid @enderror" id="nik_ayah" placeholder="NIK Ayah" value="{{ old('nik_ayah') }}" required>
                                                @error('nik_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nik_ibu">NIK Ibu</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="nik_ibu" class="form-control @error('nik_ibu') is-invalid @enderror" id="nik_ibu" placeholder="NIK Ibu" value="{{ old('nik_ibu') }}" required>
                                                @error('nik_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nik_wali">NIK Wali</label>
                                                <input type="text" name="nik_wali" class="form-control @error('nik_wali') is-invalid @enderror" id="nik_wali" placeholder="NIK Wali" value="{{ old('nik_wali') }}">
                                                @error('nik_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nama_ayah">Nama Ayah</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah" placeholder="Nama Ayah" value="{{ old('nama_ayah') }}" required>
                                                @error('nama_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nama_ibu">Nama Ibu</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu" placeholder="Nama Ibu" value="{{ old('nama_ibu') }}" required>
                                                @error('nama_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nama_wali">Nama Wali</label>
                                                <input type="text" name="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror" id="nama_wali" placeholder="Nama Wali" value="{{ old('nama_wali') }}">
                                                @error('nama_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="status_ayah">Status Ayah</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="status_ayah" class="form-control @error('status_ayah') is-invalid @enderror" id="status_ayah" placeholder="Status Ayah" value="{{ old('status_ayah') }}" required>
                                                @error('status_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="status_ibu">Status Ibu</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="status_ibu" class="form-control @error('status_ibu') is-invalid @enderror" id="status_ibu" placeholder="Status Ibu" value="{{ old('status_ibu') }}" required>
                                                @error('status_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="status_wali">Status Wali</label>
                                                <input type="text" name="status_wali" class="form-control @error('status_wali') is-invalid @enderror" id="status_wali" placeholder="Status Wali" value="{{ old('status_wali') }}">
                                                @error('status_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="pendidikan_ayah">Pendidikan Ayah</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="pendidikan_ayah" class="form-control @error('pendidikan_ayah') is-invalid @enderror" id="pendidikan_ayah" placeholder="Pendidikan Ayah" value="{{ old('pendidikan_ayah') }}" required>
                                                @error('pendidikan_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="pendidikan_ibu">Pendidikan Ibu</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="pendidikan_ibu" class="form-control @error('pendidikan_ibu') is-invalid @enderror" id="pendidikan_ibu" placeholder="Pendidikan Ibu" value="{{ old('pendidikan_ibu') }}" required>
                                                @error('pendidikan_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="pendidikan_wali">Pendidikan Wali</label>
                                                <input type="text" name="pendidikan_wali" class="form-control @error('pendidikan_wali') is-invalid @enderror" id="pendidikan_wali" placeholder="Pendidikan Wali" value="{{ old('pendidikan_wali') }}">
                                                @error('pendidikan_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="pekerjaan_ayah">Pekerjaan Ayah</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="{{ old('pekerjaan_ayah') }}" required>
                                                @error('pekerjaan_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="pekerjaan_ibu">Pekerjaan Ibu</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="{{ old('pekerjaan_ibu') }}" required>
                                                @error('pekerjaan_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="pekerjaan_wali">Pekerjaan Wali</label>
                                                <input type="text" name="pekerjaan_wali" class="form-control @error('pekerjaan_wali') is-invalid @enderror" id="pekerjaan_wali" placeholder="Pekerjaan Wali" value="{{ old('pekerjaan_wali') }}">
                                                @error('pekerjaan_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="no_hp_ayah">Nomor HP Ayah</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="no_hp_ayah" class="form-control @error('no_hp_ayah') is-invalid @enderror" id="no_hp_ayah" placeholder="Nomor HP Ayah" value="{{ old('no_hp_ayah') }}" required>
                                                @error('no_hp_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="no_hp_ibu">Nomor HP Ibu</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="no_hp_ibu" class="form-control @error('no_hp_ibu') is-invalid @enderror" id="no_hp_ibu" placeholder="Nomor HP Ibu" value="{{ old('no_hp_ibu') }}" required>
                                                @error('no_hp_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="no_hp_wali">Nomor HP Wali</label>
                                                <input type="text" name="no_hp_wali" class="form-control @error('no_hp_wali') is-invalid @enderror" id="no_hp_wali" placeholder="Nomor HP Wali" value="{{ old('no_hp_wali') }}">
                                                @error('no_hp_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="penghasilan">Penghasilan</label>
                                                <input type="text" name="penghasilan" class="form-control @error('penghasilan') is-invalid @enderror" id="penghasilan" placeholder="Penghasilan" value="{{ old('penghasilan') }}">
                                                @error('penghasilan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kepemilikan_rumah">Kepemilikan Rumah</label>
                                                <input type="text" name="kepemilikan_rumah" class="form-control @error('kepemilikan_rumah') is-invalid @enderror" id="kepemilikan_rumah" placeholder="Kepemilikan Rumah" value="{{ old('kepemilikan_rumah') }}">
                                                @error('kepemilikan_rumah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
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
                    <h5 class="card-title fw-semibold">Data Orang Tua</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>NIK Ayah</th>
                                <th>Nama Ayah</th>
                                <th>NIK Ibu</th>
                                <th>Nama Ibu</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nik_ayah }}</td>
                                <td>{{ $item->nama_ayah }}</td>
                                <td>{{ $item->nik_ibu }}</td>
                                <td>{{ $item->nama_ibu }}</td>
                                <td>
                                    <a href="{{ route('data-orang-tua.edit', $item->id) }}"
                                        class="btn btn-primary btn-sm" style="box-shadow: none;"><i
                                            class="fa fa-pencil"></i> Ubah</a>
                                    @if ($item->siswa_count < 1)
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $item->id }}">
                                        Hapus
                                    </button>
                                    <div class="modal fade" id="modalHapus{{ $item->id }}" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Orang Tua</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Hapus Orang Tua a/n {{ $item->nama_ayah }} dan {{ $item->nama_ibu }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <form action="{{ route('data-orang-tua.destroy', $item->id) }}" method="POST"
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
                                    @endif
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
    <script>
        $(document).ready(function () {
            $('#table').DataTable({
                "orderable" : false
            });
        });
    </script>
@endpush
