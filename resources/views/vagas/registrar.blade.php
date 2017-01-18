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

                            <div class="form-group {{ $errors->has('empresa_id') ? 'has-error' :'' }}">
                                {!! Form::label('empresa_id', 'Empresa') !!}
                                {!! Form::select('empresa_id', [null=>'Selecione uma empresa'] + $empresas, $vaga->empresa_id) !!}
                                {!! $errors->first('empresa_id','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('tipo_estagio') ? 'has-error' :'' }}">
                                {!! Form::label('tipo_estagio', 'Tipo de Estágio') !!}
                                {!! Form::select('tipo_estagio', array('Estágio', 'Emprego' ,'Trainee')) !!}
                                {!! $errors->first('tipo_estagio','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('titulo') ? 'has-error' :'' }}">
                                {!! Form::label('titulo', 'Título') !!}
                                {!! Form::input('text', 'titulo', null, ['class' => 'form-control', '', 'placeholder' => 'Título'])  !!}
                                {!! $errors->first('titulo','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('cargo') ? 'has-error' :'' }}">
                                {!! Form::label('cargo', 'Cargo') !!}
                                {!! Form::input('text', 'cargo', null, ['class' => 'form-control', '', 'placeholder' => 'Cargo'])  !!}
                                {!! $errors->first('cargo','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('descricao') ? 'has-error' :'' }}">
                                {!! Form::label('descricao', 'Descrição') !!}
                                {!! Form::input('text', 'descricao', null, ['class' => 'form-control', '', 'placeholder' => 'Descrição'])  !!}
                                {!! $errors->first('descricao','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('data_publicacao') ? 'has-error' :'' }}">
                                {!! Form::label('data_publicacao', 'Data de Publicação') !!}
                                {!! Form::text('data_publicacao', '', array('class' => 'datepicker')) !!}
                                {!! $errors->first('data_publicacao','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('data_final') ? 'has-error' :'' }}">
                                {!! Form::label('data_final', 'Data Final') !!}
                                {!! Form::text('data_final', '', array('id' => 'datepicker', 'class' => 'hasDatepicker')) !!}
                                {!! $errors->first('data_final','<span class="help-block">:message</span>') !!}
                            </div>


                            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection