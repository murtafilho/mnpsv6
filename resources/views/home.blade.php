@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dispositivo</div>

                    <div class="panel-body">

                        {{ session('status') }}


                            <a href="{{route('mnps')}}" class="btn btn-default btn-lg btn-block" role="button">VERSÃO
                                DESKTOP</a>
                            <a href="{{route('mobile')}}" class="btn btn-default btn-lg btn-block" role="button">VERSÃO
                                MOBILE</a>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
