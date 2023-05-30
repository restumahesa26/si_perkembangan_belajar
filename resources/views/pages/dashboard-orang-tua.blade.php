@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    @forelse ($items as $item)
    <div class="col-lg-12">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Siswa {{ $item->user->nama }} - {{ $item->nisn }}</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap" id="table">
                        <thead>
                            <tr class="text-center">
                                <th rowspan="2" style="vertical-align : middle; text-align:center;">Kelas & Semester
                                </th>
                                <th colspan="28">Nilai</th>
                            </tr>
                            <tr class="text-center">
                                <th style="vertical-align : middle; text-align:center;">Al-Qur'an Hadits</th>
                                <th style="vertical-align : middle; text-align:center;">Akidah Akhlak</th>
                                <th style="vertical-align : middle; text-align:center;">Fikih</th>
                                <th style="vertical-align : middle; text-align:center;">SKI</th>
                                <th style="vertical-align : middle; text-align:center;">B. Arab</th>
                                <th style="vertical-align : middle; text-align:center;">P. Pancasila</th>
                                <th style="vertical-align : middle; text-align:center;">B. Indonesia</th>
                                <th style="vertical-align : middle; text-align:center;">Matematika</th>
                                <th style="vertical-align : middle; text-align:center;">IPA</th>
                                <th style="vertical-align : middle; text-align:center;">IPS</th>
                                <th style="vertical-align : middle; text-align:center;">B.Inggris</th>
                                <th style="vertical-align : middle; text-align:center;">Penjaskes</th>
                                <th style="vertical-align : middle; text-align:center;">Sejarah</th>
                                <th style="vertical-align : middle; text-align:center;">KWU</th>
                                <th style="vertical-align : middle; text-align:center;">Karya Ilmiah</th>
                                <th style="vertical-align : middle; text-align:center;">Tahfidz</th>
                                <th style="vertical-align : middle; text-align:center;">Matematika Lanjutan</th>
                                <th style="vertical-align : middle; text-align:center;">Biologi</th>
                                <th style="vertical-align : middle; text-align:center;">Fisika</th>
                                <th style="vertical-align : middle; text-align:center;">Kimia</th>
                                <th style="vertical-align : middle; text-align:center;">Geografi</th>
                                <th style="vertical-align : middle; text-align:center;">Kimia Peminatan</th>
                                <th style="vertical-align : middle; text-align:center;">Sosiologi</th>
                                <th style="vertical-align : middle; text-align:center;">Informatika</th>
                                <th style="vertical-align : middle; text-align:center;">Pen. Riset</th>
                                <th style="vertical-align : middle; text-align:center;">Pen. Fisika</th>
                                <th style="vertical-align : middle; text-align:center;">Pen. Sosiologi</th>
                                <th style="vertical-align : middle; text-align:center;">Pen. Biologi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($item->nilai as $item2)
                            <tr class="text-center">
                                <td style="vertical-align : middle; text-align:center;">Kelas {{ $item2->jenjang }}
                                    {{ $item2->jurusan }} {{ $item2->kelas }} Semester {{ $item2->semester }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->al_quran_hadits == '' ? '-' : $item2->al_quran_hadits }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->akidah_akhlak == '' ? '-' : $item2->akidah_akhlak }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->fikih == '' ? '-' : $item2->fikih }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->sejarah_kebudayaan_islam == '' ? '-' : $item2->sejarah_kebudayaan_islam }}
                                </td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->bahasa_arab == '' ? '-' : $item2->bahasa_arab }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->pendidikan_pancasila == '' ? '-' : $item2->pendidikan_pancasila }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->bahasa_indonesia == '' ? '-' : $item2->bahasa_indonesia }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->matematika == '' ? '-' : $item2->matematika }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->ipa == '' ? '-' : $item2->ipa }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->ips == '' ? '-' : $item2->ips }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->bahasa_inggris == '' ? '-' : $item2->bahasa_inggris }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->penjaskes == '' ? '-' : $item2->penjaskes }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->sejarah == '' ? '-' : $item2->sejarah }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->kwu == '' ? '-' : $item2->kwu }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->karya_ilmiah == '' ? '-' : $item2->karya_ilmiah }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->tahfidz == '' ? '-' : $item2->tahfidz }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->matematika_c == '' ? '-' : $item2->matematika_c }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->biologi_c == '' ? '-' : $item2->biologi_c }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->fisika_c == '' ? '-' : $item2->fisika_c }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->kimia_c == '' ? '-' : $item2->kimia_c }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->geografi_c == '' ? '-' : $item2->geografi_c }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->kimia_c_c == '' ? '-' : $item2->kimia_c_c }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->sosiologi_c == '' ? '-' : $item2->sosiologi_c }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->informatika_c == '' ? '-' : $item2->informatika_c }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->pendalaman_riset_c == '' ? '-' : $item2->pendalaman_riset_c }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->pendalaman_fisika_c == '' ? '-' : $item2->pendalaman_fisika_c }}</td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->pendalaman_sosiologi_c == '' ? '-' : $item2->pendalaman_sosiologi_c }}
                                </td>
                                <td style="vertical-align : middle; text-align:center;">
                                    {{ $item2->pendalaman_biologi_c == '' ? '-' : $item2->pendalaman_biologi_c }}</td>
                            </tr>
                </div>
                @empty
                <tr class="text-center">
                    <td colspan="7">-- Data Kosong --</td>
                </tr>
                @endforelse
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Prestasi Akademik Siswa</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Prestasi</th>
                                <th>Tingkat</th>
                                <th style="width: 30%">Deskrispi</th>
                                <th style="width: 20%">Sertifikat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($item->prestasi_akademik as $item2)
                            <tr>
                                <td style="vertical-align : middle; text-align:center;">{{ $loop->iteration }}</td>
                                <td style="vertical-align : middle; text-align:center;">{{ $item2->prestasi }}</td>
                                <td style="vertical-align : middle; text-align:center;">{{ $item2->tingkat }}</td>
                                <td style="vertical-align : middle; text-align:justify;">{{ $item2->deskripsi }}</td>
                                <td style="vertical-align : middle; text-align:center;">{{ $item2->sertifikat }}</td>
                            </tr>
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
    <div class="col-lg-12">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Prestasi non Akademik Siswa</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Prestasi</th>
                                <th>Tingkat</th>
                                <th style="width: 30%">Deskrispi</th>
                                <th style="width: 20%">Sertifikat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($item->prestasi_non_akademik as $item2)
                            <tr>
                                <td style="vertical-align : middle; text-align:center;">{{ $loop->iteration }}</td>
                                <td style="vertical-align : middle; text-align:center;">{{ $item2->prestasi }}</td>
                                <td style="vertical-align : middle; text-align:center;">{{ $item2->tingkat }}</td>
                                <td style="vertical-align : middle; text-align:justify;">{{ $item2->deskripsi }}</td>
                                <td style="vertical-align : middle; text-align:center;">{{ $item2->sertifikat }}</td>
                            </tr>
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
@empty

@endforelse
</div>
@endsection
