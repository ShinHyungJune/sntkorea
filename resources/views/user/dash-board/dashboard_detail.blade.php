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
        <div id="dashboard_gnb">
            @include('user.components.dashboard_detail_gnb')
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
                    Control & Instrumentation Zone
                </h2>
            </div>

            <div class="dashboard-content">
                <div class="dashboard-content-wrap">
                    <div class="device-wrap" style="width: 770px; height: 370px; margin: 80px;">
                        <div class="device-item-group" style="top: 0; left: 0;"> <!-- 일렬 정렬 시 device-item-group -->
                            <div class="device-item up">
                                <div class="state"></div>
                                <img src="/images/dashboard_icon_network.png" alt="">
                            </div>
                            <div class="device-item up">
                                <div class="state"></div>
                                <img src="/images/dashboard_icon_firewall_clz.png" alt="">
                            </div>
                        </div>

                        <div class="device-item-group device-item-sub-group" style="top: 200px; left: 400px;">
                            <!-- 하위 그룹 및 일렬 정렬 시 device-item-sub-group -->
                            <div class="device-item device-btn up" data-title="Control System ICMS (A1)">
                                <div class="state state-num">8</div>
                                <img src="/images/dashboard_icon_controlsystem_icms_a1.png" alt="">
                            </div>
                            <div class="device-item device-btn up" data-title="Control System ICMS (B1)">
                                <div class="state state-num">8</div>
                                <img src="/images/dashboard_icon_controlsystem_icms_b1.png" alt="">
                            </div>
                            <div class="device-item device-btn warning" data-title="Control System ISS">
                                <div class="state state-num">3</div>
                                <img src="/images/dashboard_icon_controlsystem_iss.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- 확대/축소버튼 -->
                <div class="dashboard-btn-wrap col-group">
                    <button type="button" class="dashboard-btn renew-btn">
                        <i class="xi-renew"></i>
                    </button>

                    <div class="dashboard-btn-list col-group">
                        <button type="button" class="dashboard-btn plus-btn">
                            <i class="xi-plus-circle-o"></i>
                        </button>
                        <button type="button" class="dashboard-btn minus-btn">
                            <i class="xi-minus-circle-o"></i>
                        </button>
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

<!-- 디바이스 상세 팝업 -->
<div class="device-detail" style="display: none;">
    <div class="device-detail-wrap">
        <button class="close-btn">
            <i class="xi-close"></i>
        </button>
        <div class="device-detail-title-wrap">
            <p class="before">
                Control & Instrumentation Zone
            </p>
            <i class="xi-angle-right"></i>
            <p class="now"></p>
        </div>

        <div class="device-detail-group">
            <div class="device-detail-item device-item up">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>
        </div>
    </div>
</div>
<script>

    function showDeviceDetail(num) {
        // device-detail을 나타나게 함
        $('.device-detail').fadeIn();

        // device-detail-item을 동적으로 생성하여 추가
        var detailGroup = $('.device-detail-group');
        detailGroup.empty(); // 기존의 내용을 지움

        for (var i = 1; i <= num; i++) {
            var detailItem = $('<div class="device-detail-item device-item up">' +
                '<div class="state"></div>' +
                '<img src="/images/dashboard_icon_server.png" alt="">' +
                '</div>');

            // 생성된 detailItem을 detailGroup에 추가
            detailGroup.append(detailItem);
        }
    }

    $('.device-btn').click(function () {

        var data_title = $(this).attr('data-title');
        $('.device-detail').find('.now').text(data_title);

        var stateNum = parseInt($(this).find('.state-num').text());
        showDeviceDetail(stateNum);
    });

    $('.device-detail .close-btn').click(function () {
        $('.device-detail').fadeOut();
    });

</script>
</body>
</html>