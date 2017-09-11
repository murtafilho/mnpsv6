<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pessoa->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $pessoa->name !!}</p>
</div>

<!-- Cnpj Cpf Field -->
<div class="form-group">
    {!! Form::label('cnpj_cpf', 'Cnpj Cpf:') !!}
    <p>{!! $pessoa->cnpj_cpf !!}</p>
</div>

<!-- Endereco Id Field -->
<div class="form-group">
    {!! Form::label('endereco_id', 'Endereco Id:') !!}
    <p>{!! $pessoa->LogradBairro !!}</p>
</div>

<!-- Numero Field -->
<div class="form-group">
    {!! Form::label('numero', 'Numero:') !!}
    <p>{!! $pessoa->numero !!}</p>
</div>

<!-- Complemento Field -->
<div class="form-group">
    {!! Form::label('complemento', 'Complemento:') !!}
    <p>{!! $pessoa->complemento !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $pessoa->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $pessoa->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $pessoa->deleted_at !!}</p>
</div>

