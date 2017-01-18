@extends('admin.layout.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/aluno/register') }}">
                            {{ csrf_field() }}

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

                            <div class="form-group {{ $errors->has('password') ? 'has-error' :'' }}">
                                {!! Form::label('password', 'Senha') !!}
                                {!! Form::text('password',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('password','<span class="help-block">:message</span>') !!}
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

                            <div class="form-group {{ $errors->has('curso_id') ? 'has-error' :'' }}">
                                {!! Form::label('curso_id', 'Curso') !!}
                                {!! Form::select('curso_id', $cursos, $aluno->curso_id) !!}
                                {!! $errors->first('curso_id','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('semestre') ? 'has-error' :'' }}">
                                {!! Form::label('semestre', 'Semestre') !!}
                                {!! Form::text('semestre',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('semestre','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('matricula') ? 'has-error' :'' }}">
                                {!! Form::label('matricula', 'Matricula') !!}
                                {!! Form::input('text','matricula',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('matricula','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
