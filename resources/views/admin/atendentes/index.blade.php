@extends('layouts.appAdmin')

@section('content')
    @if (Session::has('success'))

        <body onload="alertaMessagem('<?php echo Session::get('success'); ?>', 'success')">
    @endif
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
                <a type="button" class="btn btn-primary float-right" href="{{ route('atendentes.create') }}">Cadastrar
                    &ensp;<i class="bi bi-plus-square-fill"></i></a> <br><br>
                @if (count($usuarios))
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Usuário</th>
                                <th scope="col">Email</th>
                                <th scope="col">Criado em</th>
                                <th scope="col">Conectado</th>
                                <th scope="col">Situação</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->atendente->nome }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ date('d/m/Y H:i:s', strtotime($user->atendente->criado)) }}</td>
                                    <td>{{ $user->atendente->conectado == 0 ? 'não' : 'sim' }}</td>
                                    <td>{{ $user->atendente->situacao }}</td>
                                    <td id="statusUser<?php echo $user->id; ?>">{{ $user->atendente->status }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu" style="cursor: pointer;">
                                                <a class="dropdown-item"
                                                    href="{{ route('atendentes.edit', $user->id) }}">Editar</a>
                                                @if ($user->atendente->status == 'Ativo')
                                                    <a class="dropdown-item"
                                                        onclick="desativarAtendente('<?php echo $user->name; ?>', '<?php echo $user->id; ?>')">Desativar</a>
                                                @else
                                                    <a class="dropdown-item"
                                                        onclick="ativarAtendente('<?php echo $user->name; ?>', '<?php echo $user->id; ?>')">Ativar</a>
                                                @endif
                                                <a class="dropdown-item" href="#">Excluir</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-primary" role="alert">
                        Nenhum atendente Cadastrado!
                    </div>
                @endif
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
    <script src="{{ asset('js/admin/js/atendentes/index.js') }}" defer></script>
@endsection
