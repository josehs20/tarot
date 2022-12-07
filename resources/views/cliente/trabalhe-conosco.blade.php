@extends('layouts.appCliente')
<link rel="stylesheet" href="css/login/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@section('content')
    @if (Session::has('success'))

        <body onload="alertaMessagem('<?php echo Session::get('success'); ?>', 'success')">
    @endif
    @if (Session::has('error'))

        <body onload="alertaMessagem('<?php echo Session::get('error'); ?>', 'error')">
    @endif
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
                                        <h3 class="mb-4">Cadastre-se no nosso banco de currículos.</h3>
                                    </div>
                                    {{-- <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                </p>
                            </div> --}}
                                </div>
                                <form action="{{ route('post_envio_curriculo') }}" id="formCurriculo" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">Nome</label>

                                        <div class="col-md-6">
                                            <input id="nome" type="text" class="form-control" name="nome"
                                                value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">
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
                                        <label for="telefone" class="col-md-4 col-form-label text-md-end">Cidade</label>

                                        <div class="col-md-6">
                                            <input id="cidade" type="text" class="form-control" name="cidade"
                                                value="{{ old('cidade') }}" required>

                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">Estado</label>
                                        <div class="col-md-6">
                                            <select class="form-control" id="estado" name="uf">
                                                <option value="AC">Acre</option>
                                                <option value="AL">Alagoas</option>
                                                <option value="AP">Amapá</option>
                                                <option value="AM">Amazonas</option>
                                                <option value="BA">Bahia</option>
                                                <option value="CE">Ceará</option>
                                                <option value="DF">Distrito Federal</option>
                                                <option value="ES">Espírito Santo</option>
                                                <option value="GO">Goiás</option>
                                                <option value="MA">Maranhão</option>
                                                <option value="MT">Mato Grosso</option>
                                                <option value="MS">Mato Grosso do Sul</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="PA">Pará</option>
                                                <option value="PB">Paraíba</option>
                                                <option value="PR">Paraná</option>
                                                <option value="PE">Pernambuco</option>
                                                <option value="PI">Piauí</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="RN">Rio Grande do Norte</option>
                                                <option value="RS">Rio Grande do Sul</option>
                                                <option value="RO">Rondônia</option>
                                                <option value="RR">Roraima</option>
                                                <option value="SC">Santa Catarina</option>
                                                <option value="SP">São Paulo</option>
                                                <option value="SE">Sergipe</option>
                                                <option value="TO">Tocantins</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="telefone" class="col-md-4 col-form-label text-md-end">Fale sobre
                                            você</label>

                                        <div class="col-md-6">
                                            <textarea name="sobre" id="" cols="25" rows="3" required></textarea>

                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="curriculo"
                                            class="col-md-4 col-form-label text-md-end">Currículo</label>

                                        <div class="col-md-6">
                                            <input class="form-control" type="file" id="curriculo" name="curriculo"
                                                accept=".pdf" value="{{ old('curriculo') }}" required>

                                            <small>Somente arquivos PDF.</small>
                                        </div>
                                    </div>

                                    <div class="row mb-0 mt-3">
                                        <div class="col-md-6 offset-md-4">
                                            Confira o email para retorno da mensagem!
                                        </div>
                                    </div>

                                    <div class="row mb-0 mt-3">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Enviar
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
    <script src="{{ asset('cliente/js/trabalheConosco.js') }}"></script>
    <script defer>
        $(document).ready(function() {

            $('input[name=telefone]').mask("(99) 99999-9999")

        })
    </script>
@endsection
