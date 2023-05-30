@extends('layouts.admin')

@section('title', 'Profile')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Profile</h5>
                <form action="{{ route('siswa.update-profile') }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nisn">NISN</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="nisn" class="form-control @error('nisn') is-invalid @enderror" id="nisn" placeholder="NISN" value="{{ old('nisn', $item->nisn) }}" required>
                                @error('nisn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama">Nama</label><sup class="text-danger">(*)</sup>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" value="{{ old('nama', $item->user->nama) }}" required>
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
                    </div>
                    <div class="row mt-2">
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
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                                <label for="jenis_kelamin">Jenis Kelamin</label><sup class="text-danger">(*)</sup>
                                <div class="form-check">
                                    <label class="form-check-label text-dark">
                                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="L"
                                            value="L" @if (old('jenis_kelamin', $item->jenis_kelamin) == 'L') checked @endif required>
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label text-dark">
                                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="P"
                                            value="P" @if (old('jenis_kelamin', $item->jenis_kelamin) == 'P') checked @endif required>
                                        Perempuan
                                    </label>
                                </div>
                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label><sup class="text-danger">(*)</sup>
                                <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" placeholder="Tempat Lahir" value="{{ old('tempat_lahir', $item->tempat_lahir) }}" required>
                                @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label><sup class="text-danger">(*)</sup>
                                <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ old('tanggal_lahir', $item->tanggal_lahir) }}">
                                @error('tanggal_lahir')
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
                                <label for="status_keluarga">Status Keluarga</label><sup class="text-danger">(*)</sup>
                                <input type="text" name="status_keluarga" class="form-control @error('status_keluarga') is-invalid @enderror" id="status_keluarga" placeholder="Status Keluarga" value="{{ old('status_keluarga', $item->status_keluarga) }}" required>
                                @error('status_keluarga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="anak_ke">Anak Ke</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="anak_ke" class="form-control @error('anak_ke') is-invalid @enderror" id="anak_ke" placeholder="Anak Ke" value="{{ old('anak_ke', $item->anak_ke) }}" required>
                                @error('anak_ke')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="no_hp">Nomor Handphone</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Nomor Handphone" value="{{ old('no_hp', $item->no_hp) }}">
                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="alamat">Alamat</label><sup class="text-danger">(*)</sup>
                                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" value="{{ old('alamat', $item->alamat) }}" required>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="no_kk">Nomor Kartu Keluarga</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="no_kk" class="form-control @error('no_kk') is-invalid @enderror" id="no_kk" placeholder="Nomor Kartu Keluarga" value="{{ old('no_kk', $item->no_kk) }}" required>
                                @error('no_kk')
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
                                <label for="sekolah_asal">Sekolah Asal</label>
                                <input type="text" name="sekolah_asal" class="form-control @error('sekolah_asal') is-invalid @enderror" id="sekolah_asal" placeholder="Sekolah Asal" value="{{ old('sekolah_asal', $item->sekolah_asal) }}">
                                @error('sekolah_asal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="npsn">NPSN</label>
                                <input type="number" name="npsn" class="form-control @error('npsn') is-invalid @enderror" id="npsn" placeholder="NPSN" value="{{ old('npsn', $item->npsn) }}">
                                @error('npsn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="alamat_sekolah_asal">Alamat Sekolah Asal</label>
                                <input type="text" name="alamat_sekolah_asal" class="form-control @error('alamat_sekolah_asal') is-invalid @enderror" id="alamat_sekolah_asal" placeholder="Alamat Sekolah Asal" value="{{ old('alamat_sekolah_asal', $item->alamat_sekolah_asal) }}">
                                @error('alamat_sekolah_asal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="minat_jurusan">Minat Jurusan</label>
                                    <input type="text" name="minat_jurusan" class="form-control @error('minat_jurusan') is-invalid @enderror" id="minat_jurusan" placeholder="Minat Jurusan" value="{{ old('minat_jurusan', $item->minat_jurusan) }}">
                                    @error('minat_jurusan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="hobi">Hobi</label>
                                    <input type="number" name="hobi" class="form-control @error('hobi') is-invalid @enderror" id="hobi" placeholder="Hobi" value="{{ old('hobi', $item->hobi) }}">
                                    @error('hobi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cita_cita">Cita-Cita</label>
                                    <input type="text" name="cita_cita" class="form-control @error('cita_cita') is-invalid @enderror" id="cita_cita" placeholder="Cita-Cita" value="{{ old('cita_cita', $item->cita_cita) }}">
                                    @error('cita_cita')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="target_prestasi">Target Prestasi</label>
                                    <input type="text" name="target_prestasi" class="form-control @error('target_prestasi') is-invalid @enderror" id="target_prestasi" placeholder="Target Prestasi" value="{{ old('target_prestasi', $item->target_prestasi) }}">
                                    @error('target_prestasi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Data Orang Tua</h5>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nik_ayah">NIK Ayah</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->nik_ayah }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nik_ibu">NIK Ibu</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->nik_ibu }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nik_wali">NIK Wali</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->nik_wali != NULL ? $item->orang_tua->nik_wali : 'Kosong' }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama_ayah">Nama Ayah</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->nama_ayah }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->nama_ibu }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama_wali">Nama Wali</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->nama_wali != NULL ? $item->orang_tua->nama_wali : 'Kosong' }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="status_ayah">Status Ayah</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->status_ayah }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="status_ibu">Status Ibu</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->status_ibu }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="status_wali">Status Wali</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->status_wali != NULL ? $item->orang_tua->status_wali : 'Kosong' }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pendidikan_ayah">Pendidikan Ayah</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->pendidikan_ayah }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pendidikan_ibu">Pendidikan Ibu</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->pendidikan_ibu }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pendidikan_wali">Pendidikan Wali</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->pendidikan_wali != NULL ? $item->orang_tua->pendidikan_wali : 'Kosong' }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->pekerjaan_ayah }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->pekerjaan_ibu }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pekerjaan_wali">Pekerjaan Wali</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->pekerjaan_wali != NULL ? $item->orang_tua->pekerjaan_wali : 'Kosong' }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="no_hp_ayah">Nomor HP Ayah</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->no_hp_ayah }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="no_hp_ibu">Nomor HP Ibu</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->no_hp_ibu }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="no_hp_wali">Nomor HP Wali</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->no_hp_wali != NULL ? $item->orang_tua->no_hp_wali : 'Kosong' }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="penghasilan">Penghasilan</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->penghasilan != NULL ? $item->orang_tua->penghasilan : 'Kosong' }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kepemilikan_rumah">Kepemilikan Rumah</label>
                            <input type="text" class="form-control" value="{{ $item->orang_tua->kepemilikan_rumah != NULL ? $item->orang_tua->kepemilikan_rumah : 'Kosong' }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
