@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Data Siswa Terbaru Ditambahkan</h5>
                <div class="table-responsive">
                    <table class="table table-bordered mt-2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nisn }}</td>
                                    <td>{{ $item->user->nama }}</td>
                                    <td>{{ $item->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">--Data Kosong--</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <h5>Jumlah Siswa : {{ $siswa }} orang</h5>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Data Orang Tua Terbaru Ditambahkan</h5>
                <div class="table-responsive">
                    <table class="table table-bordered mt-2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Nama Anak</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items2 as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_ayah }}</td>
                                    <td>{{ $item->nama_ibu }}</td>
                                    <td>
                                        <ol style="padding-left: 10px;">
                                            @forelse ($item->siswa as $item2)
                                            <li>{{ $item2->user->nama }}</li>
                                            @empty

                                            @endforelse
                                        </ol>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">--Data Kosong--</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <h5>Jumlah Orang Tua : {{ $orang_tua }} orang</h5>
            </div>
        </div>
    </div>
    <div class="col-md-12">

    </div>
</div>
@endsection
