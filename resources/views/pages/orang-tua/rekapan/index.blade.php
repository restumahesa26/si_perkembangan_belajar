@extends('layouts.admin')

@section('title', 'Rekapan')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card w-100">
            <div class="card-body">
                <div class="card-title">Rekapan Siswa Per Mata Pelajaran</div>
                <div class="form-inline mb-3 mt-4">
                    <label for="example-select">Pilih Siswa</label>
                    <div class="row">
                        <div class="col-md-3">
                            <select class="form-control" id="example-select" onchange="location = this.value">
                                <option value="" hidden>--Pilih Siswa--</option>
                                @forelse ($items as $item2)
                                <option value="{{ route('rekapan.show', $item2->nisn) }}" @if($item->nisn == $item2->nisn) selected @endif>{{ $item2->user->nama }} - {{ $item2->nisn }}</option>
                                @empty

                                @endforelse
                            </select>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('rekapan.cetak', $item->nisn) }}" class="btn btn-primary" target="_blank">Cetak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card w-100">
            <div class="card-body">
                <div class="card-title">Nama Siswa : {{ $item->user->nama }} <br>Mata Pelajaran : Matematika</div>
                <div id="chart1"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card w-100">
            <div class="card-body">
                <div class="card-title">Nama Siswa : {{ $item->user->nama }} <br>Mata Pelajaran : Keislaman</div>
                <div id="chart2"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card w-100">
            <div class="card-body">
                <div class="card-title">Nama Siswa : {{ $item->user->nama }} <br>Mata Pelajaran : Bahasa Arab</div>
                <div id="chart3"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card w-100">
            <div class="card-body">
                <div class="card-title">Nama Siswa : {{ $item->user->nama }} <br>Mata Pelajaran : Bahasa Inggris</div>
                <div id="chart4"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card w-100">
            <div class="card-body">
                <div class="card-title">Nama Siswa : {{ $item->user->nama }} <br>Mata Pelajaran : IPA</div>
                <div id="chart5"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card w-100">
            <div class="card-body">
                <div class="card-title">Nama Siswa : {{ $item->user->nama }} <br>Mata Pelajaran : IPS</div>
                <div id="chart6"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
    <script>
        var chart1 = {
    series: [
        { name: "Matematika", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->matematika }},
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

var chart1 = new ApexCharts(document.querySelector("#chart1"), chart1);
chart1.render();

var chart2 = {
    series: [
        { name: "Keislaman", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->keislaman }},
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

    colors: ["#85CDFD"],

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

var chart2 = new ApexCharts(document.querySelector("#chart2"), chart2);
chart2.render();

var chart3 = {
    series: [
        { name: "Bahasa Arab", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->bahasa_arab }},
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

    colors: ["#159895"],

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

var chart3 = new ApexCharts(document.querySelector("#chart3"), chart3);
chart3.render();

var chart4 = {
    series: [
        { name: "Bahasa Inggris", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->bahasa_inggris }},
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

    colors: ["#57C5B6"],

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

var chart4 = new ApexCharts(document.querySelector("#chart4"), chart4);
chart4.render();

var chart5 = {
    series: [
        { name: "IPA", data: [
            @forelse(App\Helper\Helper::getNilaiRapor($item->nisn) as $item2)
                {{ $item2->ipa }},
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

    colors: ['#655DBB'],

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

var chart5 = new ApexCharts(document.querySelector("#chart5"), chart5);
chart5.render();

var chart6 = {
    series: [
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

    colors: ["#AD7BE9"],

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

var chart6 = new ApexCharts(document.querySelector("#chart6"), chart6);
chart6.render();
    </script>
@endpush
