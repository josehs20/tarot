@extends('layouts.appAdmin')

@section('content')
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
                            <th scope="col"><a type="button" class="btn btn-primary"
                                    href="{{ route('atendentes.create') }}">Cadastrar &ensp;<i
                                        class="bi bi-plus-square-fill"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Editar</a>
                                        <a class="dropdown-item" href="#">Ativar</a>
                                        <a class="dropdown-item" href="#">Desativar</a>
                                        <a class="dropdown-item" href="#">Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
@endsection
