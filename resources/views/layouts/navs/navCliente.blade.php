   <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg bg-warning navbar-light sticky-top p-0">
       <a href="/" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
           <img style="border-radius: 10px;" width="140" height="70" src="{{ asset('imgs/logo.jpg') }}" alt="">
       </a>
       <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
           <div id="navPages" class="navbar-nav ms-auto">
               <a href="/#homePage" class="nav-item nav-link active">HOME</a>
               <a href="/#quemSomosPage" class="nav-item nav-link">QUEM SOMOS</a>
               <a href="/#consultoresPage" class="nav-item nav-link">CONSULTORES</a>
               <a href="/#comprarPage" class="nav-item nav-link">COMPRAR</a>
               <a href="/#promocoesPage" class="nav-item nav-link">PROMOÇÕES</a>
               <a href="{{route('index_envio_curriculo')}}" class="nav-item nav-link">TRABALHE CONOSCO</a>
               <a href="/#contatoPage" class="nav-item nav-link">CONTATO</a>

           </div>
           @if (auth()->user())
           <li class="nav-item dropdown" style="list-style: none;">
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
           @else
               <a href="{{ route('login') }}" class="btn btn-warning rounded-0 py-4 px-lg-5">Entrar <i
                       class="fa fa-arrow-right ms-3"></i></a>
           @endif


       </div>
   </nav>
   <!-- Navbar End -->
