@section('css')
    <style>
        tr td {
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
@endsection
<div class="panel panel-default">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a id="#alinkPanelFonte" href="#fonte" aria-controls="fonte" role="tab"
                                                  data-toggle="tab"><b>FONTE</b>
                <div class="badge"
                     id="contadorFonte" style="margin-left: 5px"></div>
            </a></li>
        <li role="presentation"><a id="#alinkPanelFundo" href="#fundo" aria-controls="fundo" role="tab"
                                   data-toggle="tab"><b>FUNDO</b>

                <div class="badge"
                     id="contadorFundo" style="margin-left: 5px"></div>
            </a></li>

    </ul>

    <div class="tab-content">

        <div role="tabpanel" class="tab-pane active fade in" id="fonte">
            @if($rota == 'mobile')
                @include('mnps.mobile._fonte')
                <p style="text-align: center"><b>Medições Fonte</b></p>
            @endif

            {!! $tableFonte !!}
        </div>

        <div role="tabpanel" class="tab-pane fade" id="fundo">
            @if($rota == 'mobile')
                @include('mnps.mobile._fundo')
                <p style="text-align: center"><b>Medições Fundo</b></p>
            @endif

            {!! $tableFundo !!}

        </div>

    </div>

</div>


@section('scripts')

    <script src="{{asset('js/mnps/mobile.js')}}"></script>

@endsection