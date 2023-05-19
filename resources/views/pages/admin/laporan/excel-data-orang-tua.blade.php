<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Data Orang Tua</title>
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
                <th style="vertical-align : middle; text-align:center;">Nama Anak</th>
                <th style="vertical-align : middle; text-align:center;">NIK Ayah</th>
                <th style="vertical-align : middle; text-align:center;">Nama Ayah</th>
                <th style="vertical-align : middle; text-align:center;">Status Ayah</th>
                <th style="vertical-align : middle; text-align:center;">Pendidikan Ayah</th>
                <th style="vertical-align : middle; text-align:center;">Pekerjaan Ayah</th>
                <th style="vertical-align : middle; text-align:center;">No. HP Ayah</th>
                <th style="vertical-align : middle; text-align:center;">NIK Ibu</th>
                <th style="vertical-align : middle; text-align:center;">Nama Ibu</th>
                <th style="vertical-align : middle; text-align:center;">Status Ibu</th>
                <th style="vertical-align : middle; text-align:center;">Pendidikan Ibu</th>
                <th style="vertical-align : middle; text-align:center;">Pekerjaan Ibu</th>
                <th style="vertical-align : middle; text-align:center;">No. HP Ibu</th>
                <th style="vertical-align : middle; text-align:center;">NIK Wali</th>
                <th style="vertical-align : middle; text-align:center;">Nama Wali</th>
                <th style="vertical-align : middle; text-align:center;">Status Wali</th>
                <th style="vertical-align : middle; text-align:center;">Pendidikan Wali</th>
                <th style="vertical-align : middle; text-align:center;">Pekerjaan Wali</th>
                <th style="vertical-align : middle; text-align:center;">No. HP Wali</th>
                <th style="vertical-align : middle; text-align:center;">Penghasilan</th>
                <th style="vertical-align : middle; text-align:center;">Kepemilikan Rumah</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
            <tr>
                <td style="vertical-align : middle; text-align:center;">{{ $loop->iteration }}</td>
                <td style="vertical-align : middle; text-align:center;">
                @forelse ($item->siswa as $item2)
                    {{ $item2->user->nama }} @if($item->siswa->count() > 1) <br> @endif
                @empty
                    -
                @endforelse
                </td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->nik_ayah }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->nama_ayah }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->status_ayah }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->pendidikan_ayah }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->pekerjaan_ayah }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->no_hp_ayah }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->nik_ibu }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->nama_ibu }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->status_ibu }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->pendidikan_ibu }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->pekerjaan_ibu }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->no_hp_ibu }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->nik_wali }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->nama_wali }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->status_wali }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->pendidikan_wali }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->pekerjaan_wali }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->no_hp_wali }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->penghasilan }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->kepemilikan_rumah }}</td>
            </tr>
            @empty
            <tr class="text-center">
                <td colspan="6">-- Data Kosong --</td>
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
