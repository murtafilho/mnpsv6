<div class="input-group custom-search-form">
    <form class="form-inline" action="{{route('pessoas.index')}}" method="get">
        <div class="form-group">
            <input type="text" class="form-control"  name="termo" placeholder="Nome/Logradouro" value="{!! request()->termo !!}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="numero" placeholder="Numero" value="{!! request()->numero !!}">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
    </form>
</div>
{!! Form::close() !!}
<table class="table table-responsive" id="pessoas-table">
    <thead>
        <th>Nome/Razão</th>
        <th>Cnpj Cpf</th>
        <th>Logradouro</th>
        <th>Bairro</th>
        <th>Numero</th>
        <th>Complemento</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($pessoas as $pessoa)
        <tr>
            <td>{!! $pessoa->name !!}</td>
            <td>{!! $pessoa->cnpj_cpf !!}</td>
            <td>{!! $pessoa->logradouro !!}</td>
            <td>{!! $pessoa->bairro !!}</td>
            <td>{!! $pessoa->numero !!}</td>
            <td>{!! $pessoa->complemento !!}</td>
            <td>
                {!! Form::open(['route' => ['pessoas.destroy', $pessoa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pessoas.show', [$pessoa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pessoas.edit', [$pessoa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $pessoas->appends(request()->except('page'))->links() !!}