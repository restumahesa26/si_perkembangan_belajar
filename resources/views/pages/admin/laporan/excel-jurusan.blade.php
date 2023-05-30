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
    <table class="table table-bordered" id="table">
        <thead>
            <tr class="text-center">
                <th rowspan="2" style="vertical-align : middle; text-align:center;">Nama</th>
                <th rowspan="2" style="vertical-align : middle; text-align:center;">Jurusan</th>
                <th colspan="6" style="vertical-align : middle; text-align:center;">Nilai Kelas X Semester 1</th>
                <th colspan="6" style="vertical-align : middle; text-align:center;">Nilai Kelas X Semester 2</th>
                <th colspan="6" style="vertical-align : middle; text-align:center;">Nilai Kelas XI Semester 1</th>
                <th colspan="6" style="vertical-align : middle; text-align:center;">Nilai Kelas XI Semester 2</th>
                <th colspan="6" style="vertical-align : middle; text-align:center;">Nilai Kelas XII Semester 1</th>
                <th colspan="6" style="vertical-align : middle; text-align:center;">Nilai Kelas XII Semester 2</th>
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
            @forelse ($items as $item)
            <tr class="text-center">
                <td style="vertical-align : middle; text-align:center;">{{ $item->user->nama }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->jurusan }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'X', '1') != '' ? $item->getNilai($item->nisn, 'X', '1')->matematika : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'X', '1') != '' ? $item->getNilai($item->nisn, 'X', '1')->keislaman : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'X', '1') != '' ? $item->getNilai($item->nisn, 'X', '1')->bahasa_arab : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'X', '1') != '' ? $item->getNilai($item->nisn, 'X', '1')->bahasa_inggris : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'X', '1') != '' ? $item->getNilai($item->nisn, 'X', '1')->ipa : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'X', '1') != '' ? $item->getNilai($item->nisn, 'X', '1')->ips : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'X', '2') != '' ? $item->getNilai($item->nisn, 'X', '2')->matematika : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'X', '2') != '' ? $item->getNilai($item->nisn, 'X', '2')->keislaman : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'X', '2') != '' ? $item->getNilai($item->nisn, 'X', '2')->bahasa_arab : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'X', '2') != '' ? $item->getNilai($item->nisn, 'X', '2')->bahasa_inggris : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'X', '2') != '' ? $item->getNilai($item->nisn, 'X', '2')->ipa : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'X', '2') != '' ? $item->getNilai($item->nisn, 'X', '2')->ips : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XI', '1') != '' ? $item->getNilai($item->nisn, 'XI', '1')->matematika : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XI', '1') != '' ? $item->getNilai($item->nisn, 'XI', '1')->keislaman : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XI', '1') != '' ? $item->getNilai($item->nisn, 'XI', '1')->bahasa_arab : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XI', '1') != '' ? $item->getNilai($item->nisn, 'XI', '1')->bahasa_inggris : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XI', '1') != '' ? $item->getNilai($item->nisn, 'XI', '1')->ipa : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XI', '1') != '' ? $item->getNilai($item->nisn, 'XI', '1')->ips : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XI', '2') != '' ? $item->getNilai($item->nisn, 'XI', '2')->matematika : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XI', '2') != '' ? $item->getNilai($item->nisn, 'XI', '2')->keislaman : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XI', '2') != '' ? $item->getNilai($item->nisn, 'XI', '2')->bahasa_arab : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XI', '2') != '' ? $item->getNilai($item->nisn, 'XI', '2')->bahasa_inggris : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XI', '2') != '' ? $item->getNilai($item->nisn, 'XI', '2')->ipa : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XI', '2') != '' ? $item->getNilai($item->nisn, 'XI', '2')->ips : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XII', '1') != '' ? $item->getNilai($item->nisn, 'XII', '1')->matematika : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XII', '1') != '' ? $item->getNilai($item->nisn, 'XII', '1')->keislaman : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XII', '1') != '' ? $item->getNilai($item->nisn, 'XII', '1')->bahasa_arab : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XII', '1') != '' ? $item->getNilai($item->nisn, 'XII', '1')->bahasa_inggris : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XII', '1') != '' ? $item->getNilai($item->nisn, 'XII', '1')->ipa : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XII', '1') != '' ? $item->getNilai($item->nisn, 'XII', '1')->ips : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XII', '2') != '' ? $item->getNilai($item->nisn, 'XII', '2')->matematika : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XII', '2') != '' ? $item->getNilai($item->nisn, 'XII', '2')->keislaman : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XII', '2') != '' ? $item->getNilai($item->nisn, 'XII', '2')->bahasa_arab : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XII', '2') != '' ? $item->getNilai($item->nisn, 'XII', '2')->bahasa_inggris : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XII', '2') != '' ? $item->getNilai($item->nisn, 'XII', '2')->ipa : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->getNilai($item->nisn, 'XII', '2') != '' ? $item->getNilai($item->nisn, 'XII', '2')->ips : '-' }}</td>
            </tr>
            @empty
            <tr class="text-center">
                <td colspan="38">-- Data Kosong --</td>
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
