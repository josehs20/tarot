@extends('layouts.appAdmin')

@section('content')
    <style>
        .colorTextLabel {
            color: black
        }
    </style>
    {{-- ---------------------------------------------CONTENT------------------------------------------ --}}
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Olá, <span>Bem vindo {{ auth()->user()->name }}</span></h1>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <section id="main-content">
        <div class="card">
            <div class="card-body">
                <form onsubmit="validateForm(); return false;" action="{{route('atendentes.store')}}" id="formCadastroAtendente" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlFile1" class="colorTextLabel">Avatar*</label>
                        <input type="file" accept="image/*"class="form-control-file" name="img" required>
                        <small id="emailHelp" class="form-text text-muted">JPG ou PNG no tamanho: Largura 210px X Altura
                            210px.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="colorTextLabel">Nome*</label>
                        <input type="text" name="nome" class="form-control" aria-describedby="emailHelp"
                            placeholder="Nome" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="colorTextLabel">Email*</label>
                        <input type="email" name="email" class="form-control" aria-describedby="emailHelp"
                            placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="colorTextLabel">Usuário*</label>
                        <input type="text" name="usuario" class="form-control"=aria-describedby="emailHelp"
                            placeholder="Usuário" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="colorTextLabel">Comissão*</label>
                        <input type="number" name="comissao" class="form-control" aria-describedby="emailHelp"
                            placeholder="Comissão" required>
                        <small id="emailHelp" class="form-text text-muted">Comissão em %.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="colorTextLabel">Descrição*</label>
                        <textarea name="descricao" name="descricao" class="form-control" aria-label="With textarea" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1" class="colorTextLabel">Senha*</label>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1" class="colorTextLabel">Confirmar Senha*</label>
                        <input name="confirmSenha" type="password" class="form-control"
                            placeholder="Confirmar Senha" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="footer">
                    <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/admin/js/atendentes/create.js') }}" defer></script>
@endsection
