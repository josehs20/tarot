@extends('layouts.appAdmin')

@section('content')
    <style>
        .colorTextLabel {
            color: black
        }
    </style>
    {{-- ---------------------------------------------CONTENT------------------------------------------ --}}
    @if (Session::has('error'))

        <body onload="alertaMessagem('<?php echo Session::get('error'); ?>', 'error')">
    @endif
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
                <form action="{{ route('clientes.update', $user->id) }}"
                    id="formUpdateAtendente" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf


                    @include('admin.clientes.inc.form', ['user' => $user])

                    <label for="exampleInputEmail1" class="colorTextLabel">Caso a senha seja preenchida a mesma será
                        alterada.</label><br>

                    <button type="submit" class="btn btn-primary">Editar</button>
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
    <script src="{{ asset('js/admin/js/clientes/edit.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" defer></script>
@endsection
