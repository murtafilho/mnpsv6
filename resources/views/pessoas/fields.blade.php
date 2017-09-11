<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnpj Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj_cpf', 'CNPJ/CPF:') !!}
    {!! Form::text('cnpj_cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Endereco Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_id', 'Logradouro:') !!}
    {!! Form::text('LogradBairro', null, ['class' => 'form-control', 'id'=>'LogradBairro']) !!}
    {!! Form::hidden('endereco_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::number('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Complemento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('complemento', 'Complemento:') !!}
    {!! Form::text('complemento', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pessoas.index') !!}" class="btn btn-default">Cancel</a>
</div>

@section('scripts')

    <script>
        $(function () {

            $('#LogradBairro').autocomplete({
                source: '/searchender',
                minlength: 1,
                autofocus: true,
                select: function (event, ui) {
                    $(this).val(ui.item.value);
                    $("#endereco_id").val(ui.item.id);

                },
                search: function () {
                    $(this).addClass('loading');
                },
                open: function () {
                    $(this).removeClass('loading');
                },
                change: function (event, ui) {
                    if (!ui.item) {
                        $(this).removeClass('loading');
                        this.value = '';
                        alert('"CAMPO OBRIGATÓRIO!!!"\nLogradouro nao encontrado. Verifique se o logradouro inicia com ' +
                            'Professor, Desembargador...\nSe o logradouro não existir utilize o termo "Nao Identificado"');
                    }
                }
            });
        })

    </script>

@endsection