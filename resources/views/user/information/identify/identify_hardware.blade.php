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
            <div class="subpage-table-container">
                <div class="subpage-table-btn-wrap col-group">
                    <a href="" class="subpage-table-btn">
                        Add
                    </a>
                    <button class="subpage-table-btn" type="button">
                        Delete
                    </button>
                    <button href="" class="subpage-table-btn" id="modify">
                        Modify
                    </button>
                </div>
                <div class="subpage-table-wrap">
                    <table class="subpage-table identify-table identify-hardware-table">
                        <colgroup>
                            <col width="150px">
                            <col width="150px">
                            <col width="95px">
                            <col width="95px">
                            <col width="240px">
                            <col width="170px">
                            <col width="130px">
                            <col width="55px">
                            <col width="55px">
                            <col width="55px">
                            <col width="55px">
                            <col width="55px">
                        </colgroup>
                        <thead>
                        <tr>
                            <th colspan="4" style="text-align: center;">
                                System Information
                            </th>
                            <th colspan="9" style="text-align: center;">
                                Hardware components
                            </th>
                        </tr>
                        <tr>
                            <th>System Category</th>
                            <th>System Name</th>
                            <th>Supplier</th>
                            <th>Model</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Model</th>
                            <th>Q'ty</th>
                            <th>Ver.</th>
                            <th>RJ45</th>
                            <th>USB</th>
                            <th>Serial</th>
                            <th>IP Address</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td rowspan="6">Navigation</td>
                            <td rowspan="6">Automatic Identification System</td>
                            <td rowspan="6">FURUNO</td>
                            <td rowspan="6">FA-170</td>
                            <td>DISTRIBUTOR</td>
                            <td>AN-BCC(P)</td>
                            <td>DB-1</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>TRANSPONDER UNIT</td>
                            <td>AN-BCC(P)</td>
                            <td>FA-1701</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>1</td>
                            <td>6</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>AC/DC POWER SUPPLY UNIT</td>
                            <td>AN-BCC(P)</td>
                            <td>PR-241</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>MONITOR UNIT</td>
                            <td>AN-BCC(P)</td>
                            <td>FA-1702</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>PILOT PLUG UNIT</td>
                            <td>AN- W/H FRONT WALL</td>
                            <td>FXPP-01</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>GPS/VHF ANTENNA</td>
                            <td>AN-COMPASS DK</td>
                            <td>GVA-100-T</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="7">Navigation</td>
                            <td rowspan="7">Voyage Data Recorder</td>
                            <td rowspan="7">FURUNO</td>
                            <td rowspan="7">VR-7000</td>
                            <td>DATA COLLECTING UNIT</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>VR-7010</td>
                            <td>1</td>
                            <td>-</td>
                            <td>13</td>
                            <td>1</td>
                            <td>8</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>FIXED DATA RECORDING UNIT</td>
                            <td>AN-COMPASS DK</td>
                            <td>VR-7024F</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>DATA RECORDING UNIT (FLOATING TYPE)</td>
                            <td>AN-BRIDGE WING(P)</td>
                            <td>VR-7020</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>REMOTE ALARM PANEL</td>
                            <td>AN- BCC(C)</td>
                            <td>VR-7017</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>MICROPHONE</td>
                            <td>AN- CEILING</td>
                            <td>VR-7011</td>
                            <td>5</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>MICROPHONE</td>
                            <td>AN- BRIDGE WING CONSOLE</td>
                            <td>VR-7012W</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>JUNCTION BOX</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>IF-8540</td>
                            <td>4</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>8</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Navigation</td>
                            <td>Navigation Assistance System</td>
                            <td>O.F.E</td>
                            <td>PENDING</td>
                            <td>TBD</td>
                            <td>TBD</td>
                            <td>TBD</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="9">Navigation</td>
                            <td rowspan="9">Echo Sounder</td>
                            <td rowspan="9">FURUNO</td>
                            <td rowspan="9"> FE-800</td>
                            <td>TRANSCEIVER UNIT</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>FE-8020</td>
                            <td>1</td>
                            <td>-</td>
                            <td>1</td>
                            <td>6</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>REMOTE DISPLAY</td>
                            <td>AN- M.I.P</td>
                            <td>RD-50</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>MAIN DISPLAY</td>
                            <td>AN-CHART TABLE CONSOLE</td>
                            <td>FE-8010</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>INTERFACE UNIT</td>
                            <td>AN-CHART TABLE CONSOLE</td>
                            <td>IF-2550-IEC1
                                PP-900 MODE
                            </td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>PRINTER</td>
                            <td>AN-CHART TABLE CONSOLE</td>
                            <td>PP-900</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>SMALL J/B</td>
                            <td>AU-C/D, WP-ACC. UNDER P/W</td>
                            <td>JB-003</td>
                            <td>3</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>MACHING BOX</td>
                            <td>BOSUN STORE, E5-E/R 2ND DK</td>
                            <td>MB-504</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>INTERFACE UNIT</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>IF-2550-IEC1</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>TRANSDUCER</td>
                            <td>BF-SHELL BTM, E1-E/R FLOOR</td>
                            <td>-</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="7">Navigation</td>
                            <td rowspan="7">Doppler Speed Log</td>
                            <td rowspan="7">FURUNO</td>
                            <td rowspan="7">DS-85</td>
                            <td>DISTRIBUTOR</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>DS-8510</td>
                            <td>1</td>
                            <td>-</td>
                            <td>1</td>
                            <td>1</td>
                            <td>10</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>DISPLAY UNIT</td>
                            <td>AN-CHART TABLE CONSOLE</td>
                            <td>DS-8500</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>REMOTE DISPLAY</td>
                            <td>AN- M.I.P, AN- BCC(P)</td>
                            <td>RD-20</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>JUNCTION BOX</td>
                            <td>AU-C/D</td>
                            <td>CI-630</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>TRANSCEIVER</td>
                            <td>BS-BOSUN STORE</td>
                            <td>DS-8520</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>INTERFACE UNIT</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>IF-2550</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>TRANSDUCER</td>
                            <td>BF-SHELL BTM</td>
                            <td>DS-8530</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="4">Navigation</td>
                            <td rowspan="4">Satellite Speed Log</td>
                            <td rowspan="4">FURUNO</td>
                            <td rowspan="4"> GS-100</td>
                            <td>DISPLAY UNIT</td>
                            <td>AN-CHART TABLE CONSOLE</td>
                            <td>GS-1002</td>
                            <td>1</td>
                            <td>-</td>
                            <td>1</td>
                            <td>1</td>
                            <td>4</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>JUNCTION BOX</td>
                            <td>AN-CHART TABLE CONSOLE</td>
                            <td>GS-1003</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>REMOTE DISPLAY</td>
                            <td>AN-M.I.P</td>
                            <td>RD-50</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ANTENNA UNIT</td>
                            <td>AN-COMPASS DK</td>
                            <td>GS-1001</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="11">Navigation</td>
                            <td rowspan="11">Marine Radar</td>
                            <td rowspan="11">FURUNO</td>
                            <td rowspan="11">FAR-2338S-NXT
                                FAR-2328
                            </td>
                            <td>S-BAND RADAR SCANNER UNIT</td>
                            <td>AN-S-BAND RADAR POST</td>
                            <td>RSB-133-111</td>
                            <td>1</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>S-BAND RADAR PROCESSOR UNIT</td>
                            <td>AN-BCC</td>
                            <td>RPU-025</td>
                            <td>1</td>
                            <td>-</td>
                            <td>2</td>
                            <td>-</td>
                            <td>7</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>UPS (FOR S-BAND RADAR & NO.1 ECDIS)</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>FK-3000M</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>S-BAND MONITOR UNIT</td>
                            <td>AN-BCC</td>
                            <td>MU-270W</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>S-BAND CONTROL UNIT</td>
                            <td>AN-BCC</td>
                            <td>RCU-014</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>X-BAND RADAR SCANNER UNIT</td>
                            <td>AN-X-BAND RADAR POST</td>
                            <td>RSB-128-106</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>X-BAND RADAR PROCESSOR UNIT</td>
                            <td>AN-BCC</td>
                            <td>RPU-025</td>
                            <td>1</td>
                            <td>-</td>
                            <td>2</td>
                            <td>-</td>
                            <td>7</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>UPS (FOR X-BAND RADAR & NO.2 ECDIS)</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>FK-3000M</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>X-BAND MONITOR UNIT</td>
                            <td>AN-BCC</td>
                            <td>MU-270W</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>X-BAND CONTROL UNIT</td>
                            <td>AN-BCC</td>
                            <td>RCU-014</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>X-BAND RADAR INTELLIGENT HUB</td>
                            <td>AN-BCC</td>
                            <td>HUB-3000</td>
                            <td>1</td>
                            <td>-</td>
                            <td>8</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="15">Navigation</td>
                            <td rowspan="15">ECDIS (incl. Conning Display)</td>
                            <td rowspan="15">FURUNO</td>
                            <td rowspan="15">FMD-3300</td>
                            <td>NO.1 ECDIS PROCESSOR UNIT</td>
                            <td>AN-BCC</td>
                            <td>EC-3000</td>
                            <td>1</td>
                            <td>-</td>
                            <td>2</td>
                            <td>4</td>
                            <td>8</td>
                            <td>239.192.0.1 to 239.192.0.16</td>
                        </tr>
                        <tr>
                            <td>NO.1 27" NO.1 ECDIS MONITOR UNIT</td>
                            <td>AN-BCC</td>
                            <td>MU-270W</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.1 CONTROL UNIT</td>
                            <td>AN-BCC</td>
                            <td>RCU-024</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.1 ECDIS MONITOR UNIT</td>
                            <td>AN-BWC(S)</td>
                            <td>HD24T22FUD</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.2 ECDIS PROCESSOR UNIT</td>
                            <td>AN-BCC</td>
                            <td>EC-3000</td>
                            <td>1</td>
                            <td>-</td>
                            <td>2</td>
                            <td>4</td>
                            <td>8</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>NO.2 27" NO.1 ECDIS MONITOR UNIT</td>
                            <td>AN-BCC</td>
                            <td>MU-270W</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.2 CONTROL UNIT</td>
                            <td>AN-BCC</td>
                            <td>RCU-024</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.2 ECDIS MONITOR UNIT</td>
                            <td>AN-BWC(S)</td>
                            <td>HD24T22FUD</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.1 ECDIS+CONNING SENSOR ADAPTER SERIAL</td>
                            <td>AN-BCC</td>
                            <td>MC-3000S</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.1 ECDIS+CONNING AC/DC POWER SUPPLY UNIT</td>
                            <td>AN-BCC</td>
                            <td>PR-241</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.1 ECDIS+CONNING INTELLIGENT HUB #1</td>
                            <td>AN-BCC</td>
                            <td>HUB-3000</td>
                            <td>1</td>
                            <td>-</td>
                            <td>8</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.1 ECDIS+CONNING INTELLIGENT HUB #2</td>
                            <td>AN-BCC</td>
                            <td>HUB-3000</td>
                            <td>1</td>
                            <td>-</td>
                            <td>8</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.1 ECDIS+CONNING INTELLIGENT HUB #3</td>
                            <td>AN-BCC</td>
                            <td>HUB-3000</td>
                            <td>1</td>
                            <td>-</td>
                            <td>8</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>HERMACE SERVICE GATEWAY</td>
                            <td>AN-BCC</td>
                            <td>O.F.E</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>27" NO.1 CONNING MONITOR UNIT</td>
                            <td>AN-BCC</td>
                            <td>MU-270W</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="6">Communication</td>
                            <td rowspan="6">MF/HF/DSC Radio</td>
                            <td rowspan="6">FURUNO</td>
                            <td rowspan="6">RC-1800F2-2D</td>
                            <td>GMDSS CONSOLE</td>
                            <td>AN-RADIO TABLE</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>1</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>RADIO BATTERY 24V 200AH</td>
                            <td>AN-BATTERY RM</td>
                            <td>SLD 200-2</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>MF/HF RADIO SYSTEM PRE-AMP UNIT</td>
                            <td>AN-COMPASS DK</td>
                            <td>FAX-5</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>MF/HF RADIO SYSTEM ANATENNA COUPLER</td>
                            <td>AN-NAV-DK</td>
                            <td>AT-5075</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8M TX/RX WHIP ANTENNA</td>
                            <td>AN-NAV-DK</td>
                            <td>WH-027-8M02</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>2.6M WHIP ANTENNA</td>
                            <td>AN-NAV-DK</td>
                            <td>04S4176</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="8">Communication</td>
                            <td rowspan="8">NO.1 & 2 SATCOM-C (incl. SSAS & LRIT)</td>
                            <td rowspan="8">FURUNO</td>
                            <td rowspan="8">FELCOM 18</td>
                            <td>INMARSAT-C PRINTER</td>
                            <td>AN-RADIO TABLE</td>
                            <td>PP-520</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>INMARSAT-C TERMINAL UNIT</td>
                            <td>AN-RADIO TABLE</td>
                            <td>-</td>
                            <td>2</td>
                            <td>-</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>INMARSAT-C KEYBOARD</td>
                            <td>AN-RADIO TABLE</td>
                            <td>-</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>PRINTER INTERFACE</td>
                            <td>AN-RADIO TABLE</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>DISTRESS CALL UNIT</td>
                            <td>AN -BCC(S)</td>
                            <td>IC-305</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ALARM UNIT</td>
                            <td>AN -RADIO TABLE UNDER</td>
                            <td>IC-306</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>SSAS ALERT UNIT</td>
                            <td>AU -SHIP'S OFFICE TABLE UNDER</td>
                            <td>IC-307</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>INMARSAT-C ANTENNA</td>
                            <td>AN-ANTENNA POST</td>
                            <td>IC-118</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="5">Communication</td>
                            <td rowspan="5">DGPS Navigator</td>
                            <td rowspan="5">FURUNO</td>
                            <td rowspan="5"> GP-170</td>
                            <td>DISPLAY UNIT</td>
                            <td>AN - BCC</td>
                            <td>GP-170</td>
                            <td>2</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>PRINTER</td>
                            <td>AN - BCC</td>
                            <td>PP-900</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td> INTERFACE UNIT</td>
                            <td>AN - BCC</td>
                            <td> IF-2550-IEC1</td>
                            <td>7</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td> SELETOR SWITCH</td>
                            <td>AN - BCC</td>
                            <td>FKGSW-P</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td> DGPS ANTENNA</td>
                            <td>AN-COMPASS DK</td>
                            <td>GPA-021S</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="6">Communication</td>
                            <td rowspan="6">Auto Telephone System</td>
                            <td rowspan="6">MRC</td>
                            <td rowspan="6">MED-100</td>
                            <td>EXCHANGER RACK</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>MED-100</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>FIREWALL</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>PoE S/W HUB FOR EXCHANGER RACK</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>-</td>
                            <td>2</td>
                            <td>-</td>
                            <td>24</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>IP TELEPHONE</td>
                            <td>ACCOM.</td>
                            <td>LVD-111A</td>
                            <td>31</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>SUB-RACK</td>
                            <td>E4-ECR.ECCC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>5</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>HUB FOR SUB-RACK</td>
                            <td>E4-ECR.ECCC</td>
                            <td>-</td>
                            <td>TBD</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="5">Communication</td>
                            <td rowspan="5">Ship's Network System</td>
                            <td rowspan="5">O.F.E</td>
                            <td rowspan="5"></td>
                            <td>MAIN RACK</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>O.F.E</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>HUB FOR SUB-RACK</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>O.F.E</td>
                            <td>TBD</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>SUB-RACK</td>
                            <td>E4-EER</td>
                            <td>O.F.E</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>HUB FOR SUB-RACK</td>
                            <td>E4-EER</td>
                            <td>O.F.E</td>
                            <td>TBD</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>SHIP'S COMPUTER</td>
                            <td>ACCOM.</td>
                            <td>O.F.E</td>
                            <td>25</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="6">Communication</td>
                            <td rowspan="6">VSAT (incl. Smart Ship Solution System)</td>
                            <td rowspan="6">O.F.E</td>
                            <td rowspan="6">PENDING</td>
                            <td>MAIN RACK</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>O.F.E</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>S/W HUB</td>
                            <td>AG-NAV. LOCKER & EER</td>
                            <td>O.F.E</td>
                            <td>3</td>
                            <td>-</td>
                            <td>8</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>IP TELEPHONE</td>
                            <td>ACCOM.</td>
                            <td>O.F.E</td>
                            <td>7</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ACCESS POINT</td>
                            <td>ECR, SHIP'S OFFICE, W/H</td>
                            <td>O.F.E</td>
                            <td>6</td>
                            <td>-</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>VSAT ANTENNA</td>
                            <td>AN-ANTENNA POST</td>
                            <td>O.F.E</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>BACKUP CERTUS ANTENNA</td>
                            <td>AN-ANTENNA POST</td>
                            <td>O.F.E</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="26">Control & Instrumentation</td>
                            <td rowspan="26">M/E Control System</td>
                            <td rowspan="26">HHI-EMD</td>
                            <td rowspan="26">MAN B&W 7G95ME-C10.5-LGIM</td>
                            <td>M/E ECS UPS A</td>
                            <td>E/R 3RD DK-SWBD RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>MOP-A MONITOR</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>MOP-B MONITOR</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ROUTER</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>MANAGED SWITCH</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EMS MOP MONITOR</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>Triton MOP</td>
                            <td>1</td>
                            <td>-</td>
                            <td>1</td>
                            <td>4</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EMS MOP PC</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EICU-A</td>
                            <td>E/R 3RD DK - ECR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EICU-B</td>
                            <td>E/R 3RD DK - ECR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>CNS-A&B</td>
                            <td>E/R 3RD DK - ECR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ECC-1</td>
                            <td>E/R 4TH DK - M/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ECC-2</td>
                            <td>E/R 4TH DK - M/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>SFECC</td>
                            <td>E/R 4TH DK - M/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EGR CABINET</td>
                            <td>E/R 4TH DK - M/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>M/E ECS UPS B</td>
                            <td>E/R 3RD DK-SWBD RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NETWORK ADAPTER</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ECS FORCED COMMAND SWITCH</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>BMS CISCO ROUTER</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EMS-MOP PC</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EMS-MOP MONITOR</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EMS-MOP-B MONITOR</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EMS ETHERNET SWITCH</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EMS ROUTER</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EMS PMI DAU</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EGR HMI CONTROL TOUCH MONITOR</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EGR INTERFACE UNIT</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="43">Control & Instrumentation</td>
                            <td rowspan="43">Integrated Control and Monitoring System</td>
                            <td rowspan="43">HGS</td>
                            <td rowspan="43">HiCONiS</td>
                            <td>OWS31</td>
                            <td>BCC</td>
                            <td>DPC-OT22</td>
                            <td>1</td>
                            <td>-</td>
                            <td>2</td>
                            <td>6</td>
                            <td>1</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>OWS11</td>
                            <td>E/R 3RD DE-ECR</td>
                            <td>DPC-OT22</td>
                            <td>1</td>
                            <td>-</td>
                            <td>2</td>
                            <td>6</td>
                            <td>1</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>OWS12</td>
                            <td>E/R 3RD DE-ECR</td>
                            <td>DPC-OT22</td>
                            <td>1</td>
                            <td>-</td>
                            <td>2</td>
                            <td>6</td>
                            <td>1</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>OWS13</td>
                            <td>AG-CHIEF ENGINEER'S DAY ROOM</td>
                            <td>DPC-OT22</td>
                            <td>1</td>
                            <td>-</td>
                            <td>2</td>
                            <td>6</td>
                            <td>1</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>OWS14</td>
                            <td>AU-SHIP OFFICE</td>
                            <td>DPC-OT22</td>
                            <td>1</td>
                            <td>-</td>
                            <td>2</td>
                            <td>6</td>
                            <td>1</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>OWS15</td>
                            <td>AU-SHIP OFFICE</td>
                            <td>DPC-OT22</td>
                            <td>1</td>
                            <td>-</td>
                            <td>2</td>
                            <td>6</td>
                            <td>1</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC13</td>
                            <td>E/R 4TH DK-S/G CONV.RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC14</td>
                            <td>TR & MACHINERY SPACE(S)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC15</td>
                            <td>E/R 3RD DK-ECR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC15-1</td>
                            <td>E/R 3RD DK-ECR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC69</td>
                            <td>E/R 3RD DK-ECR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC12-1</td>
                            <td>E/R 3RD DK-SWBD RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC12-2</td>
                            <td>E/R 3RD DK-SWBD RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC11-1</td>
                            <td>E/R 3RD DK-SWBD RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC11-2</td>
                            <td>E/R 3RD DK-SWBD RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC11/31</td>
                            <td>E/R 3RD DK-SWBD RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC12/32</td>
                            <td>E/R 3RD DK-SWBD RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC32-1</td>
                            <td>UNDER DK P/W(P)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC32-2</td>
                            <td>UNDER DK P/W(P)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC32-3</td>
                            <td>UNDER DK P/W(P)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC32-4</td>
                            <td>UNDER DK P/W(P)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC32-5</td>
                            <td>UNDER DK P/W(P)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC32-6</td>
                            <td>UNDER DK P/W(P)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC31-1</td>
                            <td>UNDER DK P/W(S)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC31-2</td>
                            <td>UNDER DK P/W(S)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC31-3</td>
                            <td>UNDER DK P/W(S)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC31-4</td>
                            <td>UNDER DK P/W(S)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC31-5</td>
                            <td>UNDER DK P/W(S)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS FC31-6</td>
                            <td>UNDER DK P/W(S)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>MALWARE PROTECTION SYSTEM</td>
                            <td>AN-BCC(S)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>2</td>
                            <td>4</td>
                            <td>4</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>RMS SERVER</td>
                            <td>AN-BCC(S)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ALARM & LOG PRINTER</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>1</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>HISTORIAN STATION</td>
                            <td>AG-NAVI.LKR&EER(IN NDU)</td>
                            <td>SPC-OT21</td>
                            <td>1</td>
                            <td>-</td>
                            <td>2</td>
                            <td>6</td>
                            <td>1</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>FIREWALL</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS MANAGED HUB A1</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td> EDS-516A-MM-SC</td>
                            <td>1</td>
                            <td>-</td>
                            <td>16</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS MANAGED HUB B1</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td> EDS-516A-MM-SC</td>
                            <td>1</td>
                            <td>-</td>
                            <td>16</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS MANAGED HUB A2</td>
                            <td>AG - NAV. LKR & E.E.R</td>
                            <td> EDS-516A-MM-SC</td>
                            <td>1</td>
                            <td>-</td>
                            <td>16</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ICMS MANAGED HUB B2</td>
                            <td>AG - NAV. LKR & E.E.R</td>
                            <td> EDS-516A-MM-SC</td>
                            <td>1</td>
                            <td>-</td>
                            <td>16</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EAS MANAGER - M1</td>
                            <td>AG - NAV. LKR & E.E.R</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>EAS MANAGER - M2</td>
                            <td>AG - NAV. LKR & E.E.R</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>FIREWALL (IN FC11/FC31)</td>
                            <td>E4 - SWBD ROOM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>FIREWALL (IN FC12/FC32)</td>
                            <td>E4 - SWBD ROOM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>FIREWALL (IN FC15)</td>
                            <td>E/R 3RD DK - ECR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="4">Control & Instrumentation</td>
                            <td rowspan="4">Emergency Shutdown System</td>
                            <td rowspan="4">HGS</td>
                            <td rowspan="4">HiCONiS</td>
                            <td>ICMS FC61 (ESDS)</td>
                            <td>E/R 3RD DK - ECR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>ESD BRIDGE CONSOLE PLATE</td>
                            <td>AN - B.C.C(S)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ESD BOX</td>
                            <td>AU - SHIP'S OFFICE</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ESD E.C.C. PLATE</td>
                            <td>E/R 3RD DK -ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="43">Control & Instrumentation</td>
                            <td rowspan="43">DF G/E Control System</td>
                            <td rowspan="43">HHI-EMD</td>
                            <td rowspan="43">9H32DF-LM</td>
                            <td>NO.1 & 2 G/E POWER SUPPLY UNIT (P1)</td>
                            <td>E/R 3RD DK - ECR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.1 G/E MAIN CONTROL PANEL (MCP)</td>
                            <td>E/R 3RD DK - NO.1 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.1 G/E LOCAL OPERATING PANEL (LOP)</td>
                            <td>E/R 3RD DK - NO.1 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.1 G/E AUXILIARY CONTROL PANEL (ACP)</td>
                            <td>E/R 3RD DK -ECR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>NO.1 G/E INTERFACE BOX (B2)</td>
                            <td>E/R 3RD DK- NO.1 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.1 G/E INJECTION CONTROL MODULE (ICM)</td>
                            <td>E/R 3RD DK- NO.1 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.1 G/E CYLINDER MONITORING MODULE (CMM)</td>
                            <td>E/R 3RD DK- NO.1 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.2 G/E MAIN CONTROL PANEL (MCP)</td>
                            <td>E/R 3RD DK - NO.2 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.2 G/E LOCAL OPERATING PANEL (LOP)</td>
                            <td>E/R 3RD DK - NO.2 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.2 G/E AUXILIARY CONTROL PANEL (ACP)</td>
                            <td>E/R 3RD DK -ECR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>NO.2 G/E INTERFACE BOX (B2)</td>
                            <td>E/R 3RD DK - NO.2 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.2 G/E INJECTION CONTROL MODULE (ICM)</td>
                            <td>E/R 3RD DK - NO.2 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.2 G/E CYLINDER MONITORING MODULE (CMM)</td>
                            <td>E/R 3RD DK - NO.2 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.2 G/E FUEL VALVE TRAIN (TB120)</td>
                            <td>E/CASING UPP-DK</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.2 G/E FUEL VALVETRAIN (TB112)</td>
                            <td>EC - METHANOL FUEL PREP.RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.3 G/E POWER SUPPLY UNIT (P1)</td>
                            <td>E/R 3RD DK - ECR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.3 G/E MAIN CONTROL PANEL (MCP)</td>
                            <td>E/R 3RD DK - NO.3 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.3 G/E LOCAL OPERATING PANEL (LOP)</td>
                            <td>E/R 3RD DK - NO.3 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.3 G/E AUXILIARY CONTROL PANEL (ACP)</td>
                            <td>E/R 3RD DK -ECR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>NO.3 G/E INTERFACE BOX (B2)</td>
                            <td>E/R 3RD DK - NO.3 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.3 G/E INJECTION CONTROL MODULE (ICM)</td>
                            <td>E/R 3RD DK - NO.3 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.3 G/E CYLINDER MONITORING MODULE (CMM)</td>
                            <td>E/R 3RD DK - NO.3 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.3 G/E FUEL VALVETRAIN (TB120)</td>
                            <td>E/CASING UPP-DK</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.3 G/E FUEL VALVETRAIN (TB112)</td>
                            <td>EC - METHANOL FUEL PREP.RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.4 & 5 G/E POWER SUPPLY UNIT (P1)</td>
                            <td>E/R 3RD DK - ECR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.4 G/E MAIN CONTROL PANEL (MCP)</td>
                            <td>E/R 3RD DK - NO.4 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.4 G/E LOCAL OPERATING PANEL(LOP)</td>
                            <td>E/R 3RD DK - NO.4 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.4 G/E AUXILIARY CONTROL PANEL (ACP)</td>
                            <td>E/R 3RD DK -E.C.R.</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>NO.4 G/E INTERFACE BOX (B2)</td>
                            <td>E/R 3RD DK - NO.4 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.4 G/E INJECTION CONTROL MODULE (ICM)</td>
                            <td>E/R 3RD DK - NO.4 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.4 G/E CYLINDER MONITORING MODULE (CMM)</td>
                            <td>E/R 3RD DK - NO.4 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.4 G/E FUEL VALVE TRAIN (TB120)</td>
                            <td>E/CASING UPP-DK</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.4 G/E FUEL VALVE TRAIN (TB112)</td>
                            <td>EC - METHANOL FUEL PREP.RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.4 G/E FUEL VALVE TRAIN (TB111)</td>
                            <td>EC - METHANOL FUEL PREP.RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.5 G/E MAIN CONTROL PANEL (MCP)</td>
                            <td>E/R 3RD DK - NO.5 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.5 G/E LOCAL OPERATING PANEL (LOP)</td>
                            <td>E/R 3RD DK - NO.5 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.5 G/E AUXILIARY CONTROL PANEL (ACP)</td>
                            <td>E/R 3RD DK -E.C.R.</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>NO.5 G/E INTERFACE BOX (B2)</td>
                            <td>E/R 3RD DK - NO.5 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.5 G/E INJECTION CONTROL MODULE (ICM)</td>
                            <td>E/R 3RD DK - NO.5 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.5 G/E CYLINDER MONITORING MODULE (CMM)</td>
                            <td>E/R 3RD DK - NO.5 G/E BODY</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.5 G/E FUEL VALVE TRAIN (TB120)</td>
                            <td>E/CASING UPP-DK</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.5 G/E FUEL VALVE TRAIN (TB112)</td>
                            <td>EC - METHANOL FUELPREP.RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>NO.5 G/E FUEL VALVE TRAIN (TB111)</td>
                            <td>EC - METHANOL FUEL PREP.RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="3">Control & Instrumentation</td>
                            <td rowspan="3">Valve Remote Control System</td>
                            <td rowspan="3">HOPPE</td>
                            <td rowspan="3"></td>
                            <td>NO.1 VRCS LOCAL VALVE CONTROL CABINET</td>
                            <td>WP - PASSAGEWAY(P) NEAR NO.2 C/H AFT</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>NO.2 VRCS LOCAL VALVE CONTROL CABINET</td>
                            <td>WP - PASSAGEWAY(P) NEAR NO.6 C/H AFT</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>NO.3 VRCS LOCAL VALVE CONTROL CABINET</td>
                            <td>E/R FLOOR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="3">Control & Instrumentation</td>
                            <td rowspan="3">Anti-Heeling System</td>
                            <td rowspan="3">HOPPE</td>
                            <td rowspan="3"></td>
                            <td>ANTI-HEELING SYSTEM CONTROL CABINET</td>
                            <td>AU - SHIP'S OFFICE</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>2</td>
                            <td>3</td>
                            <td>10</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>ANTI-HEELING SYSTEM CONNECTION BOX</td>
                            <td>WP - PASS. WAY(P) (NEAR NO.5 HOLD)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>ANTI-HEELING LOCAL STARTER BOX</td>
                            <td>PH - NO.5 HOLD NEAR ANTI-HEELING PUMP)</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="7">Control & Instrumentation</td>
                            <td rowspan="7">Shaft Power Meter</td>
                            <td rowspan="7">VAF</td>
                            <td rowspan="7"></td>
                            <td>SHAFT POWER METER ETHERNET SWITCH</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>5</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>SHAFT POWER METER SIGNAL PROCESSING UNIT (SPU3-C)</td>
                            <td>E/R 2ND DK</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>3</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>SHAFT POWER METER
                                SIGNAL PROCESSING UNIT (SPU3-A)
                            </td>
                            <td>E/R 3RD DK</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>3</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>SHAFT POWER METER STATOR CONTROL BOX</td>
                            <td>E/R FLOOR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>SHAFT POWER METER STATOR UNIT</td>
                            <td>E/R FLOOR</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>PEM4 TOUCH SCREEN DISPLAY</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>3</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>IPC</td>
                            <td>E/R 3RD DK-ECR/ECC</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>2</td>
                            <td>4</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="3">Power</td>
                            <td rowspan="3">Shaft Generator System</td>
                            <td rowspan="3">ABB</td>
                            <td rowspan="3"></td>
                            <td>SHAFT GENERATOR CONVERTER</td>
                            <td>E/R 4TH DK-SG CONVERTER RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>SHAFT GENERATOR SGCS PANEL</td>
                            <td>E/R 4TH DK-SG CONVERTER RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>SHAFT GENERATOR 230VAC UPS</td>
                            <td>E/R 4TH DK-SG CONVERTER RM</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td rowspan="3">Power</td>
                            <td rowspan="3">Refeer Container Monitoring System</td>
                            <td rowspan="3">Emerson</td>
                            <td rowspan="3"></td>
                            <td>R.C.M.S COMPUTER</td>
                            <td>AU-SHIP'S OFFICE</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>TBD</td>
                        </tr>
                        <tr>
                            <td>R.C.M.S PRINTER</td>
                            <td>AU-SHIP'S OFFICE</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>R.C.M.S JB</td>
                            <td>AU-SHIP'S OFFICE</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>
                        <!-- <tr>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                        </tr> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- 대시보드 -->

</div>
</body>
</html>
