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
    <h4 class="text-center font-weight-bold" style="font-size: 18px;">Data Orang Tua</h4>
    <table class="table table-bordered" id="table">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>NIK Ayah</th>
                <th>Nama Ayah</th>
                <th>NIK Ibu</th>
                <th>Nama Ibu</th>
                <th>Nama Anak</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
            <tr>
                <td class="text-center" style="vertical-align : middle; text-align:center;">{{ $loop->iteration }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->nik_ayah }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->nama_ayah }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->nik_ibu }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->nama_ibu }}</td>
                <td style="vertical-align : middle;">
                    <ol style="padding-left: 10px;">
                        @forelse ($item->siswa as $item2)
                        <li>{{ $item2->user->nama }}</li>
                        @empty

                        @endforelse
                    </ol>
                </td>
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
