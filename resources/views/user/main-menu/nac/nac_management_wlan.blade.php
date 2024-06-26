<!DOCTYPE html>
<html lang="ko">
@include('user.components.head')
<body>
<div id="wrap">

    <!-- 상단 헤더 -->
    <header id="header">
        @include('user.components.header')
    </header>
    <!-- //상단 헤더 -->

    <!-- 좌측 메뉴 -->
    <div id="gnb">
        @include('user.components.sub_gnb')
    </div>
    <!-- //좌측 메뉴 -->

    <!-- 대시보드 -->
    <div class="dashboard">
        <div class="subpage">

            <div class="dashboard-menu-wrap col-group">
                <div class="dashboard-menu-nav col-group">
                    <div class="dashboard-menu-nav-item">
                        NAC
                    </div>
                    <i class="icon xi-angle-right"></i>
                    <div class="dashboard-menu-nav-item">
                        Management
                    </div>
                    <i class="icon xi-angle-right"></i>
                    <div class="dashboard-menu-nav-item active">
                        WLAN
                    </div>
                </div>
            </div>
            <!--                <div class="dashboard-head">
                                <div class="fragment"></div>

                                <div class="fragment">
                                    <div class="m-input-text type01">
                                        <input type="text">

                                        <i class="xi-search"></i>
                                    </div>
                                </div>
                            </div>-->

            <div class="subpage-table-container">
                <div class="subpage-table-wrap account-table-wrap">
                    <table class="m-table type01">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Agent</th>
                            <th>WLAN</th>
                            <th>AP</th>
                            <th>Platform</th>
                            <th>Mac</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="6" style="text-align: center;">No Data</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
    <!-- 대시보드 -->

</div>


<script>
    axios.get("http://118.130.110.156:90/api/nac/wlan", {
        params: {
            page: 1,
            pageSize: 30,
            apiKey: "26f59d5e-ffac-4e5b-b5b1-6251f57b89b3"
        }
    }).then(response => {
        console.log(response.data);
        response.data.data.result.map((item, index) => {
            if (index === 0)
                for (const key in item) {
                    $(".m-table.type01 thead tr").append(`<th>${key}</th>`)
                }

            $(".m-table.type01 tbody").append(`<tr></tr>`)

            for (const key in item) {
                if (item[key] === "")
                    $(".m-table.type01 tbody tr").append(`<td>-</td>`)
                else
                    $(".m-table.type01 tbody tr").append(`<td>${item[key]}</td>`)
            }
        });
    });
</script>
</body>
</html>
