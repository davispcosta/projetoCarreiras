@extends('layouts.app')

@section('content')
    @if(count($errors) > 0)
        <div class="row">
            <div class="col-md-6">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
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

                            {!! Form::label('email', 'Email') !!}
                            {!! Form::input('text', 'email', null, ['class' => 'form-control', '', 'placeholder' => 'Email'])  !!}

                            {!! Form::label('endereco', 'Endereço') !!}
                            {!! Form::input('text', 'endereco', null, ['class' => 'form-control', '', 'placeholder' => 'Endereço'])  !!}

                            {!! Form::label('telefone', 'Telefone') !!}
                            {!! Form::input('text', 'telefone', null, ['class' => 'form-control', '', 'placeholder' => 'Telefone'])  !!}

                            {!! Form::label('cpf', 'CPF') !!}
                            {!! Form::input('text', 'cpf', null, ['class' => 'form-control', '', 'placeholder' => 'CPF'])  !!}

                            {!! Form::label('identidade', 'Identidade') !!}
                            {!! Form::input('text', 'identidade', null, ['class' => 'form-control', '', 'placeholder' => 'Identidade'])  !!}

                            {!! Form::label('curso', 'Curso') !!}
                            {!! Form::input('text', 'curso', null, ['class' => 'form-control', '', 'placeholder' => 'Curso'])  !!}

                            {!! Form::label('semestre', 'Semestre') !!}
                            {!! Form::input('text', 'semestre', null, ['class' => 'form-control', '', 'placeholder' => 'Semestre'])  !!}

                            {!! Form::label('matricula', 'Matrícula') !!}
                            {!! Form::input('text', 'matricula', null, ['class' => 'form-control', '', 'placeholder' => 'Matricula'])  !!}

                            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection