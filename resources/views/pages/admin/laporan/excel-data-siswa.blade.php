<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Data Siswa</title>
    <link rel="shortcut icon" href="{{ url('logo_si_mini.svg') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        @media print{
            @page {
                size: landscape
            }
        }

        body {
            font-family: 'Times New Roman';
        }

        table tr th, table tr td {
            font-size: 14px;
        }

        .table-bordered tr td {
            padding: 8px !important;
        }

        .table-bordered th, .table-bordered td{
            border: 1px solid #2C3333 !important;
        }
    </style>
</head>
<body>
    <table class="table table-bordered" id="table">
        <thead>
            <tr class="text-center">
                <th style="vertical-align : middle; text-align:center;">No</th>
                <th style="vertical-align : middle; text-align:center;">NISN</th>
                <th style="vertical-align : middle; text-align:center;">Nama</th>
                <th style="vertical-align : middle; text-align:center;">Jurusan</th>
                <th style="vertical-align : middle; text-align:center;">Jenis Kelamin</th>
                <th style="vertical-align : middle; text-align:center;">Tempat, Tanggal Lahir</th>
                <th style="vertical-align : middle; text-align:center;">Nama Ayah</th>
                <th style="vertical-align : middle; text-align:center;">Nama Ibu</th>
                <th style="vertical-align : middle; text-align:center;">Status Keluarga</th>
                <th style="vertical-align : middle; text-align:center;">Anak ke</th>
                <th style="vertical-align : middle; text-align:center;">Nomor KK</th>
                <th style="vertical-align : middle; text-align:center;">Nomor HP</th>
                <th style="vertical-align : middle; text-align:center;">Email</th>
                <th style="vertical-align : middle; text-align:center;">Alamat</th>
                <th style="vertical-align : middle; text-align:center;">Sekolah Asal</th>
                <th style="vertical-align : middle; text-align:center;">NPSN</th>
                <th style="vertical-align : middle; text-align:center;">Alamat Sekolah Asal</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
            <tr>
                <td style="vertical-align : middle; text-align:center;">{{ $loop->iteration }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->nisn }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->user->nama }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->jurusan }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->tempat_lahir }}, {{ \Carbon\Carbon::parse($item->tanggal_lahir)->translatedFormat('d F Y') }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->orang_tua->nama_ayah }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->orang_tua->nama_ibu }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->status_keluarga }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->anak_ke }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->no_kk }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->no_hp }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->user->email }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->alamat }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->sekolah_asal }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->npsn }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->alamat_sekolah_asal }}</td>
            </tr>
            @empty
            <tr class="text-center">
                <td colspan="17">-- Data Kosong --</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script>
    window.print()
</script>
</html>
