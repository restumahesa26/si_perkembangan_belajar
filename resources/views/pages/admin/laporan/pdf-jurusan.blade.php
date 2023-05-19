<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Nilai</title>
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
    <h4 class="text-center font-weight-bold" style="font-size: 18px;">Rekapan Absen</h4>
    <table class="table table-bordered" id="table">
        <thead>
            <tr class="text-center">
                <th rowspan="2" style="vertical-align : middle; text-align:center;">Nama</th>
                <th rowspan="2" style="vertical-align : middle; text-align:center;">Jurusan</th>
                <th colspan="6" style="vertical-align : middle; text-align:center;">Rata Rata Nilai Per Kelas</th>
            </tr>
            <tr class="text-center">
                <th style="vertical-align : middle; text-align:center;">Kelas X<br>Semester 1</th>
                <th style="vertical-align : middle; text-align:center;">Kelas X<br>Semester 2</th>
                <th style="vertical-align : middle; text-align:center;">Kelas XI<br>Semester 1</th>
                <th style="vertical-align : middle; text-align:center;">Kelas XI<br>Semester 2</th>
                <th style="vertical-align : middle; text-align:center;">Kelas XII<br>Semester 1</th>
                <th style="vertical-align : middle; text-align:center;">Kelas XII<br>Semester 2</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
            <tr class="text-center">
                <td style="vertical-align : middle; text-align:center;">{{ $item->user->nama }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->jurusan }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getRataNilai($item->nisn, 'X', '1') }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getRataNilai($item->nisn, 'X', '2') }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getRataNilai($item->nisn, 'XI', '1') }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getRataNilai($item->nisn, 'XI', '2') }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getRataNilai($item->nisn, 'XII', '1') }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getRataNilai($item->nisn, 'XII', '2') }}</td>
            </tr>
            @empty
            <tr class="text-center">
                <td colspan="8">-- Data Kosong --</td>
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
