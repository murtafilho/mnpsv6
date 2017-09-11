<form class="form-inline">
    <div class="form-group">
        <label for="logradouro"></label>
        <input type="text" class="form-control" name="logradouro" placeholder="Início do logradouro" value="{!! request()->logradouro !!}">
    </div>
    <div class="form-group">
        <label for="numero"></label>
        <input type="text" class="form-control" name="numero" placeholder="Número" value="{!! request()->numero !!}">
    </div>
    <button type="submit" class="btn btn-default">Buscar</button>
</form>
<table class="table table-responsive" id="previsaos-table">
    <thead>

        <th>Logradouro</th>

        <th>Bairro</th>

        <th>Regional</th>
        <th>Numero</th>
        <th>Leste</th>
        <th>Norte</th>
        <th>Diurno</th>
        <th>Vespertino</th>
        <th>Noturno1</th>
        <th>Noturno2</th>

    </thead>
    <tbody>
    @foreach($previsaos as $previsao)
        <tr>

            <td>{!! $previsao->logradouro !!}</td>

            <td>{!! $previsao->bairro !!}</td>

            <td>{!! $previsao->regional !!}</td>
            <td>{!! $previsao->numero !!}</td>
            <td>{!! $previsao->leste !!}</td>
            <td>{!! $previsao->norte !!}</td>
            <td>{!! $previsao->DIURNO !!}</td>
            <td>{!! $previsao->VESPERTINO !!}</td>
            <td>{!! $previsao->NOTURNO1 !!}</td>
            <td>{!! $previsao->NOTURNO2 !!}</td>

        </tr>
    @endforeach
    </tbody>
</table>
{!! $previsaos->appends(request()->except('page'))->links() !!}