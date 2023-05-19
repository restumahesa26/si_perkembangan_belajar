@extends('layouts.admin')

@section('title', 'Nilai Rapor')

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
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai Rapor</h5>
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
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="kelas">Kelas</label><sup class="text-danger">(*)</sup>
                                                <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" id="kelas" placeholder="Contoh : IPA 1" value="{{ old('kelas') }}" required>
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
                                    <div class="row mt-2">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="matematika">Nilai Matematika</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="matematika" class="form-control @error('matematika') is-invalid @enderror" id="matematika" placeholder="Nilai Matematika" value="{{ old('matematika') }}" min="0" max="999.999" step=".001" required>
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
                                                <input type="number" name="keislaman" class="form-control @error('keislaman') is-invalid @enderror" id="keislaman" placeholder="Nilai Keislaman" value="{{ old('keislaman') }}" min="0" max="999.999" step=".001" required>
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
                                                <input type="number" name="bahasa_arab" class="form-control @error('bahasa_arab') is-invalid @enderror" id="bahasa_arab" placeholder="Nilai Bahasa Arab" value="{{ old('bahasa_arab') }}" min="0" max="999.999" step=".001" required>
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
                                                <input type="number" name="bahasa_inggris" class="form-control @error('bahasa_inggris') is-invalid @enderror" id="bahasa_inggris" placeholder="Nilai Bahasa Inggris" value="{{ old('bahasa_inggris') }}" min="0" max="999.999" step=".001" required>
                                                @error('bahasa_inggris')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        @if (Auth::user()->siswa->jurusan == 'IPA')
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="ipa">Nilai IPA</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="ipa" class="form-control @error('ipa') is-invalid @enderror" id="ipa" placeholder="Nilai IPA" value="{{ old('ipa') }}" min="0" max="999.999" step=".001" required>
                                                @error('ipa')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        @endif
                                        @if (Auth::user()->siswa->jurusan == 'IPS')
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="ips">Nilai IPS</label><sup class="text-danger">(*)</sup>
                                                <input type="number" name="ips" class="form-control @error('ips') is-invalid @enderror" id="ips" placeholder="Nilai IPS" value="{{ old('ips') }}" min="0" max="999.999" step=".001" required>
                                                @error('ips')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        @endif
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
                    <h5 class="card-title fw-semibold">Nilai Rapor</h5>
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
                                <td>{{ $item->jenjang }} {{ $item->kelas }}</td>
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
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Nilai Rapor</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Hapus Nilai Rapor Kelas {{ $item->kelas }} Semester {{ $item->semester }}</p>
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
                                        <h5 class="modal-title" id="exampleModalLabel">Nilai Rapor Kelas {{ $item->jenjang }} {{ $item->kelas }} Semester {{ $item->semester }} Tahun Ajaran {{ $item->tahun_ajaran }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="matematika">Nilai Matematika</label>
                                                    <input type="text" class="form-control" id="matematika" value="{{ $item->matematika }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="keislaman">Nilai Keislaman</label>
                                                    <input type="text" class="form-control" id="keislaman" value="{{ $item->keislaman }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="bahasa_arab">Nilai Bahasa Arab</label>
                                                    <input type="text" class="form-control" id="bahasa_arab" value="{{ $item->bahasa_arab }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="bahasa_inggris">Nilai Bahasa Inggris</label>
                                                    <input type="text" class="form-control" id="bahasa_inggris" value="{{ $item->bahasa_inggris }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="ipa">Nilai IPA</label>
                                                    <input type="text" class="form-control" id="ipa" value="{{ $item->ipa }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="ips">Nilai IPS</label>
                                                    <input type="text" class="form-control" id="ips" value="{{ $item->ips }}" readonly>
                                                </div>
                                            </div>
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
