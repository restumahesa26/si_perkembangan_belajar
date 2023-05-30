@extends('layouts.admin')

@section('title', 'Rapor')

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
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Rapor</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('data-nilai-rapor.store') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="jenjang">Jenjang</label><sup class="text-danger">(*)</sup>
                                                <select name="jenjang" id="jenjang" class="form-control w-100" required>
                                                    <option value="" hidden>--Pilih Jenjang Kelas--</option>
                                                    <option value="X" @if(old('jenjang') == 'X') selected @endif>X</option>
                                                    <option value="XI" @if(old('jenjang') == 'XI') selected @endif>XI</option>
                                                    <option value="XII" @if(old('jenjang') == 'XII') selected @endif>XII</option>
                                                </select>
                                                @error('jenjang')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 jurusan d-none">
                                            <div class="form-group">
                                                <label for="jurusan">Jurusan</label><sup class="text-danger">(*)</sup>
                                                <select name="jurusan" id="jurusan" class="form-control w-100">
                                                    <option value="" hidden>--Pilih Jurusan Kelas--</option>
                                                    <option value="IPA" @if(old('jurusan') == 'IPA') selected @endif>IPA</option>
                                                    <option value="IPS" @if(old('jurusan') == 'IPS') selected @endif>IPS</option>
                                                </select>
                                                @error('jurusan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3 kelas">
                                            <div class="form-group">
                                                <label for="kelas">Kelas</label>
                                                <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" id="kelas" placeholder="1 / 2 / 3" value="{{ old('kelas') }}" required>
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
                                                    <option value="1" @if(old('semester') == '1') selected @endif>1</option>
                                                    <option value="2" @if(old('semester') == '2') selected @endif>2</option>
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
                                                <input type="tahun_ajaran" name="tahun_ajaran" class="form-control @error('tahun_ajaran') is-invalid @enderror" id="tahun_ajaran" placeholder="Contoh : 2023-2024" value="{{ old('tahun_ajaran') }}">
                                                @error('tahun_ajaran')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 kelompok-a">
                                        <h5>Kelompok A</h5>
                                        <div class="col-md-2 al_quran_hadits">
                                            <div class="form-group">
                                                <label for="al_quran_hadits">Al-Qur'an Hadits</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="al_quran_hadits" class="form-control mb-2 @error('al_quran_hadits') is-invalid @enderror" id="al_quran_hadits" placeholder="Al-Qur'an Hadits" value="{{ old('al_quran_hadits') }}" min="0" max="999.999" step=".01" required>
                                                @error('al_quran_hadits')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 akidah_akhlak">
                                            <div class="form-group">
                                                <label for="akidah_akhlak">Akidah Akhlak</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="akidah_akhlak" class="form-control mb-2 @error('akidah_akhlak') is-invalid @enderror" id="akidah_akhlak" placeholder="Akidah Akhlak" value="{{ old('akidah_akhlak') }}" min="0" max="999.999" step=".01" required>
                                                @error('akidah_akhlak')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 fikih">
                                            <div class="form-group">
                                                <label for="fikih">Fikih</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="fikih" class="form-control mb-2 @error('fikih') is-invalid @enderror" id="fikih" placeholder="Fikih" value="{{ old('fikih') }}" min="0" max="999.999" step=".01" required>
                                                @error('fikih')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 sejarah_kebudayaan_islam">
                                            <div class="form-group">
                                                <label for="sejarah_kebudayaan_islam">Sejarah Islam</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="sejarah_kebudayaan_islam" class="form-control mb-2 @error('sejarah_kebudayaan_islam') is-invalid @enderror" id="sejarah_kebudayaan_islam" placeholder="Sejarah Islam" value="{{ old('sejarah_kebudayaan_islam') }}" min="0" max="999.999" step=".01" required>
                                                @error('sejarah_kebudayaan_islam')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 bahasa_arab">
                                            <div class="form-group">
                                                <label for="bahasa_arab">Bahasa Arab</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="bahasa_arab" class="form-control mb-2 @error('bahasa_arab') is-invalid @enderror" id="bahasa_arab" placeholder="Bahasa Arab" value="{{ old('bahasa_arab') }}" min="0" max="999.999" step=".01" required>
                                                @error('bahasa_arab')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 pendidikan_pancasila">
                                            <div class="form-group">
                                                <label for="pendidikan_pancasila">Pendidikan Pancasila</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="pendidikan_pancasila" class="form-control mb-2 @error('pendidikan_pancasila') is-invalid @enderror" id="pendidikan_pancasila" placeholder="Pendidikan Pancasila" value="{{ old('pendidikan_pancasila') }}" min="0" max="999.999" step=".01" required>
                                                @error('pendidikan_pancasila')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 bahasa_indonesia">
                                            <div class="form-group">
                                                <label for="bahasa_indonesia">Bahasa Indonesia</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="bahasa_indonesia" class="form-control mb-2 @error('bahasa_indonesia') is-invalid @enderror" id="bahasa_indonesia" placeholder="Bahasa Indonesia" value="{{ old('bahasa_indonesia') }}" min="0" max="999.999" step=".01" required>
                                                @error('bahasa_indonesia')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 matematika">
                                            <div class="form-group">
                                                <label for="matematika">Matematika</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="matematika" class="form-control mb-2 @error('matematika') is-invalid @enderror" id="matematika" placeholder="Matematika" value="{{ old('matematika') }}" min="0" max="999.999" step=".01" required>
                                                @error('matematika')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 ipa d-none">
                                            <div class="form-group">
                                                <label for="ipa">IPA</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="ipa" class="form-control mb-2 @error('ipa') is-invalid @enderror" id="ipa" placeholder="IPA" value="{{ old('ipa') }}" min="0" max="999.999" step=".01">
                                                @error('ipa')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 ips d-none">
                                            <div class="form-group">
                                                <label for="ips">IPS</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="ips" class="form-control mb-2 @error('ips') is-invalid @enderror" id="ips" placeholder="IPS" value="{{ old('ips') }}" min="0" max="999.999" step=".01">
                                                @error('ips')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 bahasa_inggris">
                                            <div class="form-group">
                                                <label for="bahasa_inggris">Bahasa Inggris</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="bahasa_inggris" class="form-control mb-2 @error('bahasa_inggris') is-invalid @enderror" id="bahasa_inggris" placeholder="Bahasa Inggris" value="{{ old('bahasa_inggris') }}" min="0" max="999.999" step=".01" required>
                                                @error('bahasa_inggris')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 penjaskes">
                                            <div class="form-group">
                                                <label for="penjaskes">Penjaskes</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="penjaskes" class="form-control mb-2 @error('penjaskes') is-invalid @enderror" id="penjaskes" placeholder="Penjaskes" value="{{ old('penjaskes') }}" min="0" max="999.999" step=".01" required>
                                                @error('penjaskes')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 kelompok-b">
                                        <h5>Kelompok B</h5>
                                        <div class="col-md-2 sejarah">
                                            <div class="form-group">
                                                <label for="sejarah">Sejarah</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="sejarah" class="form-control mb-2 @error('sejarah') is-invalid @enderror" id="sejarah" placeholder="Sejarah" value="{{ old('sejarah') }}" min="0" max="999.999" step=".01" required>
                                                @error('sejarah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 kwu">
                                            <div class="form-group">
                                                <label for="kwu">Kewirausahaan</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="kwu" class="form-control mb-2 @error('kwu') is-invalid @enderror" id="kwu" placeholder="Kewirausahaan" value="{{ old('kwu') }}" min="0" max="999.999" step=".01" required>
                                                @error('kwu')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 karya_ilmiah">
                                            <div class="form-group">
                                                <label for="karya_ilmiah">Karya Ilmiah</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="karya_ilmiah" class="form-control mb-2 @error('karya_ilmiah') is-invalid @enderror" id="karya_ilmiah" placeholder="Karya Ilmiah" value="{{ old('karya_ilmiah') }}" min="0" max="999.999" step=".01" required>
                                                @error('karya_ilmiah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 tahfidz">
                                            <div class="form-group">
                                                <label for="tahfidz">Tahfidz</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="tahfidz" class="form-control mb-2 @error('tahfidz') is-invalid @enderror" id="tahfidz" placeholder="Tahfidz" value="{{ old('tahfidz') }}" min="0" max="999.999" step=".01" required>
                                                @error('tahfidz')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 kelompok-c d-none">
                                        <h5>Kelompok C</h5>
                                        <div class="col-md-2 matematika_c">
                                            <div class="form-group">
                                                <label for="matematika_c">Matematika</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="matematika_c" class="form-control mb-2 @error('matematika_c') is-invalid @enderror" id="matematika_c" placeholder="Matematika" value="{{ old('matematika_c') }}" min="0" max="999.999" step=".01">
                                                @error('matematika_c')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 biologi_c">
                                            <div class="form-group">
                                                <label for="biologi_c">Biologi</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="biologi_c" class="form-control mb-2 @error('biologi_c') is-invalid @enderror" id="biologi_c" placeholder="Biologi" value="{{ old('biologi_c') }}" min="0" max="999.999" step=".01">
                                                @error('biologi_c')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 fisika_c">
                                            <div class="form-group">
                                                <label for="fisika_c">Fisika</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="fisika_c" class="form-control mb-2 @error('fisika_c') is-invalid @enderror" id="fisika_c" placeholder="Fisika" value="{{ old('fisika_c') }}" min="0" max="999.999" step=".01">
                                                @error('fisika_c')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 kimia_c">
                                            <div class="form-group">
                                                <label for="kimia_c">Kimia</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="kimia_c" class="form-control mb-2 @error('kimia_c') is-invalid @enderror" id="kimia_c" placeholder="Kimia" value="{{ old('kimia_c') }}" min="0" max="999.999" step=".01">
                                                @error('kimia_c')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 informatika_c">
                                            <div class="form-group">
                                                <label for="informatika_c">Informatika</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="informatika_c" class="form-control mb-2 @error('informatika_c') is-invalid @enderror" id="informatika_c" placeholder="Informatika" value="{{ old('informatika_c') }}" min="0" max="999.999" step=".01">
                                                @error('informatika_c')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 pendalaman_riset_c">
                                            <div class="form-group">
                                                <label for="pendalaman_riset_c">Pendalaman Riset</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="pendalaman_riset_c" class="form-control mb-2 @error('pendalaman_riset_c') is-invalid @enderror" id="pendalaman_riset_c" placeholder="Pendalaman Riset" value="{{ old('pendalaman_riset_c') }}" min="0" max="999.999" step=".01">
                                                @error('pendalaman_riset_c')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 pendalaman_fisika_c">
                                            <div class="form-group">
                                                <label for="pendalaman_fisika_c">Pendalaman Fisika</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="pendalaman_fisika_c" class="form-control mb-2 @error('pendalaman_fisika_c') is-invalid @enderror" id="pendalaman_fisika_c" placeholder="Pendalaman Fisika" value="{{ old('pendalaman_fisika_c') }}" min="0" max="999.999" step=".01">
                                                @error('pendalaman_fisika_c')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 pendalaman_sosiologi_c">
                                            <div class="form-group">
                                                <label for="pendalaman_sosiologi_c">Pendalaman Sosiologi</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="pendalaman_sosiologi_c" class="form-control mb-2 @error('pendalaman_sosiologi_c') is-invalid @enderror" id="pendalaman_sosiologi_c" placeholder="Pendalaman Sosiologi" value="{{ old('pendalaman_sosiologi_c') }}" min="0" max="999.999" step=".01">
                                                @error('pendalaman_sosiologi_c')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 pendalaman_biologi_c">
                                            <div class="form-group">
                                                <label for="pendalaman_biologi_c">Pendalaman Biologi</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="pendalaman_biologi_c" class="form-control mb-2 @error('pendalaman_biologi_c') is-invalid @enderror" id="pendalaman_biologi_c" placeholder="Pendalaman Biologi" value="{{ old('pendalaman_biologi_c') }}" min="0" max="999.999" step=".01">
                                                @error('pendalaman_biologi_c')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 geografi_c">
                                            <div class="form-group">
                                                <label for="geografi_c">Geografi Lintas Minat</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="geografi_c" class="form-control mb-2 @error('geografi_c') is-invalid @enderror" id="geografi_c" placeholder="Geografi Lintas Minat" value="{{ old('geografi_c') }}" min="0" max="999.999" step=".01">
                                                @error('geografi_c')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 kimia_c_c">
                                            <div class="form-group">
                                                <label for="kimia_c_c">Kimia Lintas Minat</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="kimia_c_c" class="form-control mb-2 @error('kimia_c_c') is-invalid @enderror" id="kimia_c_c" placeholder="Kimia Lintas Minat" value="{{ old('kimia_c_c') }}" min="0" max="999.999" step=".01">
                                                @error('kimia_c_c')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 sosiologi_c">
                                            <div class="form-group">
                                                <label for="sosiologi_c">Sosiologi Lintas Minat</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="sosiologi_c" class="form-control mb-2 @error('sosiologi_c') is-invalid @enderror" id="sosiologi_c" placeholder="Sosiologi Lintas Minat" value="{{ old('sosiologi_c') }}" min="0" max="999.999" step=".01">
                                                @error('sosiologi_c')
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
                    <h5 class="card-title fw-semibold">Rapor</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Kelas</th>
                                <th>Semester</th>
                                <th>Tahun Ajaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->jenjang }} {{ $item->jurusan }} {{ $item->kelas }}</td>
                                <td>{{ $item->semester }}</td>
                                <td>{{ $item->tahun_ajaran }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#lihatData{{ $item->id }}">
                                        Lihat
                                    </button>
                                    <a href="{{ route('data-nilai-rapor.edit', $item->id) }}" class="btn btn-primary btn-sm" style="box-shadow: none;"><i class="fa fa-pencil"></i> Ubah</a>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $item->id }}">
                                        Hapus
                                    </button>
                                    <div class="modal fade" id="modalHapus{{ $item->id }}" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Rapor</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Hapus Rapor Kelas {{ $item->kelas }} Semester {{ $item->semester }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <form action="{{ route('data-nilai-rapor.destroy', $item->id) }}" method="POST"
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
                            <div class="modal fade" id="lihatData{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Rapor Kelas {{ $item->jenjang }} {{ $item->jurusan }} {{ $item->kelas }} Semester {{ $item->semester }} Tahun Ajaran {{ $item->tahun_ajaran }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <h5>Kelompok A</h5>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="al_quran_hadits">Al-Qur'an Hadits</label>
                                                    <input type="text" class="form-control" id="al_quran_hadits" value="{{ $item->al_quran_hadits }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="akidah_akhlak">Akidah Akhlak</label>
                                                    <input type="text" class="form-control" id="akidah_akhlak" value="{{ $item->akidah_akhlak }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="fikih">Fikih</label>
                                                    <input type="text" class="form-control" id="fikih" value="{{ $item->fikih }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="sejarah_kebudayaan_islam">Sejarah Kebudayaan Islam</label>
                                                    <input type="text" class="form-control" id="sejarah_kebudayaan_islam" value="{{ $item->sejarah_kebudayaan_islam }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="bahasa_arab">Bahasa Arab</label>
                                                    <input type="text" class="form-control" id="bahasa_arab" value="{{ $item->bahasa_arab }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="pendidikan_pancasila">Pendidikan Pancasila</label>
                                                    <input type="text" class="form-control" id="pendidikan_pancasila" value="{{ $item->pendidikan_pancasila }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="bahasa_indonesia">Bahasa Indonesia</label>
                                                    <input type="text" class="form-control" id="bahasa_indonesia" value="{{ $item->bahasa_indonesia }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="matematika">Matematika</label>
                                                    <input type="text" class="form-control" id="matematika" value="{{ $item->matematika }}" readonly>
                                                </div>
                                            </div>
                                            @if ($item->jenjang == 'X')
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="ipa">IPA</label>
                                                    <input type="text" class="form-control" id="ipa" value="{{ $item->ipa }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="ips">IPS</label>
                                                    <input type="text" class="form-control" id="ips" value="{{ $item->ips }}" readonly>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="bahasa_inggris">Bahasa Inggris</label>
                                                    <input type="text" class="form-control" id="bahasa_inggris" value="{{ $item->bahasa_inggris }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="penjaskes">Penjaskes</label>
                                                    <input type="text" class="form-control" id="penjaskes" value="{{ $item->penjaskes }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <h5>Kelompok B</h5>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="sejarah">Sejarah</label>
                                                    <input type="text" class="form-control" id="sejarah" value="{{ $item->sejarah }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="kwu">Kewirausahaan</label>
                                                    <input type="text" class="form-control" id="kwu" value="{{ $item->kwu }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="karya_ilmiah">Karya Ilmiah</label>
                                                    <input type="text" class="form-control" id="karya_ilmiah" value="{{ $item->karya_ilmiah }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="tahfidz">Tahfidz</label>
                                                    <input type="text" class="form-control" id="tahfidz" value="{{ $item->tahfidz }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <h5>Kelompok C</h5>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="matematika_c">Matematika</label>
                                                    <input type="text" class="form-control" id="matematika_c" value="{{ $item->matematika_c }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="biologi_c">Biologi</label>
                                                    <input type="text" class="form-control" id="biologi_c" value="{{ $item->biologi_c }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="fisika_c">Fisika</label>
                                                    <input type="text" class="form-control" id="fisika_c" value="{{ $item->fisika_c }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="kimia_c">Kimia</label>
                                                    <input type="text" class="form-control" id="kimia_c" value="{{ $item->kimia_c }}" readonly>
                                                </div>
                                            </div>
                                            @if ($item->jenjang == 'XI' && $item->jurusan == 'IPA')
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="geografi_c">Geografi Lintas Minat</label>
                                                    <input type="text" class="form-control" id="geografi_c" value="{{ $item->geografi_c }}" readonly>
                                                </div>
                                            </div>
                                            @endif
                                            @if ($item->jenjang == 'XI' && $item->jurusan == 'IPS')
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="kimia_c_c">Kimia Lintas Minat</label>
                                                    <input type="text" class="form-control" id="kimia_c_c" value="{{ $item->kimia_c_c }}" readonly>
                                                </div>
                                            </div>
                                            @endif
                                            @if ($item->jenjang == 'XII' && $item->jurusan == 'IPA')
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="sosiologi_c">Sosiologi Lintas Minat</label>
                                                    <input type="text" class="form-control" id="sosiologi_c" value="{{ $item->sosiologi_c }}" readonly>
                                                </div>
                                            </div>
                                            @endif
                                            @if ($item->jenjang == 'XII' && $item->jurusan == 'IPS')
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="geografi_c">Geografi Lintas Minat</label>
                                                    <input type="text" class="form-control" id="geografi_c" value="{{ $item->geografi_c }}" readonly>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="informatika_c">Informatika</label>
                                                    <input type="text" class="form-control" id="informatika_c" value="{{ $item->informatika_c }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="pendalaman_riset_c">Pendalaman Riset</label>
                                                    <input type="text" class="form-control" id="pendalaman_riset_c" value="{{ $item->pendalaman_riset_c }}" readonly>
                                                </div>
                                            </div>
                                            @if ($item->jenjang == 'XI' && $item->jurusan == 'IPA')
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="pendalaman_fisika">Pendalaman Fisika</label>
                                                    <input type="text" class="form-control" id="pendalaman_fisika" value="{{ $item->pendalaman_fisika }}" readonly>
                                                </div>
                                            </div>
                                            @endif
                                            @if ($item->jenjang == 'XI' && $item->jurusan == 'IPS')
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="pendalaman_sosiologi_c">Pendalaman Sosiologi</label>
                                                    <input type="text" class="form-control" id="pendalaman_sosiologi_c" value="{{ $item->pendalaman_sosiologi_c }}" readonly>
                                                </div>
                                            </div>
                                            @endif
                                            @if ($item->jenjang == 'XII' && $item->jurusan == 'IPA')
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="pendalaman_biologi_c">Pendalaman Biologi</label>
                                                    <input type="text" class="form-control" id="pendalaman_biologi_c" value="{{ $item->pendalaman_biologi_c }}" readonly>
                                                </div>
                                            </div>
                                            @endif
                                            @if ($item->jenjang == 'XII' && $item->jurusan == 'IPS')
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group">
                                                    <label for="pendalaman_fisika_c">Pendalaman Fisika</label>
                                                    <input type="text" class="form-control" id="pendalaman_fisika_c" value="{{ $item->pendalaman_fisika_c }}" readonly>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @empty
                            <tr class="text-center">
                                <td colspan="5">-- Data Kosong --</td>
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
    <script>
        $("#jenjang").on("change", function() {
            var value = $('#jenjang').find(":selected").val();
            if(value == 'X') {
                $(".kelompok-c").addClass("d-none");
                $(".ipa").removeClass("d-none");
                $(".ips").removeClass("d-none");
                $(".jurusan").addClass("d-none");
                $(".kelas").removeClass("col-md-1");
                $(".kelas").addClass("col-md-3");
            }else if(value == 'XI') {
                $(".sosiologi_c").addClass("d-none");
                $(".kelompok-c").removeClass("d-none");
                $(".ipa").addClass("d-none");
                $(".ips").addClass("d-none");
                $(".jurusan").removeClass("d-none");
                $(".kelas").addClass("col-md-1");
                $(".kelas").removeClass("col-md-3");
            }else if(value == 'XII') {
                $(".sosiologi_c").removeClass("d-none");
                $(".kelompok-c").removeClass("d-none");
                $(".ipa").addClass("d-none");
                $(".ips").addClass("d-none");
                $(".jurusan").removeClass("d-none");
                $(".kelas").addClass("col-md-1");
                $(".kelas").removeClass("col-md-3");
            }
        });
        $("#jurusan, #jenjang").on("change", function() {
            var value = $('#jurusan').find(":selected").val();
            var value2 = $('#jenjang').find(":selected").val();
            if (value2 == 'XI' && value == 'IPA') {
                $(".geografi_c").removeClass("d-none");
                $(".kimia_c_c").addClass("d-none");
                $(".sosiologi_c").addClass("d-none");
                $(".pendalaman_fisika_c").removeClass("d-none");
                $(".pendalaman_sosiologi_c").addClass("d-none");
                $(".pendalaman_biologi_c").addClass("d-none");
            } else if (value2 == 'XI' && value == 'IPS') {
                $(".geografi_c").addClass("d-none");
                $(".kimia_c_c").removeClass("d-none");
                $(".sosiologi_c").addClass("d-none");
                $(".pendalaman_sosiologi_c").removeClass("d-none");
                $(".pendalaman_fisika_c").addClass("d-none");
                $(".pendalaman_biologi_c").addClass("d-none");
            } else if (value2 == 'XII' && value == 'IPA') {
                $(".geografi_c").addClass("d-none");
                $(".kimia_c_c").addClass("d-none");
                $(".sosiologi_c").removeClass("d-none");
                $(".pendalaman_biologi_c").removeClass("d-none");
                $(".pendalaman_fisika_c").addClass("d-none");
                $(".pendalaman_sosiologi_c").addClass("d-none");
            } else if (value2 == 'XII' && value == 'IPS') {
                $(".geografi_c").removeClass("d-none");
                $(".kimia_c_c").addClass("d-none");
                $(".sosiologi_c").addClass("d-none");
                $(".pendalaman_fisika_c").removeClass("d-none");
                $(".pendalaman_sosiologi_c").addClass("d-none");
                $(".pendalaman_biologi_c").addClass("d-none");
            }
        });
    </script>
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
