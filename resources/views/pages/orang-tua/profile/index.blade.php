@extends('layouts.admin')

@section('title', 'Profile')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title fw-semibold">Profile</h5>
                <form action="{{ route('orang-tua.update-profile') }}" method="post" class="mt-3">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama">Nama Akun</label><sup class="text-danger">(*)</sup>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Akun" value="{{ old('nama', $item->user->nama) }}" required>
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
                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username', $item->user->username) }}" required>
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
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email', $item->user->email) }}">
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
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" value="{{ old('password') }}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password_confirmation">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Konfirmasi Password" value="{{ old('password_confirmation') }}">
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
                                <input type="text" name="nik_ayah" class="form-control @error('nik_ayah') is-invalid @enderror" id="nik_ayah" placeholder="NIK Ayah" value="{{ old('nik_ayah', $item->nik_ayah) }}" required>
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
                                <input type="text" name="nik_ibu" class="form-control @error('nik_ibu') is-invalid @enderror" id="nik_ibu" placeholder="NIK Ibu" value="{{ old('nik_ibu', $item->nik_ibu) }}" required>
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
                                <input type="text" name="nik_wali" class="form-control @error('nik_wali') is-invalid @enderror" id="nik_wali" placeholder="NIK Wali" value="{{ old('nik_wali', $item->nik_wali) }}">
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
                                <input type="text" name="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah" placeholder="Nama Ayah" value="{{ old('nama_ayah', $item->nama_ayah) }}" required>
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
                                <input type="text" name="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu" placeholder="Nama Ibu" value="{{ old('nama_ibu', $item->nama_ibu) }}" required>
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
                                <input type="text" name="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror" id="nama_wali" placeholder="Nama Wali" value="{{ old('nama_wali', $item->nama_wali) }}">
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
                                <input type="text" name="status_ayah" class="form-control @error('status_ayah') is-invalid @enderror" id="status_ayah" placeholder="Status Ayah" value="{{ old('status_ayah', $item->status_ayah) }}" required>
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
                                <input type="text" name="status_ibu" class="form-control @error('status_ibu') is-invalid @enderror" id="status_ibu" placeholder="Status Ibu" value="{{ old('status_ibu', $item->status_ibu) }}" required>
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
                                <input type="text" name="status_wali" class="form-control @error('status_wali') is-invalid @enderror" id="status_wali" placeholder="Status Wali" value="{{ old('status_wali', $item->status_wali) }}">
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
                                <input type="text" name="pendidikan_ayah" class="form-control @error('pendidikan_ayah') is-invalid @enderror" id="pendidikan_ayah" placeholder="Pendidikan Ayah" value="{{ old('pendidikan_ayah', $item->pendidikan_ayah) }}" required>
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
                                <input type="text" name="pendidikan_ibu" class="form-control @error('pendidikan_ibu') is-invalid @enderror" id="pendidikan_ibu" placeholder="Pendidikan Ibu" value="{{ old('pendidikan_ibu', $item->pendidikan_ibu) }}" required>
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
                                <input type="text" name="pendidikan_wali" class="form-control @error('pendidikan_wali') is-invalid @enderror" id="pendidikan_wali" placeholder="Pendidikan Wali" value="{{ old('pendidikan_wali', $item->pendidikan_wali) }}">
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
                                <input type="text" name="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="{{ old('pekerjaan_ayah', $item->pekerjaan_ayah) }}" required>
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
                                <input type="text" name="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="{{ old('pekerjaan_ibu', $item->pekerjaan_ibu) }}" required>
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
                                <input type="text" name="pekerjaan_wali" class="form-control @error('pekerjaan_wali') is-invalid @enderror" id="pekerjaan_wali" placeholder="Pekerjaan Wali" value="{{ old('pekerjaan_wali', $item->pekerjaan_wali) }}">
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
                                <input type="text" name="no_hp_ayah" class="form-control @error('no_hp_ayah') is-invalid @enderror" id="no_hp_ayah" placeholder="Nomor HP Ayah" value="{{ old('no_hp_ayah', $item->no_hp_ayah) }}" required>
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
                                <input type="text" name="no_hp_ibu" class="form-control @error('no_hp_ibu') is-invalid @enderror" id="no_hp_ibu" placeholder="Nomor HP Ibu" value="{{ old('no_hp_ibu', $item->no_hp_ibu) }}" required>
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
                                <input type="text" name="no_hp_wali" class="form-control @error('no_hp_wali') is-invalid @enderror" id="no_hp_wali" placeholder="Nomor HP Wali" value="{{ old('no_hp_wali', $item->no_hp_wali) }}">
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
                                <input type="text" name="penghasilan" class="form-control @error('penghasilan') is-invalid @enderror" id="penghasilan" placeholder="Penghasilan" value="{{ old('penghasilan', $item->penghasilan) }}">
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
                                <input type="text" name="kepemilikan_rumah" class="form-control @error('kepemilikan_rumah') is-invalid @enderror" id="kepemilikan_rumah" placeholder="Kepemilikan Rumah" value="{{ old('kepemilikan_rumah', $item->kepemilikan_rumah) }}">
                                @error('kepemilikan_rumah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card w-100">
            <div class="card-body ">
                <h5 class="card-title fw-semibold">Data Siswa</h5>
                <ol>
                    @forelse ($item->siswa as $item2)
                    <li style="padding-top: 10px">
                        {{ $item2->user->nama }}<br>
                        <ul>
                            <table class="table table-borderless" style="margin: 0px; padding: 0px;">
                                <tbody>
                                    <tr>
                                        <td style="width: 15%; padding: 0;">NISN</td>
                                        <td style="width: 2%; padding: 0;">:</td>
                                        <td style="padding: 0;">{{ $item2->nisn }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 15%; padding: 0;">Jenis Kelamin</td>
                                        <td style="width: 2%; padding: 0;">:</td>
                                        <td style="padding: 0;">{{ $item2->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 15%; padding: 0;">Tempat, Tanggal Lahir</td>
                                        <td style="width: 2%; padding: 0;">:</td>
                                        <td style="padding: 0;">{{ $item2->tempat_lahir }}, {{ \Carbon\Carbon::parse($item2->tanggal_lahir)->translatedFormat('d F Y') }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 15%; padding: 0;">Nomor Handphone</td>
                                        <td style="width: 2%; padding: 0;">:</td>
                                        <td style="padding: 0;">{{ $item2->no_hp }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 15%; padding: 0;">Email</td>
                                        <td style="width: 2%; padding: 0;">:</td>
                                        <td style="padding: 0;">{{ $item2->user->email }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </ul>
                    </li>
                    @empty

                    @endforelse
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
