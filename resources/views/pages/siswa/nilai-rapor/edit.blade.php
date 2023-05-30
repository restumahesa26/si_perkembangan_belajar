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
                        <div class="col-md-2 jurusan @if($item->jenjang == 'X') d-none @endif">
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label><sup class="text-danger">(*)</sup>
                                <select name="jurusan" id="jurusan" class="form-control w-100" required>
                                    <option value="" hidden>--Pilih Jurusan Kelas--</option>
                                    <option value="IPA" @if(old('jurusan', $item->jurusan) == 'IPA') selected @endif>IPA</option>
                                    <option value="IPS" @if(old('jurusan', $item->jurusan) == 'IPS') selected @endif>IPS</option>
                                </select>
                                @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-1 kelas">
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" id="kelas" placeholder="1 / 2 / 3" value="{{ old('kelas', $item->kelas) }}" required>
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
                    <div class="row mt-3 kelompok-a">
                        <h5>Kelompok A</h5>
                        <div class="col-md-2 al_quran_hadits">
                            <div class="form-group">
                                <label for="al_quran_hadits">Al-Qur'an Hadits</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="al_quran_hadits" class="form-control mb-2 @error('al_quran_hadits') is-invalid @enderror" id="al_quran_hadits" placeholder="Al-Qur'an Hadits" value="{{ old('al_quran_hadits', $item->al_quran_hadits) }}" min="0" max="999.999" step=".01" required>
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
                                <input type="number" name="akidah_akhlak" class="form-control mb-2 @error('akidah_akhlak') is-invalid @enderror" id="akidah_akhlak" placeholder="Akidah Akhlak" value="{{ old('akidah_akhlak', $item->akidah_akhlak) }}" min="0" max="999.999" step=".01" required>
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
                                <input type="number" name="fikih" class="form-control mb-2 @error('fikih') is-invalid @enderror" id="fikih" placeholder="Fikih" value="{{ old('fikih', $item->fikih) }}" min="0" max="999.999" step=".01" required>
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
                                <input type="number" name="sejarah_kebudayaan_islam" class="form-control mb-2 @error('sejarah_kebudayaan_islam') is-invalid @enderror" id="sejarah_kebudayaan_islam" placeholder="Sejarah Islam" value="{{ old('sejarah_kebudayaan_islam', $item->sejarah_kebudayaan_islam) }}" min="0" max="999.999" step=".01" required>
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
                                <input type="number" name="bahasa_arab" class="form-control mb-2 @error('bahasa_arab') is-invalid @enderror" id="bahasa_arab" placeholder="Bahasa Arab" value="{{ old('bahasa_arab', $item->bahasa_arab) }}" min="0" max="999.999" step=".01" required>
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
                                <input type="number" name="pendidikan_pancasila" class="form-control mb-2 @error('pendidikan_pancasila') is-invalid @enderror" id="pendidikan_pancasila" placeholder="Pendidikan Pancasila" value="{{ old('pendidikan_pancasila', $item->pendidikan_pancasila) }}" min="0" max="999.999" step=".01" required>
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
                                <input type="number" name="bahasa_indonesia" class="form-control mb-2 @error('bahasa_indonesia') is-invalid @enderror" id="bahasa_indonesia" placeholder="Bahasa Indonesia" value="{{ old('bahasa_indonesia', $item->bahasa_indonesia) }}" min="0" max="999.999" step=".01" required>
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
                                <input type="number" name="matematika" class="form-control mb-2 @error('matematika') is-invalid @enderror" id="matematika" placeholder="Matematika" value="{{ old('matematika', $item->matematika) }}" min="0" max="999.999" step=".01" required>
                                @error('matematika')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 ipa @if($item->jenjang != 'X') d-none @endif">
                            <div class="form-group">
                                <label for="ipa">IPA</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="ipa" class="form-control mb-2 @error('ipa') is-invalid @enderror" id="ipa" placeholder="IPA" value="{{ old('ipa', $item->ipa) }}" min="0" max="999.999" step=".01">
                                @error('ipa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 ips @if($item->jenjang != 'X') d-none @endif">
                            <div class="form-group">
                                <label for="ips">IPS</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="ips" class="form-control mb-2 @error('ips') is-invalid @enderror" id="ips" placeholder="IPS" value="{{ old('ips', $item->ips) }}" min="0" max="999.999" step=".01">
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
                                <input type="number" name="bahasa_inggris" class="form-control mb-2 @error('bahasa_inggris') is-invalid @enderror" id="bahasa_inggris" placeholder="Bahasa Inggris" value="{{ old('bahasa_inggris', $item->bahasa_inggris) }}" min="0" max="999.999" step=".01" required>
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
                                <input type="number" name="penjaskes" class="form-control mb-2 @error('penjaskes') is-invalid @enderror" id="penjaskes" placeholder="Penjaskes" value="{{ old('penjaskes', $item->penjaskes) }}" min="0" max="999.999" step=".01" required>
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
                                <input type="number" name="sejarah" class="form-control mb-2 @error('sejarah') is-invalid @enderror" id="sejarah" placeholder="Sejarah" value="{{ old('sejarah', $item->sejarah) }}" min="0" max="999.999" step=".01" required>
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
                                <input type="number" name="kwu" class="form-control mb-2 @error('kwu') is-invalid @enderror" id="kwu" placeholder="Kewirausahaan" value="{{ old('kwu', $item->kwu) }}" min="0" max="999.999" step=".01" required>
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
                                <input type="number" name="karya_ilmiah" class="form-control mb-2 @error('karya_ilmiah') is-invalid @enderror" id="karya_ilmiah" placeholder="Karya Ilmiah" value="{{ old('karya_ilmiah', $item->karya_ilmiah) }}" min="0" max="999.999" step=".01" required>
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
                                <input type="number" name="tahfidz" class="form-control mb-2 @error('tahfidz') is-invalid @enderror" id="tahfidz" placeholder="Tahfidz" value="{{ old('tahfidz', $item->tahfidz) }}" min="0" max="999.999" step=".01" required>
                                @error('tahfidz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 kelompok-c  @if($item->jenjang == 'X') d-none @endif">
                        <h5>Kelompok C</h5>
                        <div class="col-md-2 matematika_c">
                            <div class="form-group">
                                <label for="matematika_c">Matematika</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="matematika_c" class="form-control mb-2 @error('matematika_c') is-invalid @enderror" id="matematika_c" placeholder="Matematika" value="{{ old('matematika_c', $item->matematika_c) }}" min="0" max="999.999" step=".01">
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
                                <input type="number" name="biologi_c" class="form-control mb-2 @error('biologi_c') is-invalid @enderror" id="biologi_c" placeholder="Biologi" value="{{ old('biologi_c', $item->biologi_c) }}" min="0" max="999.999" step=".01">
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
                                <input type="number" name="fisika_c" class="form-control mb-2 @error('fisika_c') is-invalid @enderror" id="fisika_c" placeholder="Fisika" value="{{ old('fisika_c', $item->fisika_c) }}" min="0" max="999.999" step=".01">
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
                                <input type="number" name="kimia_c" class="form-control mb-2 @error('kimia_c') is-invalid @enderror" id="kimia_c" placeholder="Kimia" value="{{ old('kimia_c', $item->kimia_c) }}" min="0" max="999.999" step=".01">
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
                                <input type="number" name="informatika_c" class="form-control mb-2 @error('informatika_c') is-invalid @enderror" id="informatika_c" placeholder="Informatika" value="{{ old('informatika_c', $item->informatika_c) }}" min="0" max="999.999" step=".01">
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
                                <input type="number" name="pendalaman_riset_c" class="form-control mb-2 @error('pendalaman_riset_c') is-invalid @enderror" id="pendalaman_riset_c" placeholder="Pendalaman Riset" value="{{ old('pendalaman_riset_c', $item->pendalaman_riset_c) }}" min="0" max="999.999" step=".01">
                                @error('pendalaman_riset_c')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 pendalaman_fisika_c @if(!($item->jenjang == 'XI' && $item->jurusan == 'IPA') || !($item->jenjang == 'XII' && $item->jurusan == 'IPS')) d-none @endif">
                            <div class="form-group">
                                <label for="pendalaman_fisika_c">Pendalaman Fisika</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="pendalaman_fisika_c" class="form-control mb-2 @error('pendalaman_fisika_c') is-invalid @enderror" id="pendalaman_fisika_c" placeholder="Pendalaman Fisika" value="{{ old('pendalaman_fisika_c', $item->pendalaman_fisika_c) }}" min="0" max="999.999" step=".01">
                                @error('pendalaman_fisika_c')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 pendalaman_sosiologi_c @if($item->jenjang != 'XI' && $item->jurusan != 'IPS') d-none @endif">
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
                        <div class="col-md-2 pendalaman_biologi_c @if($item->jenjang != 'XII' && $item->jurusan != 'IPA') d-none @endif">
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
                        <div class="col-md-2 geografi_c @if(!($item->jenjang == 'XI' && $item->jurusan == 'IPA') || !($item->jenjang == 'XII' && $item->jurusan == 'IPS')) d-none @endif">
                            <div class="form-group">
                                <label for="geografi_c">Geografi Lintas Minat</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="geografi_c" class="form-control mb-2 @error('geografi_c') is-invalid @enderror" id="geografi_c" placeholder="Geografi Lintas Minat" value="{{ old('geografi_c', $item->geografi_c) }}" min="0" max="999.999" step=".01">
                                @error('geografi_c')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 kimia_c_c @if($item->jenjang != 'XI' && $item->jurusan != 'IPS') d-none @endif">
                            <div class="form-group">
                                <label for="kimia_c_c">Kimia Lintas Minat</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="kimia_c_c" class="form-control mb-2 @error('kimia_c_c') is-invalid @enderror" id="kimia_c_c" placeholder="Kimia Lintas Minat" value="{{ old('kimia_c_c', $item->kimia_c_c) }}" min="0" max="999.999" step=".01">
                                @error('kimia_c_c')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 sosiologi_c @if($item->jenjang != 'XII' && $item->jurusan != 'IPA') d-none @endif">
                            <div class="form-group">
                                <label for="sosiologi_c">Sosiologi Lintas Minat</label><sup class="text-danger">(*)</sup>
                                <input type="number" name="sosiologi_c" class="form-control mb-2 @error('sosiologi_c') is-invalid @enderror" id="sosiologi_c" placeholder="Sosiologi Lintas Minat" value="{{ old('sosiologi_c', $item->sosiologi_c) }}" min="0" max="999.999" step=".01">
                                @error('sosiologi_c')
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
            } else if (value2 == 'XI' && value == 'IPS') {
                $(".geografi_c").addClass("d-none");
                $(".kimia_c_c").removeClass("d-none");
                $(".sosiologi_c").addClass("d-none");
            } else if (value2 == 'XII' && value == 'IPA') {
                $(".geografi_c").addClass("d-none");
                $(".kimia_c_c").addClass("d-none");
                $(".sosiologi_c").removeClass("d-none");
            } else if (value2 == 'XII' && value == 'IPS') {
                $(".geografi_c").removeClass("d-none");
                $(".kimia_c_c").addClass("d-none");
                $(".sosiologi_c").addClass("d-none");
            }
        });
        $(document).ready(function() {
            var value = $('#jurusan').find(":selected").val();
            var value2 = $('#jenjang').find(":selected").val();
            if (value2 == 'XI' && value == 'IPA') {
                $(".geografi_c").removeClass("d-none");
                $(".kimia_c_c").addClass("d-none");
                $(".sosiologi_c").addClass("d-none");
            } else if (value2 == 'XI' && value == 'IPS') {
                $(".geografi_c").addClass("d-none");
                $(".kimia_c_c").removeClass("d-none");
                $(".sosiologi_c").addClass("d-none");
            } else if (value2 == 'XII' && value == 'IPA') {
                $(".geografi_c").addClass("d-none");
                $(".kimia_c_c").addClass("d-none");
                $(".sosiologi_c").removeClass("d-none");
            } else if (value2 == 'XII' && value == 'IPS') {
                $(".geografi_c").removeClass("d-none");
                $(".kimia_c_c").addClass("d-none");
                $(".sosiologi_c").addClass("d-none");
            }
        });
    </script>
@endpush
