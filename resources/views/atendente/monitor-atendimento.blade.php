@extends('layouts.appAtendente', ['active' => 'monitor-atendimento'])

@section('content')
    <style>
        .spanSituacao {
            border-radius: 5px;
            /* background-color: green; */
            color: white;
        }
    </style>
    @if (Session::has('success'))

        <body onload="alertaMessagem('<?php echo Session::get('success'); ?>', 'success')">
    @endif
    {{-- ---------------------------------------------CONTENT------------------------------------------ --}}
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Monitor de atendimentos</span></h1>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <section id="main-content">
        <form action="" method="GET">
            @csrf
            <div class="page-header">
                <div class="page-title">
                    <h6>Seu status agora é <span class="spanSituacao" style="background-color: {{$background}}">{{ $user->atendente->situacao }}</span>, não feche
                        esta janela ela te mantém online no atendimento. Caso queira se deslogar utilize o botão com seu
                        nome no canto direito superior.</h6>
                </div>
            </div>
        </form>
        <div class="card">

            <div class="card-body">
                <div class="form-group col-md-3">
                <label for="exampleInputEmail1" class="colorTextLabel">Status*</label>
            
                <select onchange="update_situacao_atendente(this.value, '<?php echo $user->id ?>')" class="custom-select" id="situacao" name="situacao">
                    <option {{ $user && $user->atendente->situacao == 'offline' ? 'selected' : '' }} value="offline">offline
                    </option>
                    <option {{ $user && $user->atendente->situacao == 'online' ? 'selected' : '' }} value="online">online</option>
                    <option {{ $user && $user->atendente->situacao == 'ocupado' ? 'selected' : '' }} value="ocupado">ocupado</option>
                </select>
            </div>

                    <table class="table table-hover">
                        <thead>
                            <tr>

                                <th scope="col">cliente</th>
                                <th scope="col">Iniciado em</th>
                                <th scope="col">status</th>

                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                         
                                <tr>

                                    <td>atendimento</td>
                                    <td>atendimento</td>
                                    <td>atendimento</td>
                                    <td></td>

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
    <script src="{{ asset('js/atendente/js/monitor_atendimento/monitorAtendimento.js') }}" defer></script>

@endsection
