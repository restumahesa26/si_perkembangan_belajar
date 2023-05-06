@extends('layouts.admin')

@section('title', 'Perkembangan Siswa')

@section('content')
<div class="row">
    @forelse ($items as $item)
    <div class="col-md-12">
        <div class="card w-100 mb-4">
            <div class="card-body">
                <div class="card-title">Nama Siswa : {{ $item->user->nama }}</div>
                <div id="chart{{ $item->nisn }}"></div>
            </div>
        </div>
    </div>
    @empty

    @endforelse
</div>
@endsection

@push('addon-script')
    <script>
        @forelse ($items as $item)
        var chart{{ $item->nisn }} = {
    series: [
        { name: "Matematika", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->matematika }},
            @empty
            @endforelse
        ]},
        { name: "Keislaman", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->keislaman }},
            @empty
            @endforelse
        ]},
        { name: "Bahasa Arab", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->bahasa_arab }},
            @empty
            @endforelse
        ]},
        { name: "Bahasa Inggris", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->bahasa_inggris }},
            @empty
            @endforelse
        ]},
        { name: "IPA", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->ipa }},
            @empty
            @endforelse
        ]},
        { name: "IPS", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->ips }},
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

    colors: ["#3C84AB", "#85CDFD", "#159895", "#57C5B6", '#655DBB', "#AD7BE9"],

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

var chart{{ $item->nisn }} = new ApexCharts(document.querySelector("#chart{{ $item->nisn }}"), chart{{ $item->nisn }});
chart{{ $item->nisn }}.render();
    @empty

    @endforelse
    </script>
@endpush
