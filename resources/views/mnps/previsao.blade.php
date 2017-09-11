<h4>Previsão de níveis de ruído de fundo (sem valor legal - não será impresso)</h4>
<ul class="list-group noprint">
    @foreach($local as $loc)
        <li class="list-group-item">
            <B>Logradouro: </B> {{ $loc->logradouro}}
        </li>
        <li class="list-group-item">
            <b>Numero: </b> {{ $loc->numero}}
        </li>
        <li class="list-group-item">
            <b>Coordenadas: </b> {{ $loc->leste.','.$loc->norte}}
        </li>
        <li class="list-group-item">
            <b>Diruno: </b> {{ number_format($loc->DIURNO,1)}}
        </li>
        <li class="list-group-item">
            <b>Vespertino: </b> {{ number_format($loc->VESPERTINO,1)}}
        </li>
        <li class="list-group-item">
            <b>Noturno1: </b> {{ number_format($loc->NOTURNO1,1)}}
        </li>
        <li class="list-group-item">
            <b>Noturno2: </b> {{ number_format($loc->NOTURNO2,1)}}
        </li>
    @endforeach
</ul>
