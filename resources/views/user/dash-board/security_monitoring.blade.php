<!DOCTYPE html>
<html lang="ko">
@include('user.components.head')
<body>
<div id="wrap">

    <div class="header dashboard_index">
        <!-- 상단 헤더 -->
        <header id="header">
            @include('user.components.header')
        </header>
        <!-- //상단 헤더 -->

        <!-- 좌측 메뉴 -->
        <div id="gnb">
            @include('user.components.gnb')
        </div>
        <!-- //좌측 메뉴 -->
    </div>

    <!-- 대시보드 -->
    <div class="dashboard dashboard-detail">
        <div class="dashboard-wrap row-group">

            <div class="dashboard-detail-title-wrap col-group">
                <a href="{{ route('dash-board.index') }}" class="prev-btn">
                    <i class="xi-arrow-left"></i>
                </a>
                <h2 class="dashboard-detail-title">
                    Security Monitoring
                </h2>
            </div>

            <div class="secutiry-monitoring-wrap dashboard-content">
                <div class="secutiry-monitoring-top-wrap">
                    <div class="secutiry-monitoring-top-item">
                        <div class="secutiry-monitoring-title-wrap">
                            <p class="secutiry-monitoring-title">
                                Detection Count
                            </p>
                            <p class="secutiry-monitoring-subtitle">
                                Last 24 hrs
                            </p>
                        </div>

                        <div class="secutiry-monitoring-top-chart">
                            <canvas id="detection_count_chart"></canvas>
                            <p class="num">
                                1,528
                            </p>
                        </div>
                    </div>
                    <div class="secutiry-monitoring-top-item">
                        <div class="secutiry-monitoring-title-wrap">
                            <p class="secutiry-monitoring-title">
                                CPU
                            </p>
                            <p class="secutiry-monitoring-subtitle">
                                Last 1 mins
                            </p>
                        </div>

                        <div class="secutiry-monitoring-top-chart">
                            <canvas id="cpu_chart"></canvas>
                            <p class="num">
                                8%
                            </p>
                        </div>
                    </div>
                    <div class="secutiry-monitoring-top-item">
                        <div class="secutiry-monitoring-title-wrap">
                            <p class="secutiry-monitoring-title">
                                EPS (Event Per Second)
                            </p>
                            <p class="secutiry-monitoring-subtitle">
                                Last 1 mins
                            </p>
                        </div>

                        <div class="secutiry-monitoring-top-chart">
                            <canvas id="eps_chart"></canvas>
                            <p class="num">
                                36
                            </p>
                        </div>
                    </div>
                </div>

                <div class="secutiry-monitoring-mid-wrap">

                    <div class="secutiry-monitoring-mid-item">
                        <div class="secutiry-monitoring-mid-chart-wrap">
                            <div class="secutiry-monitoring-title-wrap">
                                <p class="secutiry-monitoring-title">
                                    Top Attack
                                </p>
                                <p class="secutiry-monitoring-subtitle">
                                    Last 10 mins
                                </p>
                            </div>
                            <div class="secutiry-monitoring-mid-chart">
                                <div class="polar-area-chart">
                                    <div class="polar-area-chart-item polar-area-chart-item-01">
                                        <div class="img-box">
                                            <img src="/images/polar_item_01.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-02">
                                        <div class="img-box">
                                            <img src="/images/polar_item_02.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-03">
                                        <div class="img-box">
                                            <img src="/images/polar_item_03.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-04">
                                        <div class="img-box">
                                            <img src="/images/polar_item_04.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-05">
                                        <div class="img-box">
                                            <img src="/images/polar_item_05.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-06">
                                        <div class="img-box">
                                            <img src="/images/polar_item_06.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-07">
                                        <div class="img-box">
                                            <img src="/images/polar_item_07.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-08">
                                        <div class="img-box">
                                            <img src="/images/polar_item_08.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-09">
                                        <div class="img-box">
                                            <img src="/images/polar_item_09.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-10">
                                        <div class="img-box">
                                            <img src="/images/polar_item_10.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="secutiry-monitoring-result-list">
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">1</div>
                                <div class="txt-group">
                                    <p class="title">
                                        quic
                                    </p>
                                    <p class="data">
                                        17.0
                                    </p>
                                    <p class="percent">
                                        10.56%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">2</div>
                                <div class="txt-group">
                                    <p class="title">
                                        51.com.access
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">3</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">4</div>
                                <div class="txt-group">
                                    <p class="title">
                                        acme mini_httpd ar..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">5</div>
                                <div class="txt-group">
                                    <p class="title">
                                        emule
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">6</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">7</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">8</div>
                                <div class="txt-group">
                                    <p class="title">
                                        carbonite
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">9</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">10</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="secutiry-monitoring-mid-item">
                        <div class="secutiry-monitoring-mid-chart-wrap">
                            <div class="secutiry-monitoring-title-wrap">
                                <p class="secutiry-monitoring-title">
                                    Top Victim
                                </p>
                                <p class="secutiry-monitoring-subtitle">
                                    Last 10 mins
                                </p>
                            </div>
                            <div class="secutiry-monitoring-mid-chart">
                                <div class="polar-area-chart">
                                    <div class="polar-area-chart-item polar-area-chart-item-01">
                                        <div class="img-box">
                                            <img src="/images/polar_item_01.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-02">
                                        <div class="img-box">
                                            <img src="/images/polar_item_02.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-03">
                                        <div class="img-box">
                                            <img src="/images/polar_item_03.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-04">
                                        <div class="img-box">
                                            <img src="/images/polar_item_04.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-05">
                                        <div class="img-box">
                                            <img src="/images/polar_item_05.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-06">
                                        <div class="img-box">
                                            <img src="/images/polar_item_06.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-07">
                                        <div class="img-box">
                                            <img src="/images/polar_item_07.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-08">
                                        <div class="img-box">
                                            <img src="/images/polar_item_08.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-09">
                                        <div class="img-box">
                                            <img src="/images/polar_item_09.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-10">
                                        <div class="img-box">
                                            <img src="/images/polar_item_10.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="secutiry-monitoring-result-list">
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">1</div>
                                <div class="txt-group">
                                    <p class="title">
                                        quic
                                    </p>
                                    <p class="data">
                                        17.0
                                    </p>
                                    <p class="percent">
                                        10.56%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">2</div>
                                <div class="txt-group">
                                    <p class="title">
                                        51.com.access
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">3</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">4</div>
                                <div class="txt-group">
                                    <p class="title">
                                        acme mini_httpd ar..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">5</div>
                                <div class="txt-group">
                                    <p class="title">
                                        emule
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">6</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">7</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">8</div>
                                <div class="txt-group">
                                    <p class="title">
                                        carbonite
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">9</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">10</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="secutiry-monitoring-mid-item">
                        <div class="secutiry-monitoring-mid-chart-wrap">
                            <div class="secutiry-monitoring-title-wrap">
                                <p class="secutiry-monitoring-title">
                                    Top Attack
                                </p>
                                <p class="secutiry-monitoring-subtitle">
                                    Last 10 mins
                                </p>
                            </div>
                            <div class="secutiry-monitoring-mid-chart">
                                <div class="polar-area-chart">
                                    <div class="polar-area-chart-item polar-area-chart-item-01">
                                        <div class="img-box">
                                            <img src="/images/polar_item_01.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-02">
                                        <div class="img-box">
                                            <img src="/images/polar_item_02.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-03">
                                        <div class="img-box">
                                            <img src="/images/polar_item_03.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-04">
                                        <div class="img-box">
                                            <img src="/images/polar_item_04.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-05">
                                        <div class="img-box">
                                            <img src="/images/polar_item_05.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-06">
                                        <div class="img-box">
                                            <img src="/images/polar_item_06.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-07">
                                        <div class="img-box">
                                            <img src="/images/polar_item_07.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-08">
                                        <div class="img-box">
                                            <img src="/images/polar_item_08.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-09">
                                        <div class="img-box">
                                            <img src="/images/polar_item_09.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-10">
                                        <div class="img-box">
                                            <img src="/images/polar_item_10.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="secutiry-monitoring-result-list">
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">1</div>
                                <div class="txt-group">
                                    <p class="title">
                                        quic
                                    </p>
                                    <p class="data">
                                        17.0
                                    </p>
                                    <p class="percent">
                                        10.56%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">2</div>
                                <div class="txt-group">
                                    <p class="title">
                                        51.com.access
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">3</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">4</div>
                                <div class="txt-group">
                                    <p class="title">
                                        acme mini_httpd ar..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">5</div>
                                <div class="txt-group">
                                    <p class="title">
                                        emule
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">6</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">7</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">8</div>
                                <div class="txt-group">
                                    <p class="title">
                                        carbonite
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">9</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">10</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="secutiry-monitoring-mid-item">
                        <div class="secutiry-monitoring-mid-chart-wrap">
                            <div class="secutiry-monitoring-title-wrap">
                                <p class="secutiry-monitoring-title">
                                    Top Traffic by Source IP
                                </p>
                            </div>
                            <div class="secutiry-monitoring-mid-chart">
                                <div class="polar-area-chart">
                                    <div class="polar-area-chart-item polar-area-chart-item-01">
                                        <div class="img-box">
                                            <img src="/images/polar_item_01.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-02">
                                        <div class="img-box">
                                            <img src="/images/polar_item_02.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-03">
                                        <div class="img-box">
                                            <img src="/images/polar_item_03.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-04">
                                        <div class="img-box">
                                            <img src="/images/polar_item_04.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-05">
                                        <div class="img-box">
                                            <img src="/images/polar_item_05.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-06">
                                        <div class="img-box">
                                            <img src="/images/polar_item_06.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-07">
                                        <div class="img-box">
                                            <img src="/images/polar_item_07.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-08">
                                        <div class="img-box">
                                            <img src="/images/polar_item_08.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-09">
                                        <div class="img-box">
                                            <img src="/images/polar_item_09.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-10">
                                        <div class="img-box">
                                            <img src="/images/polar_item_10.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="secutiry-monitoring-result-list">
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">1</div>
                                <div class="txt-group">
                                    <p class="title">
                                        quic
                                    </p>
                                    <p class="data">
                                        17.0
                                    </p>
                                    <p class="percent">
                                        10.56%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">2</div>
                                <div class="txt-group">
                                    <p class="title">
                                        51.com.access
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">3</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">4</div>
                                <div class="txt-group">
                                    <p class="title">
                                        acme mini_httpd ar..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">5</div>
                                <div class="txt-group">
                                    <p class="title">
                                        emule
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">6</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">7</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">8</div>
                                <div class="txt-group">
                                    <p class="title">
                                        carbonite
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">9</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">10</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="secutiry-monitoring-mid-item">
                        <div class="secutiry-monitoring-mid-chart-wrap">
                            <div class="secutiry-monitoring-title-wrap">
                                <p class="secutiry-monitoring-title">
                                    Top Traffic by Destination IP
                                </p>
                            </div>
                            <div class="secutiry-monitoring-mid-chart">
                                <div class="polar-area-chart">
                                    <div class="polar-area-chart-item polar-area-chart-item-01">
                                        <div class="img-box">
                                            <img src="/images/polar_item_01.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-02">
                                        <div class="img-box">
                                            <img src="/images/polar_item_02.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-03">
                                        <div class="img-box">
                                            <img src="/images/polar_item_03.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-04">
                                        <div class="img-box">
                                            <img src="/images/polar_item_04.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-05">
                                        <div class="img-box">
                                            <img src="/images/polar_item_05.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-06">
                                        <div class="img-box">
                                            <img src="/images/polar_item_06.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-07">
                                        <div class="img-box">
                                            <img src="/images/polar_item_07.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-08">
                                        <div class="img-box">
                                            <img src="/images/polar_item_08.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-09">
                                        <div class="img-box">
                                            <img src="/images/polar_item_09.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="polar-area-chart-item polar-area-chart-item-10">
                                        <div class="img-box">
                                            <img src="/images/polar_item_10.png" alt="" class="img">
                                        </div>
                                        <div class="hover-box">
                                            <div class="detail-group">
                                                <p class="title">
                                                    Sip
                                                </p>
                                                <p class="txt">
                                                    quic
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Count
                                                </p>
                                                <p class="txt">
                                                    17.0
                                                </p>
                                            </div>
                                            <div class="detail-group">
                                                <p class="title">
                                                    Percent
                                                </p>
                                                <p class="txt">
                                                    10.56%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="secutiry-monitoring-result-list">
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">1</div>
                                <div class="txt-group">
                                    <p class="title">
                                        quic
                                    </p>
                                    <p class="data">
                                        17.0
                                    </p>
                                    <p class="percent">
                                        10.56%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">2</div>
                                <div class="txt-group">
                                    <p class="title">
                                        51.com.access
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">3</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">4</div>
                                <div class="txt-group">
                                    <p class="title">
                                        acme mini_httpd ar..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">5</div>
                                <div class="txt-group">
                                    <p class="title">
                                        emule
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">6</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">7</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">8</div>
                                <div class="txt-group">
                                    <p class="title">
                                        carbonite
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">9</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                            <div class="secutiry-monitoring-result-item">
                                <div class="num">10</div>
                                <div class="txt-group">
                                    <p class="title">
                                        apache http server..
                                    </p>
                                    <p class="data">
                                        16.0
                                    </p>
                                    <p class="percent">
                                        9.94%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 알람 -->
<div class="m-swiper type01" style="display: none;">
    <div class="swiper-container">
        <div class="swiper-wrapper">

        </div>

        <div class="swiper-pagination"></div>

        <div class="btns">
            <div class="swiper-btn swiper-btn-prev">
                <i class="xi-angle-left"></i>
            </div>
            <div class="swiper-btn swiper-btn-next">
                <i class="xi-angle-right"></i>
            </div>

        </div>
    </div>
</div>
<script>

    //detection_count_chart

    const geeksData = {
        labels: ['12:00', '13:00', '14:00', '15:00', '16:00',
            '17:00', '18:00', '19:00', '20:00', '21:00'],
        datasets: [{
            label: '',
            data: [120, 150, 80, 200, 130,
                180, 110, 160, 90, 220,],
            borderWidth: 1,
            borderColor: '#502ecf',
        }]
    };
    const detection_count_chart = document.getElementById('detection_count_chart');
    new Chart(detection_count_chart, {
        type: 'line',
        data: geeksData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    display: false
                },
                x: {
                    display: false
                },
            },
            plugins: {
                legend: {
                    display: false
                },
                decimation: {
                    enabled: true,
                    algorithm: 'lttb',
                },
            },
            elements: {
                point: {
                    radius: 0, //선형 그래프 포인트 삭제
                },
            },
        }
    });

    //CPU
    const cpu_chart = document.getElementById('cpu_chart');
    new Chart(cpu_chart, {
        type: 'line',
        data: {
            labels: ['18:05', '18:06', '18:07', '18:08', '18:09', '18:10', '18:11', '18:12', '18:13', '18:14', '18:15'],
            datasets: [
                {
                    label: '',
                    data: [0, 22, 24, 28, 43, 2, 22, 24, 28, 43, 2, 22, 24, 28, 43,],
                    borderWidth: 2,
                    borderColor: '#359832',
                    fill: true,
                    backgroundColor: '#e6f3e6',
                    tension: 0.4 //곡선그래프
                },
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    display: false
                },
                x: {
                    display: false
                },
            },
            plugins: {
                legend: {
                    display: false
                },
            },
            elements: {
                point: {
                    radius: 0, //선형 그래프 포인트 삭제
                },
            },
        },
    });

    //EPS
    const eps_chart = document.getElementById('eps_chart');
    new Chart(eps_chart, {
        type: 'line',
        data: {
            labels: ['18:05', '18:06', '18:07', '18:08', '18:09', '18:10', '18:11', '18:12', '18:13', '18:14', '18:15'],
            datasets: [
                {
                    label: '',
                    data: [0, 22, 24, 28, 43, 2, 22, 24, 28, 43, 2, 22, 24, 28, 43,],
                    borderWidth: 2,
                    borderColor: '#202020',
                    fill: true,
                    backgroundColor: '#f5f5f5',
                    tension: 0.4 //곡선그래프
                },
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    display: false
                },
                x: {
                    display: false
                },
            },
            plugins: {
                legend: {
                    display: false
                },
            },
            elements: {
                point: {
                    radius: 0, //선형 그래프 포인트 삭제
                },
            },
        },
    });

</script>
</body>
</html>
