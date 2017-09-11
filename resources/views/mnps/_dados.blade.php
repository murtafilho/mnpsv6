
<div class="panel panel-default" style="margin-bottom: 0px">


    <div class="panel-heading" >
        <h1 class="panel-title">Local Fiscalizado</h1>
    </div>
    <div class="panel-body">


        <div class="form-group">

            {!! Form::label('localFiscalizado','Empreendimento/Local Fiscalizado*') !!}


                <input type="text" class="form-control" placeholder="" name="localFiscalizado" id="localFiscalizado">

            @include('mnps._novo_local')

        </div>


        <div class="form-group">

            <label for="enderecoReclamado" class="control-label">Logradouro* (digitar o início do nome do logradouro - não utillizar rua, avenida, etc)</label>
            {!! Form::text('enderecoReclamado', null, ['placeholder' => 'Digitar','class' => 'form-control','id'=>'enderecoReclamado','type'=>'search']) !!}

            <input type="hidden" id="id_enderecoReclamado" name="id_enderecoReclamado">

        </div>


        <div class="form-group">

            <div class="row">

                <div class="col-lg-4">

                    {!! Form::label('numeroReclamado','Número') !!}
                    {!! Form::text('numeroReclamado',null,['class'=>'form-control']) !!}
                </div>

            </div>

        </div>


        <div class="form-group">

            {!! Form::label('complementoReclamado','Complemento') !!}
            {!! Form::text('complementoReclamado',null,['class'=>'form-control']) !!}

        </div>

    </div>


</div>


<div class="panel panel-default" style="margin-bottom: 0px">
    <div class="panel-heading">
        <h1 class="panel-title">Endereço da Medição</h1>
    </div>
    <div class="panel-body">

        <div class="form-group">

            <label for="enderecoMedicao" class="control-label">Logradouro* (digitar o início do nome do logradouro - não utillizar rua, avenida, etc</label>
            {!! Form::text('enderecoMedicao', null, ['placeholder' => 'Digitar','class' => 'form-control','id'=>'enderecoMedicao','type'=>'search']) !!}

            <input type="hidden" id="id_enderecoMedicao" name="id_enderecoMedicao">

        </div>


        <div class="form-group">

            <div class="row">

                <div class="col-lg-4">
                    {!! Form::label('numeroMedicao','Número') !!}
                    {!! Form::text('numeroMedicao',null,['class'=>'form-control']) !!}
                </div>

            </div>

        </div>

        <div class="form-group">

            {!! Form::label('complementoMedicao','Complemento') !!}
            {!! Form::text('complementoMedicao',null,['class'=>'form-control']) !!}

        </div>


    </div>

</div>




<br>