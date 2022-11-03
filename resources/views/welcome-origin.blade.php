@extends('layouts.administrador.admin')
@section('content')
<div class="col-lg-12 col-xxl-4">
    <!--begin::Mixed Widget 1-->
    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
        <!--begin::Header-->
        <br>
        <div class="card-header border-0 bg-danger py-5">
            <h3 class="card-title font-weight-bolder text-white">Propiedades </h3>
            <div class="card-toolbar">
                <div class="dropdown dropdown-inline">
                    <a href="#" class="btn btn-transparent-white btn-sm font-weight-bolder dropdown-toggle px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <!--begin::Navigation-->
                        <ul class="navi navi-hover">
                            <li class="navi-header pb-1">
                                <span class="text-primary text-uppercase font-weight-bold font-size-sm">Acciones</span>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-shopping-cart-1"></i>
                                    </span>
                                    <span class="navi-text">uno</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-calendar-8"></i>
                                    </span>
                                    <span class="navi-text">dos</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-graph-1"></i>
                                    </span>
                                    <span class="navi-text">tres</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-rocket-1"></i>
                                    </span>
                                    <span class="navi-text">cuatro</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-writing"></i>
                                    </span>
                                    <span class="navi-text">cinco</span>
                                </a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                </div>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body p-0 position-relative overflow-hidden">
            <!--begin::Chart-->
            {{-- <div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px; min-height: 200px;"><div id="apexchartswqjjh9rq" class="apexcharts-canvas apexchartswqjjh9rq apexcharts-theme-light" style="width: 482.5px; height: 200px;"><svg id="SvgjsSvg1438" width="482.5" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;"><g id="SvgjsG1440" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1439"><clipPath id="gridRectMaskwqjjh9rq"><rect id="SvgjsRect1443" width="489.5" height="203" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskwqjjh9rq"><rect id="SvgjsRect1444" width="486.5" height="204" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1450" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1451" flood-color="#d13647" flood-opacity="0.5" result="SvgjsFeFlood1451Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1452" in="SvgjsFeFlood1451Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1452Out"></feComposite><feOffset id="SvgjsFeOffset1453" dx="0" dy="5" result="SvgjsFeOffset1453Out" in="SvgjsFeComposite1452Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1454" stdDeviation="3 " result="SvgjsFeGaussianBlur1454Out" in="SvgjsFeOffset1453Out"></feGaussianBlur><feBlend id="SvgjsFeBlend1455" in="SourceGraphic" in2="SvgjsFeGaussianBlur1454Out" mode="normal" result="SvgjsFeBlend1455Out"></feBlend></filter><filter id="SvgjsFilter1457" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1458" flood-color="#d13647" flood-opacity="0.5" result="SvgjsFeFlood1458Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1459" in="SvgjsFeFlood1458Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1459Out"></feComposite><feOffset id="SvgjsFeOffset1460" dx="0" dy="5" result="SvgjsFeOffset1460Out" in="SvgjsFeComposite1459Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1461" stdDeviation="3 " result="SvgjsFeGaussianBlur1461Out" in="SvgjsFeOffset1460Out"></feGaussianBlur><feBlend id="SvgjsFeBlend1462" in="SourceGraphic" in2="SvgjsFeGaussianBlur1461Out" mode="normal" result="SvgjsFeBlend1462Out"></feBlend></filter></defs><g id="SvgjsG1463" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1464" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1473" class="apexcharts-grid"><g id="SvgjsG1474" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1476" x1="0" y1="0" x2="482.5" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1477" x1="0" y1="20" x2="482.5" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1478" x1="0" y1="40" x2="482.5" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1479" x1="0" y1="60" x2="482.5" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1480" x1="0" y1="80" x2="482.5" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1481" x1="0" y1="100" x2="482.5" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1482" x1="0" y1="120" x2="482.5" y2="120" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1483" x1="0" y1="140" x2="482.5" y2="140" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1484" x1="0" y1="160" x2="482.5" y2="160" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1485" x1="0" y1="180" x2="482.5" y2="180" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1486" x1="0" y1="200" x2="482.5" y2="200" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1475" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1488" x1="0" y1="200" x2="482.5" y2="200" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1487" x1="0" y1="1" x2="0" y2="200" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1445" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1446" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1449" d="M 0 200L 0 125C 28.145833333333332 125 52.27083333333334 87.5 80.41666666666667 87.5C 108.5625 87.5 132.6875 120 160.83333333333334 120C 188.97916666666669 120 213.10416666666669 25 241.25 25C 269.3958333333333 25 293.52083333333337 100 321.6666666666667 100C 349.8125 100 373.93750000000006 100 402.08333333333337 100C 430.2291666666667 100 454.3541666666667 100 482.5 100C 482.5 100 482.5 100 482.5 200M 482.5 100z" fill="transparent" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskwqjjh9rq)" filter="url(#SvgjsFilter1450)" pathTo="M 0 200L 0 125C 28.145833333333332 125 52.27083333333334 87.5 80.41666666666667 87.5C 108.5625 87.5 132.6875 120 160.83333333333334 120C 188.97916666666669 120 213.10416666666669 25 241.25 25C 269.3958333333333 25 293.52083333333337 100 321.6666666666667 100C 349.8125 100 373.93750000000006 100 402.08333333333337 100C 430.2291666666667 100 454.3541666666667 100 482.5 100C 482.5 100 482.5 100 482.5 200M 482.5 100z" pathFrom="M -1 200L -1 200L 80.41666666666667 200L 160.83333333333334 200L 241.25 200L 321.6666666666667 200L 402.08333333333337 200L 482.5 200"></path><path id="SvgjsPath1456" d="M 0 125C 28.145833333333332 125 52.27083333333334 87.5 80.41666666666667 87.5C 108.5625 87.5 132.6875 120 160.83333333333334 120C 188.97916666666669 120 213.10416666666669 25 241.25 25C 269.3958333333333 25 293.52083333333337 100 321.6666666666667 100C 349.8125 100 373.93750000000006 100 402.08333333333337 100C 430.2291666666667 100 454.3541666666667 100 482.5 100" fill="none" fill-opacity="1" stroke="#d13647" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskwqjjh9rq)" filter="url(#SvgjsFilter1457)" pathTo="M 0 125C 28.145833333333332 125 52.27083333333334 87.5 80.41666666666667 87.5C 108.5625 87.5 132.6875 120 160.83333333333334 120C 188.97916666666669 120 213.10416666666669 25 241.25 25C 269.3958333333333 25 293.52083333333337 100 321.6666666666667 100C 349.8125 100 373.93750000000006 100 402.08333333333337 100C 430.2291666666667 100 454.3541666666667 100 482.5 100" pathFrom="M -1 200L -1 200L 80.41666666666667 200L 160.83333333333334 200L 241.25 200L 321.6666666666667 200L 402.08333333333337 200L 482.5 200"></path><g id="SvgjsG1447" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1494" r="0" cx="0" cy="125" class="apexcharts-marker wc1za7ids no-pointer-events" stroke="#d13647" fill="#ffe2e5" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1448" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1489" x1="0" y1="0" x2="482.5" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1490" x1="0" y1="0" x2="482.5" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1491" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1492" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1493" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1472" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1441" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 100px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 11px; top: 128px;"><div class="apexcharts-tooltip-title" style="font-family: Poppins; font-size: 12px;">Feb</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: transparent; display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Net Profit: </span><span class="apexcharts-tooltip-text-value">$30 thousands</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div> --}}
            <!--end::Chart-->
            <!--begin::Stats-->
            <br><br><br><br><br>
            <div class="card-spacer mt-n25">
                <!--begin::Row-->
                <div class="row m-0">
                    <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
                        <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Equalizer.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <a href="{{ asset('chofer/recorrido')}}" class="text-warning font-weight-bold font-size-h6">Recorridos <h1 class="display">2</h1></a>
                    </div>
                    <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">

                        <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Add-user.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">

                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                </g>
                            </svg>

                            <!--end::Svg Icon-->
                        </span>


                        <a href="{{ asset('chofer/solicitudes')}}"  class="text-primary font-weight-bold font-size-h6 mt-2">Solicitudes <h1 class="display">2</h1></a>
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row m-0">
                    <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                        <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Historial</a>
                    </div>
                    <div class="col bg-light-success px-6 py-8 rounded-xl">
                        <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Urgent-mail.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3"></path>
                                    <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Reportes</a>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Stats-->
        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 484px; height: 448px;"></div></div><div class="contract-trigger"></div></div></div>
        <!--end::Body-->
    </div>
    <!--end::Mixed Widget 1-->
</div>
@endsection
