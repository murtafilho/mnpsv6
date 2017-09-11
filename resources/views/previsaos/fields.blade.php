<!-- Id Logradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_logradouro', 'Id Logradouro:') !!}
    {!! Form::number('id_logradouro', null, ['class' => 'form-control']) !!}
</div>

<!-- Logradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro', 'Logradouro:') !!}
    {!! Form::text('logradouro', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_bairro', 'Id Bairro:') !!}
    {!! Form::number('id_bairro', null, ['class' => 'form-control']) !!}
</div>

<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', 'Bairro:') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Regional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_regional', 'Id Regional:') !!}
    {!! Form::number('id_regional', null, ['class' => 'form-control']) !!}
</div>

<!-- Regional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regional', 'Regional:') !!}
    {!! Form::text('regional', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::number('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Leste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('leste', 'Leste:') !!}
    {!! Form::text('leste', null, ['class' => 'form-control']) !!}
</div>

<!-- Norte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('norte', 'Norte:') !!}
    {!! Form::text('norte', null, ['class' => 'form-control']) !!}
</div>

<!-- Diurno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DIURNO', 'Diurno:') !!}
    {!! Form::number('DIURNO', null, ['class' => 'form-control']) !!}
</div>

<!-- Vespertino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VESPERTINO', 'Vespertino:') !!}
    {!! Form::number('VESPERTINO', null, ['class' => 'form-control']) !!}
</div>

<!-- Noturno1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NOTURNO1', 'Noturno1:') !!}
    {!! Form::number('NOTURNO1', null, ['class' => 'form-control']) !!}
</div>

<!-- Noturno2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NOTURNO2', 'Noturno2:') !!}
    {!! Form::number('NOTURNO2', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('previsaos.index') !!}" class="btn btn-default">Cancel</a>
</div>
