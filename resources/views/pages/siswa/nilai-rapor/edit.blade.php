@extends('layouts.admin')

@section('title', 'Nilai Rapor - Ubah')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title fw-semibold">Ubah Nilai Rapor</h5>
                <form action="{{ route('data-nilai-rapor.update', $item->id) }}" method="post" class="mt-3">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="jenjang">Jenjang</label><sup class="text-danger">(*)</sup>
                                <select name="jenjang" id="jenjang" class="form-control w-100" required>
                                    <option value="" hidden>--Pilih Jenjang Kelas--</option>
                                    <option value="X" @if(old('jenjang', $item->jenjang) == 'X') selected @endif>X</option>
                                    <option value="XI" @if(old('jenjang', $item->jenjang) == 'XI') selected @endif>XI</option>
                                    <option value="XII" @if(old('jenjang', $item->jenjang) == 'XII') selected @endif>XII</option>
                                </select>
                                @error('jenjang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kelas">Kelas</label><sup class="text-danger">(*)</sup>
                                <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" id="kelas" placeholder="Contoh : IPA 1" value="{{ old('kelas', $item->kelas) }}" required>
                                @error('kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="semester">Semester</label><sup class="text-danger">(*)</sup>
                                <select name="semester" id="semester" class="form-control w-100" required>
                                    <option value="" hidden>--Pilih Semester--</option>
                                    <option value="1" @if(old('semester', $item->semester) == '1') selected @endif>1</option>
                                    <option value="2" @if(old('semester', $item->semester) == '2') selected @endif>2</option>
                                </select>
                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tahun_ajaran">Tahun Ajaran</label><sup class="text-danger">(*)</sup>
                                <input type="tahun_ajaran" name="tahun_ajaran" class="form-control @error('tahun_ajaran') is-invalid @enderror" id="tahun_ajaran" placeholder="Contoh : 2023-2024" value="{{ old('tahun_ajaran', $item->tahun_ajaran) }}">
                                @error('tahun_ajaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="matematika">Nilai Matematika</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="matematika" class="form-control @error('matematika') is-invalid @enderror" id="matematika" placeholder="Nilai Matematika" value="{{ old('matematika', $item->matematika) }}" min="0" max="999.999" step=".001" required>
                                @error('matematika')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="keislaman">Nilai Keislaman</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="keislaman" class="form-control @error('keislaman') is-invalid @enderror" id="keislaman" placeholder="Nilai Keislaman" value="{{ old('keislaman', $item->keislaman) }}" min="0" max="999.999" step=".001" required>
                                @error('keislaman')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="bahasa_arab">Nilai Bahasa Arab</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="bahasa_arab" class="form-control @error('bahasa_arab') is-invalid @enderror" id="bahasa_arab" placeholder="Nilai Bahasa Arab" value="{{ old('bahasa_arab', $item->bahasa_arab) }}" min="0" max="999.999" step=".001" required>
                                @error('bahasa_arab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="bahasa_inggris">Nilai Bahasa Inggris</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="bahasa_inggris" class="form-control @error('bahasa_inggris') is-invalid @enderror" id="bahasa_inggris" placeholder="Nilai Bahasa Inggris" value="{{ old('bahasa_inggris', $item->bahasa_inggris) }}" min="0" max="999.999" step=".001" required>
                                @error('bahasa_inggris')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="ipa">Nilai IPA</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="ipa" class="form-control @error('ipa') is-invalid @enderror" id="ipa" placeholder="Nilai IPA" value="{{ old('ipa', $item->ipa) }}" min="0" max="999.999" step=".001" required>
                                @error('ipa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="ips">Nilai IPS</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="ips" class="form-control @error('ips') is-invalid @enderror" id="ips" placeholder="Nilai IPS" value="{{ old('ips', $item->ips) }}" min="0" max="999.999" step=".001" required>
                                @error('ips')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mt-3">
                        <a href="{{ route('data-siswa.index') }}" class="btn btn-secondary me-2">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
