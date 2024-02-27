<div class="dashboard-gnb">

    <div class="header-utc-wrap col-group">
        <p class="utc">
            UTC
        </p>
        <p class="utc-txt">
            23.09.18 17:53
        </p>
    </div>

    <div class="dashboard-gnb-container row-group">

        <div class="dashboard-gnb-wrap">
            <p class="dashboard-gnb-title">
                {{ $dashboardGnbTitle ?? 'dashboardGnbTitle' }}
            </p>
            <div class="dashboard-standard-wrap col-group">
                <div class="dashboard-standard-item up row-group m-script-pop noscript">
                    <div class="num">
                        {{$counts['Up']}}
                    </div>
                    <div class="txt">
                        UP
                    </div>
                </div>
                <div class="dashboard-standard-item down row-group m-script-pop noscript">
                    <div class="num">
                        {{$counts['Down']}}
                    </div>
                    <div class="txt">
                        Down
                    </div>
                </div>
                <div class="dashboard-standard-item critical row-group m-script-pop noscript">
                    <div class="num">
                        {{$counts['Warning']}}
                    </div>
                    <div class="txt">
                        Warning
                    </div>
                </div>
                <div class="dashboard-standard-item warning row-group m-script-pop noscript">
                    <div class="num">
                        {{$counts['Unusual']}}
                    </div>
                    <div class="txt">
                        Unusual
                    </div>
                </div>
            </div>
        </div>

        <div class="dashboard-gnb-wrap">
            <div class="dashboard-detail-chart-wrap">
                <canvas id="chart_bar"></canvas>
            </div>
        </div>

        <div class="dashboard-gnb-wrap">
            <div class="dashboard-detail-chart-circle-wrap">
                <canvas id="chart_donut"></canvas>
            </div>
        </div>

        <div class="dashboard-gnb-wrap">
            <p class="dashboard-gnb-title">
                Devices Status
            </p>
            <div class="devices-status-wrap">
                @foreach($totalDevices as $totalDevice)
                    @foreach($totalDevice["childDevices"] as $childDevice)
                        <div class="devices-status-item {{$childDevice["status"]}}">
                            <div class="txt-group">
                                <div class="state">
                                    {{$childDevice["status"]}}
                                </div>
                                <p class="ip">
                                    {{$childDevice["title"]}}
                                </p>
                            </div>
<!--                            <p class="date">
                                2023-12-20 17:53:10
                            </p>-->
                        </div>
                    @endforeach
                @endforeach

            </div>
        </div>
    </div>
</div>

@include('user.components.sub_gnb')

<script>
    const chart_bar = document.getElementById('chart_bar');

    var labels = [];

    var datasets = [
        {
            label: 'Down',
            data: [],
            backgroundColor: '#202020',
        },
        {
            label: 'Warning',
            data: [],
            backgroundColor: '#ff4620',
        },
        {
            label: 'Unusual',
            data: [],
            backgroundColor: '#ef9900',
        },
    ];

    var countsByDates = {!! json_encode($countsByDates) !!};

    countsByDates.map(countsByDate => {
       labels.push(countsByDate["title"]);
       datasets[0]["data"].push(countsByDate["Down"]);
       datasets[1]["data"].push(countsByDate["Warning"]);
       datasets[2]["data"].push(countsByDate["Unusual"]);
    });

    new Chart(chart_bar, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: datasets,
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    min: 0,
                    ticks: {
                        stepSize: 4, //y축 단위
                        font: function () {
                            return {
                                size: 10,
                                family: 'Pretendard'
                            }
                        },
                    }
                },
                x: {
                    ticks: {
                        font: function () {
                            return {
                                size: 10,
                                family: 'Pretendard'
                            }
                        },
                    }
                }
            },
            plugins: {
                legend: {
                    display: false,
                },
            },
        },
    });

    const chart_donut = document.getElementById('chart_donut');

    var data = [];

    var counts = {!! json_encode($counts) !!};

    new Chart(chart_donut, {
        type: 'doughnut',
        data: {
            labels: ["Down", "Warning", "UP", "Unusual"],
            datasets: [{
                data: [counts['Down'], counts['Warning'], counts['Up'], counts['Unusual']],
                backgroundColor: [
                    "#202020",
                    "#ff4620",
                    "#359832",
                    "#ef9900",
                ],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false,
                },
            },
        },
    });

</script>
