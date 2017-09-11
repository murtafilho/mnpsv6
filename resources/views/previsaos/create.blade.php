@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Previsao
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'previsaos.store']) !!}

                        @include('previsaos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
