@extends('layouts.appCliente')
<link rel="stylesheet" href="css/login/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
    <div class="container">
        {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Entrar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     </div> --}}
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <div class="wrap">
                            <div class="img" style="background-image: url(imgs/logo.jpg);"></div>
                            <div class="login-wrap p-4 p-md-5">
                                <div class="d-flex">
                                    <div class="d-flex justify-content-between w-100">
                                        <h3 class="mb-4">Entrar</h3>

                                        <a href="{{route('register')}}" style="font-size: 18px;" class="mb-0 ">Registre-se


                                        </a>
                                    </div>
                                    {{-- <div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div> --}}
                                </div>
                                <form class="signin-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label class="" for="username">Email</label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                                            required autocomplete="email" autofocus
                                            class="form-control @error('email') is-invalid @enderror">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label class="" for="password">Senha</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn rounded submit px-3"
                                            style="background: #ffef2b;">Entrar</button>
                                    </div>

                                    <div class="form-group d-md-flex">
                                        <div class="w-50 text-left">
                                            <label class="checkbox-wrap mb-0">Lembrar-me
                                                <input type="checkbox" checked>
                                                <span class="checkmark"
                                                    style="background-color: #ffef2b; !important"></span>
                                            </label>
                                        </div>
                                        {{-- <div class="w-50 text-md-right">
                                                        <a href="#">Forgot Password</a>
                                                    </div> --}}
                                    </div>
                                    <div class="d-flex justify-content-start w-100">
                                      
                                            <label class="mb-0">Ainda não possui conta ?
                                                <a href="{{route('register')}}" style="font-size: 18px;" class="mb-0">Registre-se


                                                </a>
                                            </label>
                                        
                                       
                                    </div>
                             
                                </form>
                                {{-- <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('js/alertas.js') }}"></script>
    <script src="{{ asset('js/login/js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/login/js/popper.js') }}"></script>
    <script src="{{ asset('js/login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/login/js/main.js') }}"></script>

    <script defer>
        $(function($) {
            var cookie = {};

            document.cookie.split(';').forEach(function(el) {
                let [k, v] = el.split('=');
                cookie[k.trim()] = v;
            })
            if (cookie.success) {
                alertaMessagem('Cadastro realizado com sucesso', 'success')
                document.cookie = "success=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";

            }
        });
    </script>
@endsection
