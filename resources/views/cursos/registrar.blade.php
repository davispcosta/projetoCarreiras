@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Informe abaixo as informações do curso
                        <a class="pull-right" href="{{ url('/cursos') }}">Voltar à Lista</a>
                    </div>

                    <div class="panel-body">

                        @if(Request::is('*/editar'))
                            {!! Form::model($curso, ['method' => 'PATCH','url' => 'curso/'.$curso->id]) !!}
                        @else
                            {!!  Form::open(['url' => '/salvar-curso']) !!}
                        @endif


                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                            <div class="form-group {{ $errors->has('nome') ? 'has-error' :'' }}">
                                {!! Form::label('nome', 'Nome') !!}
                                {!! Form::text('nome',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('nome','<span class="help-block">:message</span>') !!}
                            </div>

                        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection