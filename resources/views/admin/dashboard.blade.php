@extends('admin.layouts.app')
@if (isset($page_title) && $page_title != '')
    @section('title', $page_title . ' | ' . config('app.name'))
@else
    @section('title', config('app.name'))
@endif
@section('styles')
    @parent

@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                @can('user-list')
                    <div class="col-md-3">
                        <a href="{{ route('admin.user.index') }}">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium">Total Users</p>
                                            <h4 class="mb-0">{{ $total_users }}</h4>
                                        </div>

                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                            <span class="avatar-title">
                                                <i class="bx bxs-group font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endcan

                @can('caste-list')
                    <div class="col-md-3">
                        <a href="{{ route('admin.caste.index') }}">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium">Total Castes</p>
                                            <h4 class="mb-0">{{ $total_castes }}</h4>
                                        </div>

                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                            <span class="avatar-title">
                                                <i class="bx bxs-group font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endcan

                @can('user-list')
                    <div class="col-md-3">
                        <a href="{{ route('admin.user.index') }}">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium">Total Surnames</p>
                                            <h4 class="mb-0">{{ $total_surnames }}</h4>
                                        </div>

                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                            <span class="avatar-title">
                                                <i class="bx bxs-group font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endcan

                @can('category-list')
                    <div class="col-md-3">
                        <a href="{{ route('admin.category.index') }}">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium">Total Categories</p>
                                            <h4 class="mb-0">{{ $total_categories }}</h4>
                                        </div>

                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                            <span class="avatar-title">
                                                <i class="bx bx-customize font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endcan
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Caste Chart</h4>

                    <div id="caste_chart" data-colors='["--bs-primary"]' class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Surname Chart</h4>

                    <div id="surname_chart" data-colors='["--bs-warning"]' class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Color Chart</h4>

                    <div id="color_chart" data-colors='["--bs-success", "--bs-danger", "--bs-info"]' class="apex-charts"  dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modals')

@endsection
@section('scripts')
    @parent
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script>
        let casteOptions;
        let casteChartColors = getChartColorsArray("caste_chart");
        let casteChartElement = document.getElementById('caste_chart');

        $.ajax({
            type: "POST",
            url: "{{ route('admin.get.caste.chart.data') }}",
            data: {
                _token: "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function (response) {
                casteOptions = barChartOptions(response.series, response.labels, casteChartColors);

                new ApexCharts(casteChartElement, casteOptions).render();
            }
        });

        let surnameOptions;
        let surnameChartColors = getChartColorsArray("surname_chart");
        let surnameChartElement = document.getElementById('surname_chart');

        $.ajax({
            type: "POST",
            url: "{{ route('admin.get.surname.chart.data') }}",
            data: {
                _token: "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function (response) {
                surnameOptions = barChartOptions(response.series, response.labels, surnameChartColors);

                new ApexCharts(surnameChartElement, surnameOptions).render();
            }
        });

        let colorOptions;
        let colorChartColors = getChartColorsArray("color_chart");
        let colorChartElement = document.getElementById('color_chart');

        $.ajax({
            type: "POST",
            url: "{{ route('admin.get.color.chart.data') }}",
            data: {
                _token: "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function (response) {
                colorOptions = {
                    chart: { height: 320, type: "donut" },
                    series: response.series,
                    labels: ["Green", "Red", "White"],
                    colors: colorChartColors,
                    legend: {
                        show: !0,
                        position: "bottom",
                        horizontalAlign: "center",
                        verticalAlign: "middle",
                        floating: !1,
                        fontSize: "14px",
                        offsetX: 0,
                    },
                    responsive: [
                        {
                        breakpoint: 600,
                            options: { chart: { height: 240 }, legend: { show: !1 } },
                        },
                    ],
                };

                new ApexCharts(colorChartElement, colorOptions).render();
            }
        });

        function getChartColorsArray(e) {
            if (null !== document.getElementById(e)) {
                var t = document.getElementById(e).getAttribute("data-colors");

                if (t) {
                    return (t = JSON.parse(t)).map(function (e) {
                        var t = e.replace(" ", "");

                        if (-1 === t.indexOf(",")) {
                            var r = getComputedStyle(document.documentElement).getPropertyValue(t);
                            return r || t;
                        }

                        var o = e.split(",");
                        return 2 != o.length ? t : "rgba(" + getComputedStyle(document.documentElement).getPropertyValue(o[0]) + "," + o[1] + ")";
                    });
                }
            }
        }

        function barChartOptions(series, labels, colors) {
            return {
                    chart: { height: 350, type: "bar", toolbar: { show: !1 } },
                    plotOptions: { bar: { dataLabels: { position: "top" } } },
                    dataLabels: {
                        enabled: !0,
                        formatter: function (e) {
                            return e + "%";
                        },
                        offsetY: -22,
                        style: { fontSize: "12px", colors: ["#304758"] },
                    },
                    series: [
                        {
                            name: "Total Users",
                            data: series,
                        },
                    ],
                    colors: colors,
                    grid: { borderColor: "#f1f1f1" },
                    xaxis: {
                        categories: labels,
                        position: "top",
                        labels: { offsetY: -18 },
                        axisBorder: { show: !1 },
                        axisTicks: { show: !1 },
                        crosshairs: {
                            fill: {
                                type: "gradient",
                                gradient: {
                                    colorFrom: "#D8E3F0",
                                    colorTo: "#BED1E6",
                                    stops: [0, 100],
                                    opacityFrom: 0.4,
                                    opacityTo: 0.5,
                                },
                            },
                        },
                        tooltip: { enabled: !0, offsetY: -35 },
                    },
                    fill: {
                        gradient: {
                            shade: "light",
                            type: "horizontal",
                            shadeIntensity: 0.25,
                            gradientToColors: void 0,
                            inverseColors: !0,
                            opacityFrom: 1,
                            opacityTo: 1,
                            stops: [50, 0, 100, 100],
                        },
                    },
                    yaxis: {
                        axisBorder: { show: !1 },
                        axisTicks: { show: !1 },
                        labels: {
                            show: !1,
                            formatter: function (e) {
                                return e;
                            },
                        },
                    },
                }
        }
    </script>
@endsection
