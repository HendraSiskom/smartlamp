<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from vora.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2022 18:40:24 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vora - Saas Bootstrap Admin Dashboard</title>

    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('vora/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vora/vendor/chartist/css/chartist.min.css')}}">

    <link href="{{ asset('vora/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vora/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vora/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('vora/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

    {{-- datatable --}}
    <link href="{{ asset('vora/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vora/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">

    <script src=//code.jquery.com/jquery-3.5.1.slim.min.js integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin=anonymous></script>
    @include('layouts.inc.css')
</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>


    <div id="main-wrapper">
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('vora/images/logo.png')}}" alt="">
                <img class="logo-compact" src="{{ asset('vora/images/logo-text.png')}}" alt="">
                <img class="brand-title" src="{{ asset('vora/images/logo-text.png')}}" alt="">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>


        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="{{ route('beranda') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-settings-2"></i>
                            <span class="nav-text">Beranda</span>
                        </a>
                    </li>
                    <li><a href="{{ route('kontrol') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-settings-2"></i>
                            <span class="nav-text">Kontrol</span>
                        </a>
                    </li>
                    <li><a href="{{ route('log-kontrol') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-settings-2"></i>
                            <span class="nav-text">Log Kontrol</span>
                        </a>
                    </li>
                    <li><a href="{{ route('laporan-data') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-settings-2"></i>
                            <span class="nav-text">Laporan Data</span>
                        </a>
                    </li>
                    <li><a href="{{ route('laporan-total-daya') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-settings-2"></i>
                            <span class="nav-text">Laporan Total Daya</span>
                        </a>
                    </li>

                </ul>

            </div>
        </div>


        <div class="content-body">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>


        <div class="footer">
            <div class="copyright">
                <p>Copyright © Penelitian DIPA 2022 - Rekayasa Sistem Komputer
                    2022</p>
            </div>
        </div>



    </div>



    <script src="{{ asset('vora/vendor/global/global.min.js')}}"></script>
    <script src="{{ asset('vora/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('vora/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('vora/js/custom.min.js')}}"></script>
    <script src="{{ asset('vora/js/dlabnav-init.js')}}"></script>
    <script src="{{ asset('vora/vendor/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{ asset('vora/vendor/peity/jquery.peity.min.js')}}"></script>
    <script src="{{ asset('vora/vendor/apexchart/apexchart.js')}}"></script>
    <script src="{{ asset('vora/js/dashboard/dashboard-1.js')}}"></script>
    <script src="{{ asset('vora/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vora/js/plugins-init/datatables.init.js')}}"></script>
    @include('layouts.inc.js')
    @yield('js')
</body>

<!-- Mirrored from vora.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2022 18:40:46 GMT -->

</html>