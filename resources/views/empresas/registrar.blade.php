@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Informe abaixo as informações da empresa
                        <a class="pull-right" href="{{ url('/empresas') }}">Voltar à Lista</a>
                    </div>

                    <div class="panel-body">

                        @if(Request::is('*/editar'))
                            {!! Form::model($empresa, ['method' => 'PATCH','url' => 'empresas/'.$empresa->id]) !!}
                        @else
                            {!!  Form::open(['url' => '/salvar-empresa']) !!}
                        @endif


                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                        {!! Form::label('razao_social', 'Razão Social') !!}
                        {!! Form::input('text', 'razao_social', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Razão Social'])  !!}

                        {!! Form::label('nome_fantasia', 'Nome Fantasia') !!}
                        {!! Form::input('text', 'nome_fantasia', null, ['class' => 'form-control', '', 'placeholder' => 'Nome Fantasia'])  !!}

                        {!! Form::label('email', 'Email') !!}
                        {!! Form::input('text', 'email', null, ['class' => 'form-control', '', 'placeholder' => 'Email'])  !!}

                        {!! Form::label('site', 'Site') !!}
                        {!! Form::input('text', 'site', null, ['class' => 'form-control', '', 'placeholder' => 'Site'])  !!}

                        {!! Form::label('cnpj', 'Cnpj') !!}
                        {!! Form::input('text', 'cnpj', null, ['class' => 'form-control', '', 'placeholder' => 'CNPJ'])  !!}

                        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection