@extends('layouts.appCliente')
<link rel="stylesheet" href="css/login/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@section('content')
    <div class="container">
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10">
                        <div class="wrap">
                            <div class="img" style="background-image: url(imgs/logo.jpg);"></div>
                            <div class="login-wrap p-4 p-md-5">
                                <div class="d-flex justify-content-center">
                                    <div class="">
                                        <h3 class="mb-4">Registrar</h3>
                                    </div>
                                    {{-- <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                </p>
                            </div> --}}
                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">Usuário</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">Nome</label>

                                        <div class="col-md-6">
                                            <input id="nome" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="nome"
                                                value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">Telefone</label>

                                        <div class="col-md-6">
                                            <input id="telefone" type="telefone" class="form-control" name="telefone"
                                                value="{{ old('telefone') }}" required>

                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">Data de
                                            nascimento</label>

                                        <div class="col-md-6">
                                            <input id="nascimento" type="date" class="form-control" name="nascimento"
                                                value="{{ old('nascimento') }}" required>

                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">Sexo</label>
                                        <div class="col-md-6">
                                            <select class="form-control" id="sexo" name="sexo">

                                                <option value="Masculino">Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                                <option value="Outros">Outros</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">Senha</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirme a
                                            senha</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            Ao cadastrar-me, declaro que sou maior de idade e aceito a Política de Privacidade do astros21.com.br.
                                        </div>
                                    </div>
                                  
                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Registrar
                                            </button>
                                        </div>
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
    <script src="{{ asset('js/login/js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/login/js/popper.js') }}"></script>
    <script src="{{ asset('js/login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/login/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" defer></script>
    <script defer>
        $(document).ready(function() {

            $('input[name=telefone]').mask("(99) 99999-9999")
           
        })
    </script>
@endsection
