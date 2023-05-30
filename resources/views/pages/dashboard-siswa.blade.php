@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Grafik Nilai Rata-Rata Siswa Per Semester</h5>
                <div id="chartSiswa"></div>
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
@endsection

@push('addon-script')
    <script>
        var chartSiswa = {
    series: [
        { name: "Rata-Rata", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->getRataNilai($item2->id)  }},
            @empty
            @endforelse
        ]},
    ],

    chart: {
        type: "bar",
        height: 345,
        offsetX: -15,
        toolbar: { show: true },
        foreColor: "#adb0bb",
        fontFamily: 'inherit',
        sparkline: { enabled: false },
    },

    colors: ["#3C84AB"],

    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: "35%",
            borderRadius: [6],
            borderRadiusApplication: 'end',
            borderRadiusWhenStacked: 'all'
        },
    },
    markers: { size: 0 },

    dataLabels: {
        enabled: false,
    },


    legend: {
        show: false,
    },


    grid: {
        borderColor: "rgba(0,0,0,0.1)",
        strokeDashArray: 3,
        xaxis: {
            lines: {
            show: false,
            },
        },
    },

    xaxis: {
        type: "category",
        categories:
        [
            @foreach(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                "Kelas {{ $item2->jenjang }} {{ $item2->jurusan }} {{ $item2->kelas }} Semester {{ $item2->semester }}",
            @endforeach
        ],
        labels: {
            style: { cssClass: "grey--text lighten-2--text fill-color" },
        },
    },


    yaxis: {
        show: true,
        min: 0,
        max: 100,
        tickAmount: 4,
        labels: {
            style: {
            cssClass: "grey--text lighten-2--text fill-color",
            },
        },
    },
    stroke: {
        show: true,
        width: 3,
        lineCap: "butt",
        colors: ["transparent"],
    },

    tooltip: { theme: "light" },

    responsive: [
        {
            breakpoint: 600,
            options: {
            plotOptions: {
                bar: {
                borderRadius: 3,
                }
            },
            }
        }
    ]
};

var chartSiswa = new ApexCharts(document.querySelector("#chartSiswa"), chartSiswa);
chartSiswa.render();
    </script>
@endpush
