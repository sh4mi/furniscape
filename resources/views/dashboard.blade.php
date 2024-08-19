<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1>Furniscape Dashboard</h1>
    <!-- ============================================================== -->
    <!-- Manage Table & Walet Cards Section  -->
    <!-- ============================================================== -->
    <section class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Pending Orders</h5>
                        <p class="card-text">{{ $pendingOrders }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Delivered Orders</h5>
                        <p class="card-text">{{ $deliveredOrders }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Canceled Orders</h5>
                        <p class="card-text">{{ $canceledOrders }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="card overflow-hidden">
                    <div class="bg-success">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6 d-flex align-items-center">
                                    <div>
                                        <h2 class="mb-1 text-white">56</h2>
                                        <h5 class="mb-0 fw-normal text-white">Monthly Sales</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div id="total-income" style="min-height: 70px;">
                                        <div id="apexchartso6nizvz7"
                                            class="apexcharts-canvas apexchartso6nizvz7 apexcharts-theme-light"
                                            style="width: 169px; height: 70px;"><svg id="SvgjsSvg1550" width="169"
                                                height="70" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <foreignObject x="0" y="0" width="169" height="70">
                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                        style="max-height: 35px;"></div>
                                                </foreignObject>
                                                <rect id="SvgjsRect1554" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe"></rect>
                                                <g id="SvgjsG1591" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1552" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1551">
                                                        <clipPath id="gridRectMasko6nizvz7">
                                                            <rect id="SvgjsRect1556" width="175" height="72" x="-3"
                                                                y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMasko6nizvz7"></clipPath>
                                                        <clipPath id="nonForecastMasko6nizvz7"></clipPath>
                                                        <clipPath id="gridRectMarkerMasko6nizvz7">
                                                            <rect id="SvgjsRect1557" width="173" height="74" x="-2"
                                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1562" x1="0" y1="0"
                                                            x2="0" y2="1">
                                                            <stop id="SvgjsStop1563" stop-opacity="0.5"
                                                                stop-color="rgba(255,255,255,0.5)" offset="0"></stop>
                                                            <stop id="SvgjsStop1564" stop-opacity="0.03"
                                                                stop-color="rgba(255,255,255,0.03)" offset="1"></stop>
                                                            <stop id="SvgjsStop1565" stop-opacity="0.03"
                                                                stop-color="rgba(255,255,255,0.03)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <line id="SvgjsLine1555" x1="0" y1="0" x2="0" y2="70"
                                                        stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="70"
                                                        fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                        stroke-width="1">
                                                    </line>
                                                    <g id="SvgjsG1568" class="apexcharts-grid">
                                                        <g id="SvgjsG1569" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1572" x1="0" y1="0" x2="169" y2="0"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1573" x1="0" y1="14" x2="169" y2="14"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1574" x1="0" y1="28" x2="169" y2="28"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1575" x1="0" y1="42" x2="169" y2="42"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1576" x1="0" y1="56" x2="169" y2="56"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1577" x1="0" y1="70" x2="169" y2="70"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG1570" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1579" x1="0" y1="70" x2="169" y2="70"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt">
                                                        </line>
                                                        <line id="SvgjsLine1578" x1="0" y1="1" x2="0" y2="70"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG1571" class="apexcharts-grid-borders"
                                                        style="display: none;"></g>
                                                    <g id="SvgjsG1558"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1559" class="apexcharts-series" seriesName=""
                                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1566"
                                                                d="M 0 70 L 0 67.66666666666667C4.694444444444444, 67.66666666666667, 18.77777777777778, 67.66666666666667, 28.166666666666664, 67.66666666666667S47.29514852067525, 36.7803730663899, 56.33333333333333, 35S75.32184210540082, 38.72406060310147, 84.5, 37.33333333333333S103.34176992654928, 10.894190013639193, 112.66666666666666, 11.666666666666664S131.83057849698218, 40.13552414631781, 140.83333333333334, 42S165.73815769911744, 25.495027639243666, 169, 23.33333333333333 L 169 70 L 0 70M 0 67.66666666666667z"
                                                                fill="url(#SvgjsLinearGradient1562)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMasko6nizvz7)"
                                                                pathTo="M 0 70 L 0 67.66666666666667C4.694444444444444, 67.66666666666667, 18.77777777777778, 67.66666666666667, 28.166666666666664, 67.66666666666667S47.29514852067525, 36.7803730663899, 56.33333333333333, 35S75.32184210540082, 38.72406060310147, 84.5, 37.33333333333333S103.34176992654928, 10.894190013639193, 112.66666666666666, 11.666666666666664S131.83057849698218, 40.13552414631781, 140.83333333333334, 42S165.73815769911744, 25.495027639243666, 169, 23.33333333333333 L 169 70 L 0 70M 0 67.66666666666667z"
                                                                pathFrom="M -1 70 L -1 70 L 28.166666666666664 70 L 56.33333333333333 70 L 84.5 70 L 112.66666666666666 70 L 140.83333333333334 70 L 169 70">
                                                            </path>
                                                            <path id="SvgjsPath1567"
                                                                d="M 0 67.66666666666667C4.694444444444444, 67.66666666666667, 18.77777777777778, 67.66666666666667, 28.166666666666664, 67.66666666666667S47.29514852067525, 36.7803730663899, 56.33333333333333, 35S75.32184210540082, 38.72406060310147, 84.5, 37.33333333333333S103.34176992654928, 10.894190013639193, 112.66666666666666, 11.666666666666664S131.83057849698218, 40.13552414631781, 140.83333333333334, 42S165.73815769911744, 25.495027639243666, 169, 23.33333333333333"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(255,255,255,0.5)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMasko6nizvz7)"
                                                                pathTo="M 0 67.66666666666667C4.694444444444444, 67.66666666666667, 18.77777777777778, 67.66666666666667, 28.166666666666664, 67.66666666666667S47.29514852067525, 36.7803730663899, 56.33333333333333, 35S75.32184210540082, 38.72406060310147, 84.5, 37.33333333333333S103.34176992654928, 10.894190013639193, 112.66666666666666, 11.666666666666664S131.83057849698218, 40.13552414631781, 140.83333333333334, 42S165.73815769911744, 25.495027639243666, 169, 23.33333333333333"
                                                                pathFrom="M -1 70 L -1 70 L 28.166666666666664 70 L 56.33333333333333 70 L 84.5 70 L 112.66666666666666 70 L 140.83333333333334 70 L 169 70"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1560"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1595" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker wpekdbh4i no-pointer-events"
                                                                        stroke="#ffffff" fill="rgba(255,255,255,0.5)"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" default-marker-size="0">
                                                                    </circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1561" class="apexcharts-datalabels"
                                                            data:realIndex="0">
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1580" x1="0" y1="0" x2="169" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1581" x1="0" y1="0" x2="169" y2="0"
                                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1582" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1583" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1592" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1593" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1594" class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgba(255, 255, 255, 0.5);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: inherit; font-size: 10px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-7 d-flex align-items-center">
                                <div>
                                    <h2 class="mb-1 ">354K PKR</h2>
                                    <h5 class="text-muted mb-0 fw-normal">Total Income</h5>
                                </div>
                            </div>
                            <div class="col-5">
                                <div id="monthly-sales" style="min-height: 70px;">
                                    <div id="apexchartsfyhot6fu"
                                        class="apexcharts-canvas apexchartsfyhot6fu apexcharts-theme-light"
                                        style="width: 137px; height: 70px;"><svg id="SvgjsSvg2464" width="137"
                                            height="70" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="137" height="70">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 35px;"></div>
                                            </foreignObject>
                                            <g id="SvgjsG2519" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG2466" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(14.708333333333332, 0)">
                                                <defs id="SvgjsDefs2465">
                                                    <linearGradient id="SvgjsLinearGradient2468" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop2469" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop2470" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop2471" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMaskfyhot6fu">
                                                        <rect id="SvgjsRect2473" width="141" height="70"
                                                            x="-12.708333333333332" y="0" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff">
                                                        </rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskfyhot6fu"></clipPath>
                                                    <clipPath id="nonForecastMaskfyhot6fu"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskfyhot6fu">
                                                        <rect id="SvgjsRect2474" width="119.58333333333334" height="74"
                                                            x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect2472" width="7.223958333333334" height="70" x="0"
                                                    y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke-dasharray="3" fill="url(#SvgjsLinearGradient2468)"
                                                    class="apexcharts-xcrosshairs" y2="70" filter="none"
                                                    fill-opacity="0.9"></rect>
                                                <g id="SvgjsG2498" class="apexcharts-grid">
                                                    <g id="SvgjsG2499" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine2502" x1="-10.708333333333332" y1="0"
                                                            x2="126.29166666666667" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2503" x1="-10.708333333333332" y1="17.5"
                                                            x2="126.29166666666667" y2="17.5" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2504" x1="-10.708333333333332" y1="35"
                                                            x2="126.29166666666667" y2="35" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2505" x1="-10.708333333333332" y1="52.5"
                                                            x2="126.29166666666667" y2="52.5" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2506" x1="-10.708333333333332" y1="70"
                                                            x2="126.29166666666667" y2="70" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG2500" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine2508" x1="0" y1="70" x2="115.58333333333334"
                                                        y2="70" stroke="transparent" stroke-dasharray="0"
                                                        stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine2507" x1="0" y1="1" x2="0" y2="70"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG2501" class="apexcharts-grid-borders"
                                                    style="display: none;">
                                                </g>
                                                <g id="SvgjsG2475" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG2476" class="apexcharts-series" rel="1" seriesName=""
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath2481"
                                                            d="M -3.611979166666667 66.001 L -3.611979166666667 50.66766666666667 C -3.611979166666667 48.66766666666667 -1.611979166666667 46.66766666666667 0.38802083333333304 46.66766666666667 L 0.38802083333333304 46.66766666666667 C 2 46.66766666666667 3.611979166666667 48.66766666666667 3.611979166666667 50.66766666666667 L 3.611979166666667 66.001 C 3.611979166666667 68.001 1.611979166666667 70.001 -0.38802083333333304 70.001 L -0.38802083333333304 70.001 C -2 70.001 -3.611979166666667 68.001 -3.611979166666667 66.001 Z "
                                                            fill="var(--bs-secondary)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskfyhot6fu)"
                                                            pathTo="M -3.611979166666667 66.001 L -3.611979166666667 50.66766666666667 C -3.611979166666667 48.66766666666667 -1.611979166666667 46.66766666666667 0.38802083333333304 46.66766666666667 L 0.38802083333333304 46.66766666666667 C 2 46.66766666666667 3.611979166666667 48.66766666666667 3.611979166666667 50.66766666666667 L 3.611979166666667 66.001 C 3.611979166666667 68.001 1.611979166666667 70.001 -0.38802083333333304 70.001 L -0.38802083333333304 70.001 C -2 70.001 -3.611979166666667 68.001 -3.611979166666667 66.001 Z "
                                                            pathFrom="M -3.611979166666667 70.001 L -3.611979166666667 70.001 L 3.611979166666667 70.001 L 3.611979166666667 70.001 L 3.611979166666667 70.001 L 3.611979166666667 70.001 L 3.611979166666667 70.001 L -3.611979166666667 70.001 Z"
                                                            cy="46.66666666666667" cx="3.611979166666667" j="0" val="8"
                                                            barHeight="23.333333333333332" barWidth="7.223958333333334">
                                                        </path>
                                                        <path id="SvgjsPath2483"
                                                            d="M 10.8359375 66.001 L 10.8359375 50.66766666666667 C 10.8359375 48.66766666666667 12.8359375 46.66766666666667 14.8359375 46.66766666666667 L 14.8359375 46.66766666666667 C 16.447916666666668 46.66766666666667 18.059895833333336 48.66766666666667 18.059895833333336 50.66766666666667 L 18.059895833333336 66.001 C 18.059895833333336 68.001 16.059895833333336 70.001 14.059895833333336 70.001 L 14.059895833333336 70.001 C 12.447916666666668 70.001 10.8359375 68.001 10.8359375 66.001 Z "
                                                            fill="var(--bs-secondary)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskfyhot6fu)"
                                                            pathTo="M 10.8359375 66.001 L 10.8359375 50.66766666666667 C 10.8359375 48.66766666666667 12.8359375 46.66766666666667 14.8359375 46.66766666666667 L 14.8359375 46.66766666666667 C 16.447916666666668 46.66766666666667 18.059895833333336 48.66766666666667 18.059895833333336 50.66766666666667 L 18.059895833333336 66.001 C 18.059895833333336 68.001 16.059895833333336 70.001 14.059895833333336 70.001 L 14.059895833333336 70.001 C 12.447916666666668 70.001 10.8359375 68.001 10.8359375 66.001 Z "
                                                            pathFrom="M 10.8359375 70.001 L 10.8359375 70.001 L 18.059895833333336 70.001 L 18.059895833333336 70.001 L 18.059895833333336 70.001 L 18.059895833333336 70.001 L 18.059895833333336 70.001 L 10.8359375 70.001 Z"
                                                            cy="46.66666666666667" cx="18.059895833333336" j="1" val="8"
                                                            barHeight="23.333333333333332" barWidth="7.223958333333334">
                                                        </path>
                                                        <path id="SvgjsPath2485"
                                                            d="M 25.283854166666668 66.001 L 25.283854166666668 39.001 C 25.283854166666668 37.001 27.283854166666668 35.001 29.283854166666668 35.001 L 29.283854166666668 35.001 C 30.895833333333336 35.001 32.5078125 37.001 32.5078125 39.001 L 32.5078125 66.001 C 32.5078125 68.001 30.5078125 70.001 28.5078125 70.001 L 28.5078125 70.001 C 26.895833333333336 70.001 25.283854166666668 68.001 25.283854166666668 66.001 Z "
                                                            fill="var(--bs-secondary)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskfyhot6fu)"
                                                            pathTo="M 25.283854166666668 66.001 L 25.283854166666668 39.001 C 25.283854166666668 37.001 27.283854166666668 35.001 29.283854166666668 35.001 L 29.283854166666668 35.001 C 30.895833333333336 35.001 32.5078125 37.001 32.5078125 39.001 L 32.5078125 66.001 C 32.5078125 68.001 30.5078125 70.001 28.5078125 70.001 L 28.5078125 70.001 C 26.895833333333336 70.001 25.283854166666668 68.001 25.283854166666668 66.001 Z "
                                                            pathFrom="M 25.283854166666668 70.001 L 25.283854166666668 70.001 L 32.5078125 70.001 L 32.5078125 70.001 L 32.5078125 70.001 L 32.5078125 70.001 L 32.5078125 70.001 L 25.283854166666668 70.001 Z"
                                                            cy="35" cx="32.5078125" j="2" val="12" barHeight="35"
                                                            barWidth="7.223958333333334"></path>
                                                        <path id="SvgjsPath2487"
                                                            d="M 39.731770833333336 66.001 L 39.731770833333336 33.16766666666666 C 39.731770833333336 31.167666666666662 41.731770833333336 29.167666666666666 43.731770833333336 29.167666666666666 L 43.731770833333336 29.167666666666666 C 45.34375 29.167666666666666 46.95572916666667 31.167666666666662 46.95572916666667 33.16766666666666 L 46.95572916666667 66.001 C 46.95572916666667 68.001 44.95572916666667 70.001 42.95572916666667 70.001 L 42.95572916666667 70.001 C 41.34375 70.001 39.731770833333336 68.001 39.731770833333336 66.001 Z "
                                                            fill="var(--bs-secondary)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskfyhot6fu)"
                                                            pathTo="M 39.731770833333336 66.001 L 39.731770833333336 33.16766666666666 C 39.731770833333336 31.167666666666662 41.731770833333336 29.167666666666666 43.731770833333336 29.167666666666666 L 43.731770833333336 29.167666666666666 C 45.34375 29.167666666666666 46.95572916666667 31.167666666666662 46.95572916666667 33.16766666666666 L 46.95572916666667 66.001 C 46.95572916666667 68.001 44.95572916666667 70.001 42.95572916666667 70.001 L 42.95572916666667 70.001 C 41.34375 70.001 39.731770833333336 68.001 39.731770833333336 66.001 Z "
                                                            pathFrom="M 39.731770833333336 70.001 L 39.731770833333336 70.001 L 46.95572916666667 70.001 L 46.95572916666667 70.001 L 46.95572916666667 70.001 L 46.95572916666667 70.001 L 46.95572916666667 70.001 L 39.731770833333336 70.001 Z"
                                                            cy="29.166666666666664" cx="46.95572916666667" j="3"
                                                            val="14" barHeight="40.833333333333336"
                                                            barWidth="7.223958333333334">
                                                        </path>
                                                        <path id="SvgjsPath2489"
                                                            d="M 54.17968750000001 66.001 L 54.17968750000001 56.501 C 54.17968750000001 54.501 56.17968750000001 52.501 58.17968750000001 52.501 L 58.17968750000001 52.501 C 59.79166666666667 52.501 61.40364583333334 54.501 61.40364583333334 56.501 L 61.40364583333334 66.001 C 61.40364583333334 68.001 59.40364583333334 70.001 57.40364583333334 70.001 L 57.40364583333334 70.001 C 55.79166666666667 70.001 54.17968750000001 68.001 54.17968750000001 66.001 Z "
                                                            fill="var(--bs-secondary)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskfyhot6fu)"
                                                            pathTo="M 54.17968750000001 66.001 L 54.17968750000001 56.501 C 54.17968750000001 54.501 56.17968750000001 52.501 58.17968750000001 52.501 L 58.17968750000001 52.501 C 59.79166666666667 52.501 61.40364583333334 54.501 61.40364583333334 56.501 L 61.40364583333334 66.001 C 61.40364583333334 68.001 59.40364583333334 70.001 57.40364583333334 70.001 L 57.40364583333334 70.001 C 55.79166666666667 70.001 54.17968750000001 68.001 54.17968750000001 66.001 Z "
                                                            pathFrom="M 54.17968750000001 70.001 L 54.17968750000001 70.001 L 61.40364583333334 70.001 L 61.40364583333334 70.001 L 61.40364583333334 70.001 L 61.40364583333334 70.001 L 61.40364583333334 70.001 L 54.17968750000001 70.001 Z"
                                                            cy="52.5" cx="61.40364583333334" j="4" val="6"
                                                            barHeight="17.5" barWidth="7.223958333333334"></path>
                                                        <path id="SvgjsPath2491"
                                                            d="M 68.62760416666667 66.001 L 68.62760416666667 9.83433333333333 C 68.62760416666667 7.83433333333333 70.62760416666667 5.834333333333329 72.62760416666667 5.834333333333329 L 72.62760416666667 5.834333333333329 C 74.23958333333334 5.834333333333329 75.8515625 7.83433333333333 75.8515625 9.83433333333333 L 75.8515625 66.001 C 75.8515625 68.001 73.8515625 70.001 71.8515625 70.001 L 71.8515625 70.001 C 70.23958333333334 70.001 68.62760416666667 68.001 68.62760416666667 66.001 Z "
                                                            fill="var(--bs-secondary)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskfyhot6fu)"
                                                            pathTo="M 68.62760416666667 66.001 L 68.62760416666667 9.83433333333333 C 68.62760416666667 7.83433333333333 70.62760416666667 5.834333333333329 72.62760416666667 5.834333333333329 L 72.62760416666667 5.834333333333329 C 74.23958333333334 5.834333333333329 75.8515625 7.83433333333333 75.8515625 9.83433333333333 L 75.8515625 66.001 C 75.8515625 68.001 73.8515625 70.001 71.8515625 70.001 L 71.8515625 70.001 C 70.23958333333334 70.001 68.62760416666667 68.001 68.62760416666667 66.001 Z "
                                                            pathFrom="M 68.62760416666667 70.001 L 68.62760416666667 70.001 L 75.8515625 70.001 L 75.8515625 70.001 L 75.8515625 70.001 L 75.8515625 70.001 L 75.8515625 70.001 L 68.62760416666667 70.001 Z"
                                                            cy="5.833333333333329" cx="75.8515625" j="5" val="22"
                                                            barHeight="64.16666666666667" barWidth="7.223958333333334">
                                                        </path>
                                                        <path id="SvgjsPath2493"
                                                            d="M 83.07552083333333 66.001 L 83.07552083333333 59.41766666666666 C 83.07552083333333 57.41766666666666 85.07552083333333 55.41766666666666 87.07552083333333 55.41766666666666 L 87.07552083333333 55.41766666666666 C 88.6875 55.41766666666666 90.29947916666666 57.41766666666666 90.29947916666666 59.41766666666666 L 90.29947916666666 66.001 C 90.29947916666666 68.001 88.29947916666666 70.001 86.29947916666666 70.001 L 86.29947916666666 70.001 C 84.6875 70.001 83.07552083333333 68.001 83.07552083333333 66.001 Z "
                                                            fill="var(--bs-secondary)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskfyhot6fu)"
                                                            pathTo="M 83.07552083333333 66.001 L 83.07552083333333 59.41766666666666 C 83.07552083333333 57.41766666666666 85.07552083333333 55.41766666666666 87.07552083333333 55.41766666666666 L 87.07552083333333 55.41766666666666 C 88.6875 55.41766666666666 90.29947916666666 57.41766666666666 90.29947916666666 59.41766666666666 L 90.29947916666666 66.001 C 90.29947916666666 68.001 88.29947916666666 70.001 86.29947916666666 70.001 L 86.29947916666666 70.001 C 84.6875 70.001 83.07552083333333 68.001 83.07552083333333 66.001 Z "
                                                            pathFrom="M 83.07552083333333 70.001 L 83.07552083333333 70.001 L 90.29947916666666 70.001 L 90.29947916666666 70.001 L 90.29947916666666 70.001 L 90.29947916666666 70.001 L 90.29947916666666 70.001 L 83.07552083333333 70.001 Z"
                                                            cy="55.416666666666664" cx="90.29947916666666" j="6" val="5"
                                                            barHeight="14.583333333333334" barWidth="7.223958333333334">
                                                        </path>
                                                        <path id="SvgjsPath2495"
                                                            d="M 97.5234375 66.001 L 97.5234375 50.66766666666667 C 97.5234375 48.66766666666667 99.5234375 46.66766666666667 101.5234375 46.66766666666667 L 101.5234375 46.66766666666667 C 103.13541666666666 46.66766666666667 104.74739583333333 48.66766666666667 104.74739583333333 50.66766666666667 L 104.74739583333333 66.001 C 104.74739583333333 68.001 102.74739583333333 70.001 100.74739583333333 70.001 L 100.74739583333333 70.001 C 99.13541666666666 70.001 97.5234375 68.001 97.5234375 66.001 Z "
                                                            fill="var(--bs-secondary)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskfyhot6fu)"
                                                            pathTo="M 97.5234375 66.001 L 97.5234375 50.66766666666667 C 97.5234375 48.66766666666667 99.5234375 46.66766666666667 101.5234375 46.66766666666667 L 101.5234375 46.66766666666667 C 103.13541666666666 46.66766666666667 104.74739583333333 48.66766666666667 104.74739583333333 50.66766666666667 L 104.74739583333333 66.001 C 104.74739583333333 68.001 102.74739583333333 70.001 100.74739583333333 70.001 L 100.74739583333333 70.001 C 99.13541666666666 70.001 97.5234375 68.001 97.5234375 66.001 Z "
                                                            pathFrom="M 97.5234375 70.001 L 97.5234375 70.001 L 104.74739583333333 70.001 L 104.74739583333333 70.001 L 104.74739583333333 70.001 L 104.74739583333333 70.001 L 104.74739583333333 70.001 L 97.5234375 70.001 Z"
                                                            cy="46.66666666666667" cx="104.74739583333333" j="7" val="8"
                                                            barHeight="23.333333333333332" barWidth="7.223958333333334">
                                                        </path>
                                                        <path id="SvgjsPath2497"
                                                            d="M 111.97135416666667 66.001 L 111.97135416666667 24.417666666666666 C 111.97135416666667 22.417666666666666 113.97135416666667 20.417666666666666 115.97135416666667 20.417666666666666 L 115.97135416666667 20.417666666666666 C 117.58333333333334 20.417666666666666 119.1953125 22.417666666666666 119.1953125 24.417666666666666 L 119.1953125 66.001 C 119.1953125 68.001 117.1953125 70.001 115.1953125 70.001 L 115.1953125 70.001 C 113.58333333333334 70.001 111.97135416666667 68.001 111.97135416666667 66.001 Z "
                                                            fill="var(--bs-secondary)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskfyhot6fu)"
                                                            pathTo="M 111.97135416666667 66.001 L 111.97135416666667 24.417666666666666 C 111.97135416666667 22.417666666666666 113.97135416666667 20.417666666666666 115.97135416666667 20.417666666666666 L 115.97135416666667 20.417666666666666 C 117.58333333333334 20.417666666666666 119.1953125 22.417666666666666 119.1953125 24.417666666666666 L 119.1953125 66.001 C 119.1953125 68.001 117.1953125 70.001 115.1953125 70.001 L 115.1953125 70.001 C 113.58333333333334 70.001 111.97135416666667 68.001 111.97135416666667 66.001 Z "
                                                            pathFrom="M 111.97135416666667 70.001 L 111.97135416666667 70.001 L 119.1953125 70.001 L 119.1953125 70.001 L 119.1953125 70.001 L 119.1953125 70.001 L 119.1953125 70.001 L 111.97135416666667 70.001 Z"
                                                            cy="20.416666666666664" cx="119.1953125" j="8" val="17"
                                                            barHeight="49.583333333333336" barWidth="7.223958333333334">
                                                        </path>
                                                        <g id="SvgjsG2478" class="apexcharts-bar-goals-markers">
                                                            <g id="SvgjsG2480" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskfyhot6fu)"></g>
                                                            <g id="SvgjsG2482" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskfyhot6fu)"></g>
                                                            <g id="SvgjsG2484" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskfyhot6fu)"></g>
                                                            <g id="SvgjsG2486" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskfyhot6fu)"></g>
                                                            <g id="SvgjsG2488" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskfyhot6fu)"></g>
                                                            <g id="SvgjsG2490" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskfyhot6fu)"></g>
                                                            <g id="SvgjsG2492" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskfyhot6fu)"></g>
                                                            <g id="SvgjsG2494" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskfyhot6fu)"></g>
                                                            <g id="SvgjsG2496" className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskfyhot6fu)"></g>
                                                        </g>
                                                        <g id="SvgjsG2479"
                                                            class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2477"
                                                        class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine2509" x1="-10.708333333333332" y1="0"
                                                    x2="126.29166666666667" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs">
                                                </line>
                                                <line id="SvgjsLine2510" x1="-10.708333333333332" y1="0"
                                                    x2="126.29166666666667" y2="0" stroke-dasharray="0" stroke-width="0"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG2511" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG2512" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG2520" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG2521" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG2522" class="apexcharts-point-annotations"></g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: var(--bs-secondary);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: inherit; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-7 d-flex align-items-center">
                                <div>
                                    <h2 class="mb-1 ">345</h2>
                                    <h5 class="text-muted mb-0 fw-normal">Yearly Sales</h5>
                                </div>
                            </div>
                            <div class="col-5">
                                <div id="yearly-sales" style="min-height: 70px;">
                                    <div id="apexchartsdu9026knk"
                                        class="apexcharts-canvas apexchartsdu9026knk apexcharts-theme-light"
                                        style="width: 137px; height: 70px;"><svg id="SvgjsSvg2407" width="137"
                                            height="70" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="137" height="70">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 35px;"></div>
                                            </foreignObject>
                                            <rect id="SvgjsRect2412" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG2459" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG2409" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs2408">
                                                    <clipPath id="gridRectMaskdu9026knk">
                                                        <rect id="SvgjsRect2414" width="143" height="72" x="-3" y="-1"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskdu9026knk"></clipPath>
                                                    <clipPath id="nonForecastMaskdu9026knk"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskdu9026knk">
                                                        <rect id="SvgjsRect2415" width="141" height="74" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient2420" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop2421" stop-opacity="0"
                                                            stop-color="var(--bs-secondary)" offset="0"></stop>
                                                        <stop id="SvgjsStop2422" stop-opacity="0" stop-color=""
                                                            offset="1">
                                                        </stop>
                                                        <stop id="SvgjsStop2423" stop-opacity="0" stop-color=""
                                                            offset="1">
                                                        </stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine2413" x1="0" y1="0" x2="0" y2="70" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="70"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">
                                                </line>
                                                <g id="SvgjsG2426" class="apexcharts-grid">
                                                    <g id="SvgjsG2427" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine2430" x1="0" y1="0" x2="137" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2431" x1="0" y1="17.5" x2="137" y2="17.5"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2432" x1="0" y1="35" x2="137" y2="35"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2433" x1="0" y1="52.5" x2="137" y2="52.5"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2434" x1="0" y1="70" x2="137" y2="70"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG2428" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine2436" x1="0" y1="70" x2="137" y2="70"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine2435" x1="0" y1="1" x2="0" y2="70"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG2429" class="apexcharts-grid-borders"
                                                    style="display: none;">
                                                </g>
                                                <g id="SvgjsG2416"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG2417" class="apexcharts-series" seriesName=""
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2424"
                                                            d="M 0 70 L 0 66.5C0.08251040820888637, 66.17748668908132, 6.527736791649548, 36.32992205688835, 8.058823529411764, 35S13.85765686307469, 51.518471411335355, 16.11764705882353, 52.5S21.916480392486456, 42.981528588664645, 24.176470588235293, 42S29.975303921898217, 44.518471411335355, 32.23529411764706, 45.5S37.72881155451385, 49.55706464418404, 40.294117647058826, 49S45.666666666666664, 42, 48.35294117647059, 42S53.846458613337376, 48.44293535581596, 56.411764705882355, 49S61.90528214274914, 44.94293535581596, 64.47058823529412, 45.5S69.9641056721609, 53.05706464418404, 72.52941176470588, 52.5S80.35685933814764, 42.75366073249355, 80.58823529411765, 42S87.83564798037104, 1.2334037086695757, 88.6470588235294, 0S95.17479561517895, 16.17007794311165, 96.70588235294117, 17.5S102.07843137254902, 14, 104.76470588235294, 14S110.13725490196079, 17.5, 112.82352941176471, 17.5S119.88655121251068, 12.7025503024318, 120.88235294117646, 14S126.37587037804325, 48.44293535581596, 128.94117647058823, 49S136.9174895917911, 17.822513310918676, 137, 17.5 L 137 70 L 0 70M 0 66.5z"
                                                            fill="url(#SvgjsLinearGradient2420)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskdu9026knk)"
                                                            pathTo="M 0 70 L 0 66.5C0.08251040820888637, 66.17748668908132, 6.527736791649548, 36.32992205688835, 8.058823529411764, 35S13.85765686307469, 51.518471411335355, 16.11764705882353, 52.5S21.916480392486456, 42.981528588664645, 24.176470588235293, 42S29.975303921898217, 44.518471411335355, 32.23529411764706, 45.5S37.72881155451385, 49.55706464418404, 40.294117647058826, 49S45.666666666666664, 42, 48.35294117647059, 42S53.846458613337376, 48.44293535581596, 56.411764705882355, 49S61.90528214274914, 44.94293535581596, 64.47058823529412, 45.5S69.9641056721609, 53.05706464418404, 72.52941176470588, 52.5S80.35685933814764, 42.75366073249355, 80.58823529411765, 42S87.83564798037104, 1.2334037086695757, 88.6470588235294, 0S95.17479561517895, 16.17007794311165, 96.70588235294117, 17.5S102.07843137254902, 14, 104.76470588235294, 14S110.13725490196079, 17.5, 112.82352941176471, 17.5S119.88655121251068, 12.7025503024318, 120.88235294117646, 14S126.37587037804325, 48.44293535581596, 128.94117647058823, 49S136.9174895917911, 17.822513310918676, 137, 17.5 L 137 70 L 0 70M 0 66.5z"
                                                            pathFrom="M -1 70 L -1 70 L 8.058823529411764 70 L 16.11764705882353 70 L 24.176470588235293 70 L 32.23529411764706 70 L 40.294117647058826 70 L 48.35294117647059 70 L 56.411764705882355 70 L 64.47058823529412 70 L 72.52941176470588 70 L 80.58823529411765 70 L 88.6470588235294 70 L 96.70588235294117 70 L 104.76470588235294 70 L 112.82352941176471 70 L 120.88235294117646 70 L 128.94117647058823 70 L 137 70">
                                                        </path>
                                                        <path id="SvgjsPath2425"
                                                            d="M 0 66.5C0.08251040820888637, 66.17748668908132, 6.527736791649548, 36.32992205688835, 8.058823529411764, 35S13.85765686307469, 51.518471411335355, 16.11764705882353, 52.5S21.916480392486456, 42.981528588664645, 24.176470588235293, 42S29.975303921898217, 44.518471411335355, 32.23529411764706, 45.5S37.72881155451385, 49.55706464418404, 40.294117647058826, 49S45.666666666666664, 42, 48.35294117647059, 42S53.846458613337376, 48.44293535581596, 56.411764705882355, 49S61.90528214274914, 44.94293535581596, 64.47058823529412, 45.5S69.9641056721609, 53.05706464418404, 72.52941176470588, 52.5S80.35685933814764, 42.75366073249355, 80.58823529411765, 42S87.83564798037104, 1.2334037086695757, 88.6470588235294, 0S95.17479561517895, 16.17007794311165, 96.70588235294117, 17.5S102.07843137254902, 14, 104.76470588235294, 14S110.13725490196079, 17.5, 112.82352941176471, 17.5S119.88655121251068, 12.7025503024318, 120.88235294117646, 14S126.37587037804325, 48.44293535581596, 128.94117647058823, 49S136.9174895917911, 17.822513310918676, 137, 17.5"
                                                            fill="none" fill-opacity="1" stroke="var(--bs-secondary)"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskdu9026knk)"
                                                            pathTo="M 0 66.5C0.08251040820888637, 66.17748668908132, 6.527736791649548, 36.32992205688835, 8.058823529411764, 35S13.85765686307469, 51.518471411335355, 16.11764705882353, 52.5S21.916480392486456, 42.981528588664645, 24.176470588235293, 42S29.975303921898217, 44.518471411335355, 32.23529411764706, 45.5S37.72881155451385, 49.55706464418404, 40.294117647058826, 49S45.666666666666664, 42, 48.35294117647059, 42S53.846458613337376, 48.44293535581596, 56.411764705882355, 49S61.90528214274914, 44.94293535581596, 64.47058823529412, 45.5S69.9641056721609, 53.05706464418404, 72.52941176470588, 52.5S80.35685933814764, 42.75366073249355, 80.58823529411765, 42S87.83564798037104, 1.2334037086695757, 88.6470588235294, 0S95.17479561517895, 16.17007794311165, 96.70588235294117, 17.5S102.07843137254902, 14, 104.76470588235294, 14S110.13725490196079, 17.5, 112.82352941176471, 17.5S119.88655121251068, 12.7025503024318, 120.88235294117646, 14S126.37587037804325, 48.44293535581596, 128.94117647058823, 49S136.9174895917911, 17.822513310918676, 137, 17.5"
                                                            pathFrom="M -1 70 L -1 70 L 8.058823529411764 70 L 16.11764705882353 70 L 24.176470588235293 70 L 32.23529411764706 70 L 40.294117647058826 70 L 48.35294117647059 70 L 56.411764705882355 70 L 64.47058823529412 70 L 72.52941176470588 70 L 80.58823529411765 70 L 88.6470588235294 70 L 96.70588235294117 70 L 104.76470588235294 70 L 112.82352941176471 70 L 120.88235294117646 70 L 128.94117647058823 70 L 137 70"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG2418"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2463" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker wdmrm9x5o no-pointer-events"
                                                                    stroke="#ffffff" fill="var(--bs-secondary)"
                                                                    fill-opacity="1" stroke-width="2"
                                                                    stroke-opacity="0.9" default-marker-size="0">
                                                                </circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2419" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine2437" x1="0" y1="0" x2="137" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2438" x1="0" y1="0" x2="137" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG2439" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG2440" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, 4)"></g>
                                                </g>
                                                <g id="SvgjsG2460" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG2461" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG2462" class="apexcharts-point-annotations"></g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: var(--bs-secondary);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: inherit; font-size: 10px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Orders Report</h2>
            <!-- PDF Generation Button -->
            <a href="{{ route('reports.orders.pdf') }}" class="btn btn-dark">
                Generate PDF
            </a>
        </div>

        <table id="ordersTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order Number</th>
                    <th>User</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->tracking_no }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>Rs.{{ $order->total_price }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
<script>
    $(document).ready(function () {
        $('#ordersTable').DataTable();
    });
</script>