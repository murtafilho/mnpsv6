@extends('layouts.app')

@section('content')
    @php $rota = Request::route()->getName() @endphp
    {!! Form::open(['route'=>'resultado','target'=>'_blank']) !!}

    <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Dados
                    de Medição</a></li>

            <li role="presentation"><a href="#relatorio-content" aria-controls="relatorio" role="tab" data-toggle="tab">Relatório
                    de
                    Vistoria</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            @include('mnps._expediente')

                                @include('mnps.input-tables')

                            @include('mnps._decibelimetro')
                        </div>
                        <div class="col-md-4">
                            @include('mnps._dados')
                            <div class="alert alert-warning alert-dismissable">
                                <p>Para medições em que o nível equivalente atribuido à fonte:</p>

                                <p>- utrapassar em mais de 10 dB(A) o ruído de fundo
                                </p>

                                <p>- permanecer dentro dos limites

                                    <br>
                                <p>
                                    A infração será indicada, implicitamente, pelo Art. 4º § 7º.
                                </p>
                                </u>

                            </div>
                        </div>
                        <div class="col-md-4">
                            @include('mnps._paramentros')
                            <button class="btn btn-lg btn-primary fom-control" style="width: 100%">Gerar
                                Relatório
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="relatorio-content">
                <div class="col-md-6">
                    <textarea name="relatorio" id="relatorio">

                    </textarea>
                    <script>
                        CKEDITOR.replace('relatorio', {
                                language: "pt-br",
                                width: "100%",
                                height: "600px"
                            }
                        );
                    </script>

                </div>
                <div class="col-md-6">
                    @include('mnps.modelo')
                </div>
            </div>


        </div>
    </div>

    {!! Form::close() !!}
@endsection
