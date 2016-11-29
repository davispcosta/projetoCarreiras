@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Informe abaixo as informações da vaga
                        <a class="pull-right" href="{{ url('/vagas') }}">Voltar à Lista</a>
                    </div>

                    <div class="panel-body">

                        @if(Request::is('*/editar'))
                            {!! Form::model($vaga, ['method' => 'PATCH','url' => 'vaga/'.$vaga->id]) !!}
                        @else
                            {!!  Form::open(['url' => '/salvar-vaga']) !!}
                        @endif


                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                            {!! Form::label('empresa_id', 'Empresa') !!}
                            {!! Form::select('empresa_id', $empresas, $vaga->empresa_id) !!}

                            {!! Form::label('tipo_estagio', 'Tipo de Estágio') !!}
                            {!! Form::input('text', 'tipo_estagio', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Tipo de Estágio'])  !!}

                            {!! Form::label('titulo', 'Título') !!}
                            {!! Form::input('text', 'titulo', null, ['class' => 'form-control', '', 'placeholder' => 'Título'])  !!}

                            {!! Form::label('cargo', 'Cargo') !!}
                            {!! Form::input('text', 'cargo', null, ['class' => 'form-control', '', 'placeholder' => 'Cargo'])  !!}

                            {!! Form::label('descricao', 'Descrição') !!}
                            {!! Form::input('text', 'descricao', null, ['class' => 'form-control', '', 'placeholder' => 'Descrição'])  !!}

                            {!! Form::label('data_publicacao', 'Data de Publicação') !!}
                            {!! Form::text('data_publicacao', '', array('class' => 'datepicker')) !!}

                            {!! Form::label('data_final', 'Data Final') !!}
                            {!! Form::text('data_final', '', array('class' => 'datepicker')) !!}


                            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection