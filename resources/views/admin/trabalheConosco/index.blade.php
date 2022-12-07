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

                @if (count($curriculos))
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">data</th>
                                <th scope="col">Visualizado</th>
                                <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($curriculos as $c)
                                <tr id="curriculo{{ $c->id }}">
                                    <th scope="row">{{ $c->id }}</th>
                                    <td>{{ $c->nome }}</td>
                                    <td>{{ $c->email }}</td>
                                    <td>{{ $c->telefone }}</td>
                                    <td>{{ date('d/m/Y H:i:s', strtotime($c->created_at)) }}</td>
                                    <td>{{ $c->status == 0 ? 'não' : 'sim' }}</td>
                                    {{-- <td><a href="{{route('download_curriculo', $c->id)}}" style="cursor: pointer;"><i style="font-size: 20px; color:#000" class="bi bi-eye-fill mx-3"></i></a></td> --}}
                                    {{-- <td><a onclick="delteCurriculo('<?php echo $c->id; ?>')" style="cursor: pointer;"><i style="font-size: 20px; color:#000" class="bi bi-trash3-fill mr-3"></i></a></td> --}}
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu" style="cursor: pointer;">
                                                <a class="dropdown-item"
                                                    href="{{ route('download_curriculo', $c->id) }}">Visualizar</a>
                                                
                                                <a class="dropdown-item"
                                                    onclick="delteCurriculo('<?php echo $c->id; ?>')">Excluir</a>
                                               

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-primary" role="alert">
                        Nenhum registro encontrado!
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
