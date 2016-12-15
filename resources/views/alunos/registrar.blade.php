@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Informe abaixo as informações do aluno
                        <a class="pull-right" href="{{ url('/alunos') }}">Voltar à Lista</a>
                    </div>

                    <div class="panel-body">

                        @if(Request::is('*/editar'))
                            {!! Form::model($aluno, ['method' => 'PATCH','url' => 'alunos/'.$aluno->id]) !!}
                        @else
                            {!!  Form::open(['url' => '/salvar-aluno']) !!}
                        @endif


                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                            <div class="form-group {{ $errors->has('nome') ? 'has-error' :'' }}">
                                {!! Form::label('nome', 'Nome') !!}
                                {!! Form::text('nome',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('nome','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('email') ? 'has-error' :'' }}">
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('endereco') ? 'has-error' :'' }}">
                                {!! Form::label('endereco', 'Endereco') !!}
                                {!! Form::text('endereco',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('endereco','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('telefone') ? 'has-error' :'' }}">
                                {!! Form::label('telefone', 'Telefone') !!}
                                {!! Form::text('telefone',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('telefone','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('cpf') ? 'has-error' :'' }}">
                                {!! Form::label('cpf', 'CPF') !!}
                                {!! Form::text('cpf',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('cpf','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('identidade') ? 'has-error' :'' }}">
                                {!! Form::label('identidade', 'Identidade') !!}
                                {!! Form::text('identidade',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('identidade','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('curso') ? 'has-error' :'' }}">
                                {!! Form::label('curso', 'Curso') !!}
                                {!! Form::text('curso',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('curso','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('semestre') ? 'has-error' :'' }}">
                                {!! Form::label('semestre', 'Semestre') !!}
                                {!! Form::text('',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('semestre','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('matricula') ? 'has-error' :'' }}">
                                {!! Form::label('matricula', 'Matricula') !!}
                                {!! Form::input('number','matricula',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('matricula','<span class="help-block">:message</span>') !!}
                            </div>

                            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection