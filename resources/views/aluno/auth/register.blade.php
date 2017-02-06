@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if (Auth::getDefaultDriver() == 'authaluno')
                            Cadastrar-se
                        @else
                            Informe abaixo as informações do aluno
                            <a class="pull-right" href="{{ url('admin/alunos') }}">Voltar à Lista</a>
                        @endif</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/aluno/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('nome') ? 'has-error' :'' }}">
                                <div class="col-md-12">
                                {!! Form::label('nome', 'Nome') !!}
                                {!! Form::text('nome',null,['class'=>'form-control form-input']) !!}
                                {!! $errors->first('nome','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('email') ? 'has-error' :'' }}">
                                <div class="col-md-12">
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::text('email',null,['class'=>'form-control form-input']) !!}
                                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('endereco') ? 'has-error' :'' }}">
                                <div class="col-md-12">
                                {!! Form::label('endereco', 'Endereco') !!}
                                {!! Form::text('endereco',null,['class'=>'form-control form-input']) !!}
                                {!! $errors->first('endereco','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('password') ? 'has-error' :'' }}">
                                <div class="col-md-12">
                                {!! Form::label('password', 'Senha') !!}
                                {!! Form::text('password',null,['class'=>'form-control form-input']) !!}
                                {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('telefone') ? 'has-error' :'' }}">
                                <div class="col-md-12">
                                {!! Form::label('telefone', 'Telefone') !!}
                                {!! Form::text('telefone',null,['class'=>'form-control form-input ']) !!}
                                {!! $errors->first('telefone','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('cpf') ? 'has-error' :'' }}">
                                <div class="col-md-12">
                                {!! Form::label('cpf', 'CPF') !!}
                                {!! Form::text('cpf',null,['class'=>'form-control form-input ']) !!}
                                {!! $errors->first('cpf','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('identidade') ? 'has-error' :'' }}">
                                <div class="col-md-12">
                                {!! Form::label('identidade', 'Identidade') !!}
                                {!! Form::text('identidade',null,['class'=>'form-control form-input']) !!}
                                {!! $errors->first('identidade','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('curso_id') ? 'has-error' :'' }}">
                                <div class="col-md-12">
                                {!! Form::label('curso_id', 'Curso') !!} <br>
                                {!! Form::select('curso_id', [null=>'Selecione um curso'] + $cursos, $aluno->curso_id) !!}
                                {!! $errors->first('curso_id','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('semestre') ? 'has-error' :'' }}">
                                <div class="col-md-12">
                                {!! Form::label('semestre', 'Semestre') !!}<br>
                                {!! Form::select('semestre', [null=>'Selecione um semestre'] + array('1' => '1º', '2' => '2º' , '3' =>'3º',
                                 '4' => '4º', '5' => '5º', '6' => '6º', '7' => '7º', '8' => '8º', '9' => '9º', '10' => '10º')) !!}
                                {!! $errors->first('semestre','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('matricula') ? 'has-error' :'' }}">
                                <div class="col-md-12">
                                {!! Form::label('matricula', 'Matricula') !!}
                                {!! Form::input('text','matricula',null,['class'=>'form-control form-input']) !!}
                                {!! $errors->first('matricula','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-save btn-primary">
                                        Salvar
                                    </button>
                                </div>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
