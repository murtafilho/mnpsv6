<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Expediente</h3>
    </div>
    <div class="panel-body">
        <div class="form-group">
            {!! Form::label('tipo','Tipo Expediente') !!}
            {!! Form::select('tipo_exp', $tipos ,'SAC',['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('num_exp','Numero Expediente') !!}
            <input class="form-control" id="num_exp" name="num_exp" type="text">
        </div>
    </div>
</div>