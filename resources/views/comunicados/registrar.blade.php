@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Informe abaixo as informações do curso
                        <a class="pull-right" href="{{ url('admin/comunicados') }}">Voltar à Lista</a>
                    </div>

                    <div class="panel-body">

                        @if(Request::is('*/editar'))
                            {!! Form::model($comunicado, ['method' => 'PATCH','url' => 'admin'.$comunicado->id]) !!}
                        @else
                            {!!  Form::open(['url' => 'admin/salvar-comunicado']) !!}
                        @endif


                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                            <div class="form-group {{ $errors->has('curso_id') ? 'has-error' :'' }}">
                                {!! Form::label('curso_id', 'Curso') !!} <br>
                                {!! Form::select('curso_id', [null=>'Selecione o curso'] + $cursos, $comunicado->empresa_id) !!}
                                {!! $errors->first('curso_id','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('assunto') ? 'has-error' :'' }}">
                                {!! Form::label('assunto', 'Assunto') !!}
                                {!! Form::text('assunto',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('assunto','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('texto') ? 'has-error' :'' }}">
                                {!! Form::label('texto', 'Texto') !!}
                                {!! Form::textarea('texto',null,['class'=>'form-control','placeholder'=>'']) !!}
                                {!! $errors->first('texto','<span class="help-block">:message</span>') !!}
                            </div>

                        {!! Form::submit('Salvar', ['class' => 'btn btn-save btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection