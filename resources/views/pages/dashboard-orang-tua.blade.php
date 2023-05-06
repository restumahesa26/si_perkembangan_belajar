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
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr class="text-center">
                                <th rowspan="2" style="vertical-align : middle; text-align:center;">Kelas & Semester</th>
                                <th colspan="6">Nilai</th>
                            </tr>
                            <tr class="text-center">
                                <th>Matematika</th>
                                <th>Keislaman</th>
                                <th>Bahasa Arab</th>
                                <th>Bahasa Inggris</th>
                                <th>IPA</th>
                                <th>IPS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($item->nilai as $item2)
                            <tr class="text-center">
                                <td>Kelas {{ $item2->jenjang }} {{ $item2->kelas }} Semester {{ $item2->semester }}</td>
                                <td>{{ $item2->matematika }}</td>
                                <td>{{ $item2->keislaman }}</td>
                                <td>{{ $item2->bahasa_arab }}</td>
                                <td>{{ $item2->bahasa_inggris }}</td>
                                <td>{{ $item2->ipa }}</td>
                                <td>{{ $item2->ips }}</td>
                            </tr>
                        </div>
                            @empty
                            <tr class="text-center">
                                <td colspan="7">-- Data Kosong --</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @empty

    @endforelse
</div>
@endsection
