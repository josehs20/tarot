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
                <form action="{{ route('clientes.index') }}" method="GET">
                    @csrf
                    <div class="form-group">
                        <div class="d-flex justify-content-around">
                            <input type="text" class="form-control col-md-8" name="nome" aria-describedby="emailHelp"
                                placeholder="Buscar atendente">
                            <button type="submit" class="btn btn-primary mx-1">Buscar</button>
                             <br><br>
                        </div>
                    </div>
                </form>

                @if (count($usuarios))
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Usuário</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tempo</th>
                                <th scope="col">Tempo conversado</th>
                                <th scope="col">Criado em</th>
                                <th scope="col">Conectado</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->cliente->nome }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->cliente->tempo }}</td>
                                <td>{{ $user->cliente->tempo_conversa }}</td>
                                <td>{{ date('d/m/Y H:i:s', strtotime($user->cliente->criado)) }}</td>
                                <td>{{ $user->cliente->conectado == 0 ? 'não' : 'sim' }}</td>
                                <td id="statusUser<?php echo $user->id; ?>">{{ $user->cliente->status }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        </button>
                                        <div class="dropdown-menu" style="cursor: pointer;">
                                            <a class="dropdown-item"
                                                href="{{ route('clientes.edit', $user->id) }}">Editar</a>
                                            {{-- @if ($user->atendente->status == 'Ativo') --}}
                                            <a class="dropdown-item {{ $user->cliente->status == 'Ativo' ? '' : 'd-none' }}"
                                                id="buttonDesativar<?php echo $user->id; ?>"
                                                onclick="ativar_desativar_cliente('<?php echo $user->name; ?>', '<?php echo $user->id; ?>', '<?php echo $user->cliente->status; ?>')">Desativar</a>
                                            {{-- @else --}}
                                            <a class="dropdown-item {{ $user->cliente->status == 'Desativado' ? '' : 'd-none' }}"
                                                id="buttonAtivar<?php echo $user->id; ?>"
                                                onclick="ativar_desativar_cliente('<?php echo $user->name; ?>', '<?php echo $user->id; ?>', '<?php echo $user->cliente->status; ?>')">Ativar</a>
                                            {{-- @endif --}}
                                            <a class="dropdown-item"
                                                onclick="delete_cliente('<?php echo $user->name; ?>', '<?php echo $user->id; ?>');">Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                              
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-primary" role="alert">
                        Nenhum Cliente Encontrado!
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
    <script src="{{ asset('js/admin/js/clientes/index.js') }}" defer></script>
@endsection
