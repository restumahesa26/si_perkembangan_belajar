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
</div>
@endsection

@push('addon-script')
    <script>
        var chartSiswa = {
    series: [
        { name: "Rata-Rata", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ number_format(($item2->matematika + $item2->keislaman + $item2->bahasa_arab + $item2->bahasa_inggris + $item2->ipa + $item2->ips) / 6, 2)  }},
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
                "Kelas {{ $item2->jenjang }} {{ $item2->kelas }} Semester {{ $item2->semester }}",
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
