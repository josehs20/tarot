@extends('layouts.appCliente')

@section('content')
    <style>
        .hrPage {
            width: 100%;
            height: 1px;
            border: 0px;
            border-top: 1px solid #d8a200;
            background-color: #dddddd;
        }
    </style>
    <!-- Carousel Start -->
    <div id="homePage" class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{ asset('imgs/carrosel1.jpg') }}'>">
                <img class="img-fluid" src="{{ asset('imgs/carrosel1.jpg') }}" alt="Imagem carrosel 1">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Bem vindo
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Com apenas um click, um toque você se conecta
                                    com os melhores do Brasil!</p>
                                <a href=""
                                    class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Consultar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{ asset('imgs/carrosel2.jpg') }}'>">
                <img class="img-fluid" src="{{ asset('imgs/carrosel2.jpg') }}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Astros e vidência!
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Com você nas decisões mais importantes da sua
                                    vida</p>
                                <a href=""
                                    class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Consultar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{ asset('imgs/carrosel3.jpg') }}'>">
                <img class="img-fluid" src="{{ asset('imgs/carrosel3.jpg') }}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Conhecendo seus caminhos ...
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Onde os caminhos levarão ao equilíbrio do EU
                                </p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Consultar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        {{-- <img class="img-fluid" src="img/img-600x400-1.jpg" alt=""> --}}
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="bi bi-phone-flip fa-3x"></i>
                            </div>
                            <h4 class="mb-3">CONSULTE ONDE E QUISER</h4>
                            <p>Onde e quando precisar, você terá sempre um consultor a sua disposição na palma da sua mão.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        {{-- <img class="img-fluid" src="img/img-600x400-2.jpg" alt=""> --}}
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="bi bi-clock-history fa-3x"></i>
                            </div>
                            <h4 class="mb-3">ATENDIMENTO 24 HORAS</h4>
                            <p>Sempre alguém disposto a escutar e orientar você.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        {{-- <img class="img-fluid" src="img/img-600x400-3.jpg" alt=""> --}}
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="bi bi-calendar-check fa-3x"></i>
                            </div>
                            <h4 class="mb-3">AGENDE SUA CONSULTA</h4>
                            <p>Suas consultas valem pontos. Junte e troque seus pontos por mais minutos de consulta. Suas
                                consultas valem pontos.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <hr id="consultoresPage" class="hrPage">

    <div class="row">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-4">NOSSOS CONSULTORES</h1>
        </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="cliente/card_slide_slick/images/profile1.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <div class="row justify-content-around">
                                <span class="col-md-6" style="color: green">Online</span>
                                <button class="button">View More</button>
                            </div>

                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="cliente/card_slide_slick/images/profile2.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <div class="row justify-content-around">
                                <span class="col-md-6" style="color: green">Online</span>
                                <button class="button">View More</button>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="cliente/card_slide_slick/images/profile3.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <div class="row justify-content-around">
                                <span class="col-md-6" style="color: green">Online</span>
                                <button class="button">View More</button>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="cliente/card_slide_slick/images/profile4.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <div class="row justify-content-around">
                                <span class="col-md-6" style="color: green">Online</span>
                                <button class="button">View More</button>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="cliente/card_slide_slick/images/profile5.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <div class="row justify-content-around">
                                <span class="col-md-6" style="color: green">Online</span>
                                <button class="button">View More</button>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="cliente/card_slide_slick/images/profile6.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <div class="row justify-content-around">
                                <span class="col-md-6" style="color: green">Online</span>
                                <button class="button">View More</button>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="cliente/card_slide_slick/images/profile7.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <div class="row justify-content-around">
                                <span class="col-md-6" style="color: green">Online</span>
                                <button class="button">View More</button>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="cliente/card_slide_slick/images/profile8.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <div class="row justify-content-around">
                                <span class="col-md-6" style="color: green">Online</span>
                                <button class="button">View More</button>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="cliente/card_slide_slick/images/profile9.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <div class="row justify-content-around">
                                <span class="col-md-6" style="color: green">Online</span>
                                <button class="button">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- end cards slide -->
        <hr id="comprarPage" class="hrPage">
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-4">COMO SE CONSULTAR</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded overflow-hidden">
                            {{-- <img class="img-fluid" src="img/img-600x400-1.jpg" alt=""> --}}
                            <div class="position-relative p-4 pt-0">
                                <div class="service-icon">
                                    <i class="bi bi-card-checklist fa-3x"></i>
                                </div>
                                <h4 class="mb-3">Faça seu cadastro</h4>
                                <p>É rápido e fácil. Em instantes seu acesso estará disponível.</p>
                                <a class="small fw-medium" href="{{route('register')}}">Cadastro<i
                                        class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded overflow-hidden">
                            {{-- <img class="img-fluid" src="img/img-600x400-2.jpg" alt=""> --}}
                            <div class="position-relative p-4 pt-0">
                                <div class="service-icon">
                                    <i class="bi bi-cash-coin fa-3x"></i>
                                </div>
                                <h4 class="mb-3">Adquira seus minutos</h4>
                                <p>Temos diversos pacotes que se adaptam a sua necessidade.</p>
                                <a class="small fw-medium" href="#">Adquirir minutos<i
                                        class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded overflow-hidden">
                            {{-- <img class="img-fluid" src="img/img-600x400-3.jpg" alt=""> --}}
                            <div class="position-relative p-4 pt-0">
                                <div class="service-icon">
                                    <i class="bi bi-person-bounding-box fa-3x"></i>
                                </div>
                                <h4 class="mb-3">Escolha seu consultor</h4>
                                <p>Nossos Profissionais são altamente capacitados e estao prontos a atendê-lo!</p>
                                <a class="small fw-medium" href="#consultoresPage">Consultores<i
                                        class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        <hr class="hrPage">
        <div class="container-xxl py-5">
            <div id="quemSomosPage" class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-4">QUEM SOMOS</h1>
                </div>
                <div class="row">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded overflow-hidden">
                            {{-- <img class="img-fluid" src="img/img-600x400-1.jpg" alt=""> --}}
                            <div class="position-relative p-4 pt-0">
                                <h4 class="mb-3 mt-4">Bem Vindos !</h4>
                                <p>Somos uma comunidade formada por Profissionais Conceituadíssimos, Apômetras,
                                    Cartomantes,Terapeutas Holísticos, Tarólogos e Oraculistas que tem por objetivo
                                    orientá-lo(a) em sua jornada terrena, na busca de seu Eu Superior, acessando sempre sua
                                    Sabedoria Ancestral, para uma melhor tomada de decisões em seu caminho.

                                    Estamos Sempre Juntos e Somos Todos Irmãos de Humanidade.</p>
                                <a class="small fw-medium" style="color: #ffc107;">Um Grande Abraço, Equipe Astros21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        {{-- <!-- Quote Start -->
        <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
            <div class="container quote px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="img/quote.jpg"
                                style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-lg-5 pe-lg-0">
                            <h6 class="text-primary">Free Quote</h6>
                            <h1 class="mb-4">Get A Free Quote</h1>
                            <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                amet
                                diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet
                            </p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" placeholder="Your Name"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control border-0" placeholder="Your Email"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" placeholder="Your Mobile"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select border-0" style="height: 55px;">
                                            <option selected>Select A Service</option>
                                            <option value="1">Service 1</option>
                                            <option value="2">Service 2</option>
                                            <option value="3">Service 3</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary rounded-pill py-3 px-5"
                                            type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quote End --> --}}
        <hr id="promocoesPage" class="hrPage">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-4">PROMOÇÕES</h1>
                    <h6 class="text-warning">Este Espaço está sempre sendo Atualizado com novas Promoções, Ofertas
                        Especiais e muitas outras novidades!</h6>
                </div>
                <div class="row">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded overflow-hidden">
                            {{-- <img class="img-fluid" src="img/img-600x400-1.jpg" alt=""> --}}
                            <div class="position-relative p-4 pt-0">
                                <h4 class="mb-3 mt-4">Quanto mais Pontos, mais Minutos Grátis para você!</h4>
                                <p>O Plano Fidelidade beneficia nossos Clientes com Pontos que vão sendo Acumulados e
                                    Trocados por minutos em consulta. Tudo isso de maneira simples e rápida!</p>

                                <ul>
                                    <li><span style="color: #000">Pacote 10 Minutos =</span> 01 Ponto Plano Fidelidade
                                    </li>
                                    <li><span style="color: #000">Pacote 10 Minutos =</span> 01 Ponto Plano Fidelidade
                                    </li>
                                    <li><span style="color: #000">Pacote 10 Minutos =</span> 01 Ponto Plano Fidelidade
                                    </li>
                                    <li><span style="color: #000">Pacote 10 Minutos =</span> 01 Ponto Plano Fidelidade
                                    </li>
                                    <li><span style="color: #000">Pacote 10 Minutos =</span> 01 Ponto Plano Fidelidade
                                    </li><li><span style="color: #000">Pacote 10 Minutos =</span> 01 Ponto Plano Fidelidade
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    {{-- <h6 class="text-primary">Testimonial</h6> --}}
                    <h1 class="mb-4">Depoimentos</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item text-center">
                        <div class="testimonial-img position-relative">
                            <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-1.jpg">
                            <div class="btn-square bg-warning rounded-circle">
                                <i class="fa fa-quote-left text-white"></i>
                            </div>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                                ut
                                diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                                clita.
                            </p>
                            <h5 class="mb-1">Client Name</h5>
                            <span class="fst-italic">Profession</span>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="testimonial-img position-relative">
                            <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-2.jpg">
                            <div class="btn-square bg-warning rounded-circle">
                                <i class="fa fa-quote-left text-white"></i>
                            </div>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                                ut
                                diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                                clita.
                            </p>
                            <h5 class="mb-1">Client Name</h5>
                            <span class="fst-italic">Profession</span>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="testimonial-img position-relative">
                            <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-3.jpg">
                            <div class="btn-square bg-warning rounded-circle">
                                <i class="fa fa-quote-left text-white"></i>
                            </div>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                                ut
                                diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                                clita.
                            </p>
                            <h5 class="mb-1">Client Name</h5>
                            <span class="fst-italic">Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    @endsection
