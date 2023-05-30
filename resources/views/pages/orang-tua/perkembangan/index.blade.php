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
        { name: "Al-Quran Hadits", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->al_quran_hadits }},
            @empty
            @endforelse
        ]},
        { name: "Akidah Akhlak", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->akidah_akhlak }},
            @empty
            @endforelse
        ]},
        { name: "Fikih", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->fikih }},
            @empty
            @endforelse
        ]},
        { name: "Sejarah Kebudayaan Islam", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->sejarah_kebudayaan_islam }},
            @empty
            @endforelse
        ]},
        { name: "Bahasa Arab", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->bahasa_arab }},
            @empty
            @endforelse
        ]},
        { name: "Pendidikan Pancasila", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->pendidikan_pancasila }},
            @empty
            @endforelse
        ]},
        { name: "Bahasa Indonesia", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->bahasa_indonesia }},
            @empty
            @endforelse
        ]},
        { name: "Matematika", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->matematika }},
            @empty
            @endforelse
        ]},
        { name: "Bahasa Inggris", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->bahasa_inggris }},
            @empty
            @endforelse
        ]},
        { name: "Pendidikan Pancasila", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->pendidikan_pancasila }},
            @empty
            @endforelse
        ]},
        { name: "Penjaskes", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->penjaskes }},
            @empty
            @endforelse
        ]},
        { name: "Sejarah", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->sejarah }},
            @empty
            @endforelse
        ]},
        { name: "Kewirausahaan", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->kwu }},
            @empty
            @endforelse
        ]},
        { name: "Karya Ilmiah", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->karya_ilmiah }},
            @empty
            @endforelse
        ]},
        { name: "Tahfidz", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->tahfidz }},
            @empty
            @endforelse
        ]},
        { name: "Matematika Peminatan", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->matematika_c }},
            @empty
            @endforelse
        ]},
        { name: "Biologi Peminatan", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->biologi_c }},
            @empty
            @endforelse
        ]},
        { name: "Fisika Peminatan", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->matematika_c }},
            @empty
            @endforelse
        ]},
        { name: "Kimia Peminatan", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->matematika_c }},
            @empty
            @endforelse
        ]},
        { name: "Informatika", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->informatika }},
            @empty
            @endforelse
        ]},
        { name: "Pendalaman Riset", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->pendalaman_riset }},
            @empty
            @endforelse
        ]},
        { name: "Pendalaman Fisika", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->pendalaman_fisika_c }},
            @empty
            @endforelse
        ]},
        { name: "Pendalaman Biologi", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->pendalaman_biologi_c }},
            @empty
            @endforelse
        ]},
        { name: "Pendalaman Sosiologi", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->pendalaman_sosiologi_c == '' ? 0 : $item2->pendalaman_sosiologi_c }},
            @empty
            @endforelse
        ]}
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
            columnWidth: '100%',
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

var chart{{ $item->nisn }} = new ApexCharts(document.querySelector("#chart{{ $item->nisn }}"), chart{{ $item->nisn }});
chart{{ $item->nisn }}.render();
    @empty

    @endforelse
    </script>
@endpush
