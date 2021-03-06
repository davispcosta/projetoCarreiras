@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Informe abaixo as informações do estagio
                        @if (Auth::getDefaultDriver() == 'aluno')
                        <a class="pull-right" href="{{ url('authaluno') }}">Voltar à Lista</a>
                        @else
                        <a class="pull-right" href="{{ url('admin/estagios') }}">Voltar à Lista</a>
                        @endif
                    </div>

                    <div class="panel-body">

                        @if(Request::is('*/editar'))
                            @if (Auth::getDefaultDriver() == 'aluno')
                            {!! Form::model($estagio, ['method' => 'PATCH','url' => 'aluno/estagios/'.$estagio->id]) !!}
                            @else
                            {!! Form::model($estagio, ['method' => 'PATCH','url' => 'admin/estagios/'.$estagio->id]) !!}
                            @endif
                        @else
                            @if (Auth::getDefaultDriver() == 'aluno')
                            {!!  Form::open(['url' => 'aluno/salvar-estagio']) !!}
                            @else
                            {!!  Form::open(['url' => 'admin/salvar-estagio']) !!}
                            @endif
                        @endif


                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                            @if (Auth::getDefaultDriver() == 'aluno')
                                {{ $estagio->aluno_id = Auth::guard()->id() }}
                            @else
                                <div class="form-group {{ $errors->has('aluno_id') ? 'has-error' :'' }}">
                                    {!! Form::label('aluno_id', 'Aluno') !!} <br>
                                    {!! Form::select('aluno_id', $alunos, $estagio->aluno_id) !!}
                                    {!! $errors->first('aluno_id','<span class="help-block">:message</span>') !!}
                                </div>
                            @endif

                            <div class="form-group {{ $errors->has('empresa_id') ? 'has-error' :'' }}">
                                {!! Form::label('empresa_id', 'Empresa') !!} <br>
                                {!! Form::select('empresa_id', $empresas, $estagio->empresa_id) !!}
                                {!! $errors->first('empresa_id','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('bolsa_auxilio') ? 'has-error' :'' }}">
                                {!! Form::label('bolsa_auxilio', 'Bolsa Auxílio') !!}
                                {!! Form::input('number', 'bolsa_auxilio', null, ['class' => 'form-control form-input', 'autofocus', ]) !!}
                                {!! $errors->first('bolsa_auxilio','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('auxil_transp_freq') ? 'has-error' :'' }}">
                                {!! Form::label('auxil_transp_freq', 'Frequência do Auxílio Transporte') !!}
                                {!! Form::input('text', 'auxil_transp_freq', null, ['class' => 'form-control form-input'])  !!}
                                {!! $errors->first('auxil_transp_freq','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('auxil_transp_valor') ? 'has-error' :'' }}">
                                {!! Form::label('auxil_transp_valor', 'Valor do Auxílio Transporte') !!}
                                {!! Form::input('number', 'auxil_transp_valor', null, ['class' => 'form-control form-input', 'autofocus']) !!}
                                {!! $errors->first('auxil_transp_valor','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('auxil_alim_freq') ? 'has-error' :'' }}">
                                {!! Form::label('auxil_alim_freq', 'Frequência do Auxílio Alimentação') !!}
                                {!! Form::input('text', 'auxil_alim_freq', null, ['class' => 'form-control form-input'])  !!}
                                {!! $errors->first('auxil_alim_freq','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('auxil_alim_valor') ? 'has-error' :'' }}">
                                {!! Form::label('auxil_alim_valor', 'Valor do Auxílio Alimentação') !!}
                                {!! Form::input('number', 'auxil_alim_valor', null, ['class' => 'form-control form-input', 'autofocus' ]) !!}
                                {!! $errors->first('auxil_alim_valor','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('data_inicio') ? 'has-error' :'' }}">
                                {!! Form::label('data_inicio', 'Data Início') !!}
                                {!! Form::input('text','data_inicio', null, ['class' => 'form-control form-input dateinput', 'autofocus' ]) !!}
                                {!! $errors->first('data_inicio','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('data_termino') ? 'has-error' :'' }}">
                                {!! Form::label('data_termino', 'Data Término') !!}
                                {!! Form::input('text','data_termino', null, ['class' => 'form-control form-input dateinput', 'autofocus']) !!}
                                {!! $errors->first('data_termino','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('resicao') ? 'has-error' :'' }}">
                                <div class="col-md-4 checkbox-group">
                                {!! Form::label('resicao', 'Resição') !!}
                                {!! Form::checkbox('resicao', 1, false, ['class' => 'form-control form-input'] ) !!}
                                {!! $errors->first('resicao','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('estagio_fechado') ? 'has-error' :'' }}">
                                <div class="col-md-4 checkbox-group">
                                {!! Form::label('estagio_fechado', 'Estágio Fechado') !!}
                                {!! Form::checkbox('estagio_fechado', 1, false, ['class' => 'form-control form-input'] ) !!}
                                {!! $errors->first('estagio_fechado','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('termo_entregue') ? 'has-error' :'' }}">
                                <div class="col-md-4 checkbox-group">
                                {!! Form::label('termo_entregue', 'Termo Entregue') !!}
                                {!! Form::checkbox('termo_entregue', 1, false, ['class' => 'form-control form-input'] ) !!}
                                {!! $errors->first('termo_entregue','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            {!! Form::submit('Salvar', ['class' => 'btn btn-primary btn-save']) !!}

                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection