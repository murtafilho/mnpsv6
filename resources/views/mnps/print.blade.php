@extends('layouts.simples')
@section('css')
    <style>
        .content-wrapper {
            background-color: white;
        }

        p, body, li, td, p, .list-group-item {
            text-align: justify;

            font-size: 14px;
        }

        #map {

            height: 500px;

        }

        @media print {
            body, div, a, li, p, td {
                text-align: justify;
                margin-bottom: 0.5cm;
                margin-top: 0.5cm;
                margin-left: 1.2cm;
                margin-right: 0.5cm;
                font-size: 12px;
                size: auto; /* auto is the initial value */
                margin: 0mm; /* this affects the margin in the printer settings */
                font-family: Arial;
            }

            .noprint {
                visibility: hidden;
            }
        }
    </style>
@endsection
@section('content')
    <form>
        <input type="hidden" name="dados[]" id="dados" value="">
    </form>
    @php
            @endphp
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <h4 style="text-align: center">Relatório de Medições de Níveis de Pressão Sonora
                    - {{'Expediente: '. $tipo_exp.' '.$num_exp }}</h4>
                <br>
                <table class="table table-bordered">

                    <tbody>
                    <tr>
                        <td width="200px">Local Fiscalizado:</td>
                        <td>{{$localFiscalizado.' - '.$enderecoReclamado}}</td>
                    </tr>
                    <tr>
                        <td width="200px">Data e Horário da Medição:</td>
                        <td>{!! $dataMedicao.' de '.$inicio.' às '.$fim.'<b> - Período '.$periodo.'</b>'  !!}</td>
                    </tr>
                    <tr>
                        <td width="200px">Endereço MNPS:</td>
                        <td>{{$enderecoMedicao}}</td>
                    </tr>
                    <tr>
                        <td width="200px">Posicionamento da Medição:</td>
                        <td>{!! $posicionamento  !!} a aproximadamente {{$distancia}} metros do local fiscalizado</td>
                    </tr>
                    <tr>
                        <td width="200px">Descrição da Fonte:</td>
                        <td>{{$ruido}}</td>
                    </tr>
                    <tr>
                        <td width="200px">Decibelímetro utilizado:</td>
                        <td style="text-align: justify">
                            Para a realização dos trabalhos, foi utilizado um medidor de nível sonoro de precisão,
                            {{$decibelimetro}}, que utiliza a curva de ponderação (A), sendo obedecidas as normas da lei
                            9.505 de 23/01/08.
                        </td>
                    </tr>


                    </tbody>
                </table>

                <table class="table">
                    <tr>
                        <td>{!! $tabelaFonte !!}</td>
                        @if($leqFundo>0)
                            <td>{!! $tabelaFundo !!}</td>
                        @endif
                    </tr>
                </table>

                <div class="list-group">

                    @if($leqFundo > 0)
                        <div class="list-group-item">
                            Em virtude da contribuição do ruído de fundo, será depreciado do
                            nível equivalente do ruído total,o valor de:
                            <b> {{$depreciacao}}
                                dB(A)</b>, atribuindo-se à fonte em análise o nível equivalente de:
                            <span style='font-size: 14px'><b>{{$atribuicaoFonte}} dB(A)</b></span>
                        </div>

                    @endif

                    @if(isset($escolaHospital))

                        <div class="list-group-item">
                            {!! $escolaHospital !!}
                        </div>

                    @endif

                    @if(isset($sexSabFer))

                        <div class="list-group-item">
                            {!! $sexSabFer !!}
                        </div>

                    @endif

                    @if(isset($alterLocal))

                        <div class="list-group-item">
                            {!! $alterLocal !!}
                        </div>

                    @endif

                    @if(isset($sistemas))

                        <div class="list-group-item">
                            {!! $sistemas !!}
                        </div>

                    @endif

                    @if(isset($construcao))

                        <div class="list-group-item">
                            {!! $construcao !!}
                        </div>

                    @endif

                    @if(isset($relatorio))
                    
                        <h4>Relatório de Vistoria</h4>
                        <div class="list-group-item">
                            <p style="text-align: justify"> {!! $relatorio !!}</p>
                        </div>

                    @endif
                </div>

                @if(isset($resultado))
                    <ul class="list-group">
                        @if($acimaDe10 > 10 && isset($acimaDe10) && $leqFundo>0)
                            <li class="list-group-item" style="background-color: #e8e8e8">
                                Apesar do Leq atribuido à fonte de
                                <b>{{number_format(session('atribuicaoFonte'),1)}} dB(A)</b>
                                permanecer dentro do limite de <b>{{session('limite')}}dB(A)</b>,
                                a fonte em avaliação ultrapassa em mais de 10 dB(A) o nível equivalente ao ruído de fundo medido como <b>{{$leqFundo}}
                                    dB(A)</b>, o que constitui
                                infração de acordo com o Art. 4º § 7º
                            </li>
                        @else
                            <li class="list-group-item" style="background-color: #e8e8e8">
                                <p style="font-size: 14px"><b>RESULTADO:</b> O nível equivalente atribuido à
                                    fonte de
                                    <b>{{number_format(session('atribuicaoFonteVariavel'),1)}} dB(A)</b>
                                    encontra-se
                                    <b>{{session('RESULTADO')}}</b>
                                    do limite de <b>{{session('limite')}}dB(A)</b>, de acordo com a
                                    aplicação da
                                    Lei 9505/08, Dec. 16.529/16 e observãncia às normas técnicas NBR
                                    10.151, 10.152.</p>
                            </li>
                        @endif
                    </ul>
                @endif




            </div>

            <div class="col-md-6">
                @if(isset($artigos) and session('RESULTADO') != 'DENTRO')
                    <ul class="list-group">
                        @foreach($artigos as $artigo)
                            <li class="list-group-item">
                                <B>ID#: {{$artigo->id}}</B> : {{ $artigo->descricao}}
                            </li>
                            <li class="list-group-item">
                                <b>Detalhamento: </b> {{ $artigo->detalhamento}}
                            </li>
                            <li class="list-group-item">
                                <b>Lei: </b> {{ $artigo->lei}}
                            </li>
                            <li class="list-group-item">
                                <b>Decreto: </b> {{ $artigo->decreto}}
                            </li>
                            <li class="list-group-item">
                                <b>Classificação: </b> {{ $artigo->classificacao}}
                            </li>
                        @endforeach
                    </ul>
                @endif
                    @if(isset($usuario))
                        {{$usuario}}
                    @endif
                @if(isset($local))
                    <div class="noprint">
                        @include('mnps.previsao')
                    </div>
                @endif


                <div class="container-fluid">
                    <div class="row noprint">
                        <div>
                            <button class="btn btn-primary  btn-lg btn-block" value="Iprimir" type="button"
                                    id="imprimir">Imprimir
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $("#imprimir").click(function () {
                window.print();
            });




        })
    </script>
@endsection