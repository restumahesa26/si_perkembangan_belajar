@extends('layouts.admin')

@section('title', 'Rekapan')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card w-100">
            <div class="card-body">
                <div class="card-title">Rekapan Siswa Per Mata Pelajaran</div>
                <div class="form-inline mb-3 mt-4">
                    <label for="example-select">Pilih Siswa</label>
                    <div class="row">
                        <div class="col-md-3">
                            <select class="form-control" id="example-select" onchange="location = this.value">
                                <option value="" hidden>--Pilih Siswa--</option>
                                @forelse ($items as $item2)
                                <option value="{{ route('rekapan.show', $item2->nisn) }}" @if($item->nisn == $item2->nisn) selected @endif>{{ $item2->user->nama }} - {{ $item2->nisn }}</option>
                                @empty

                                @endforelse
                            </select>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('rekapan.cetak-excel', $item->nisn) }}" class="btn btn-success" target="_blank">Cetak Excel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
