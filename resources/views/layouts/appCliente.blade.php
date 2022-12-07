<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Astros21</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('cliente/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cliente/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cliente/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('cliente/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('cliente/css/style.css') }}" rel="stylesheet">

    <!-- car_slick -->
    <link rel="stylesheet" href="{{ asset('cliente/card_slide_slick/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/card_slide_slick/css/style.css') }}">
</head>

<body>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #ffef2b;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Astros21
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div> --}}
    <!-- Topbar Start -->
    {{-- <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Topbar End -->

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        {{-- <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div> --}}
        <img src="{{ asset('imgs/loading.gif') }}" alt="">
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('layouts.navs.navCliente')
    <!-- Navbar End -->


    {{-- <main class=""> --}}
    @yield('content')
    {{-- </main> --}}


    <!-- Footer Start -->
    <div id="contatoPage" class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Contato</h5>

                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(31) 99698-5803</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>astros21@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook"></i></a>
                    </div>
                </div>

                {{-- <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Consultores</h5>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid rounded" src="img/gallery-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="img/gallery-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="img/gallery-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="img/gallery-4.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="img/gallery-5.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="img/gallery-6.jpg" alt="">
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Suporte</h5>
                    <div class="col-md">

                        <p>De segunda a sexta das 08:00 as 18:00
                            Para dúvidas de como se consultar.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Leitura e Clarividência</h5>
                    <div class="col-md">
                        <p>
                            Amor, sorte, carreira e vidas passadas.
                            Leituras e clarividência aconselham sobre todos os assuntos da vida e responde a todas as
                            suas
                            perguntas.
                            Todos os dias 8h ás 02h</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Ajuda</h5>
                    <div class="col-md">

                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@mdo">Enviar mensagem</button>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Enviar mensagem</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <p class="mb-2">Infelizmente, não estamos online no momento. Deixe uma mensagem e
                                    entraremos em contato.</p>
                                <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nome:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Email:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                        <small>Confira o email para retorno da mensagem.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Mensagem:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Sair</button>
                                <button type="button" class="btn btn"
                                    style="background-color: #4070F4; color:#fff">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">astros21.com.br</a>, todos os direitos reservados.
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('cliente/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('cliente/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('cliente/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('cliente/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('cliente/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('cliente/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('cliente/lib/lightbox/js/lightbox.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('cliente/js/main.js') }}"></script>

    <!-- card_slide_slick -->
    <script src="{{ asset('cliente/card_slide_slick/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('cliente/card_slide_slick/js/script.js') }}"></script>
    <script src="{{ asset('js/alertas.js') }}" defer></script>
</body>

</html>
