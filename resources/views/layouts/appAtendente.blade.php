<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />

    <title>Admin astros21</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    {{-- <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff"> --}}
    <!-- Styles -->
    <link href="{{ asset('css/admin/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin/css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/css/style.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}

</head>

<body>
    <div id="app">
        <main class="">

            <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
                <div class="nano">
                    <div class="nano-content">
                        <ul>
                            <div class="logo"><a href="index.html">
                                    <!-- <img src="images/logo.png" alt="" /> --><span>Astros21</span>
                                </a></div>
                            <li class="label">Menu</li>

                            <li class="{{ $active == 'monitor-atendimento' ? 'active' : '' }}"><a
                                    href="{{ route('monitor-atendimento.index') }}"><i
                                        class="bi bi-speedometer"></i>Monitor de
                                    atendimento</a></li>
                            <li><a href="{{ route('clientes.index') }}"><i class="bi bi-people"></i>Atendimentos</a>
                            </li>
                            <li><a href="app-widget-card.html"><i class="bi bi-bar-chart-steps"></i>Estatísticas</a>
                            </li>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><i
                                        class="ti-close"></i>Sair</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /# sidebar -->

            <div class="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="float-left">
                                <div class="hamburger sidebar-toggle">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                            </div>
                            <div class="float-right">

                                <div class="dropdown dib">
                                    <div class="header-icon" data-toggle="dropdown">
                                        <span class="user-avatar">{{ auth()->user()->name }}
                                            <i class="ti-angle-down f-s-10"></i>
                                        </span>
                                        <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">

                                            <div class="dropdown-content-body">
                                                <ul>

                                                    <li>
                                                        <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                            <i class="ti-power-off"></i>
                                                            <span>Sair</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrap">
                <div class="main">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

<!-- jquery vendor -->
<script src="{{ asset('js/admin/js/lib/jquery.min.js') }}"></script>
<script src="{{ asset('js/admin/js/lib/jquery.nanoscroller.min.js') }}"></script>
<!-- nano scroller -->
<script src="{{ asset('js/admin/js/lib/menubar/sidebar.js') }}"></script>
<script src="{{ asset('js/admin/js/lib/preloader/pace.min.js') }}"></script>
<!-- sidebar -->

<script src="{{ asset('js/admin/js/lib/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin/js/scripts.js') }}"></script>
<!-- bootstrap -->

<script src="{{ asset('js/admin/js/lib/calendar-2/moment.latest.min.js') }}"></script>
<script src="{{ asset('js/admin/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
<script src="{{ asset('js/admin/js/lib/calendar-2/pignose.init.js') }}"></script>


<script src="{{ asset('js/admin/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
<script src="{{ asset('js/admin/js/lib/weather/weather-init.js') }}"></script>
<script src="{{ asset('js/admin/js/lib/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('js/admin/js/lib/circle-progress/circle-progress-init.js') }}"></script>
<script src="{{ asset('js/admin/js/lib/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('js/admin/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('js/admin/js/lib/sparklinechart/sparkline.init.js') }}"></script>
<script src="{{ asset('js/admin/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>

<script src="{{ asset('js/alertas.js') }}" defer></script>

{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}

</html>
