@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Informe abaixo as informações do estagio
                        <a class="pull-right" href="{{ url('/estagios') }}">Voltar à Lista</a>
                    </div>

                    <div class="panel-body">

                        @if(Request::is('*/editar'))
                            {!! Form::model($estagio, ['method' => 'PATCH','url' => 'estagio/'.$estagio->id]) !!}
                        @else
                            {!!  Form::open(['url' => '/salvar-estagio']) !!}
                        @endif


                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                            <div class="form-group {{ $errors->has('aluno_id') ? 'has-error' :'' }}">
                                {!! Form::label('aluno_id', 'Aluno') !!}
                                {!! Form::select('aluno_id', $alunos, $estagio->aluno_id) !!}
                                {!! $errors->first('aluno_id','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('empresa_id') ? 'has-error' :'' }}">
                                {!! Form::label('empresa_id', 'Empresa') !!}
                                {!! Form::select('empresa_id', $empresas, $estagio->empresa_id) !!}
                                {!! $errors->first('empresa_id','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('bolsa_auxilio') ? 'has-error' :'' }}">
                                {!! Form::label('bolsa_auxilio', 'Bolsa Auxílio') !!}
                                {!! Form::input('number', 'bolsa_auxilio', null, ['class' => 'form-control', 'autofocus', ]) !!}
                                {!! $errors->first('bolsa_auxilio','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('auxil_transp_freq') ? 'has-error' :'' }}">
                                {!! Form::label('auxil_transp_freq', 'Frequência do Auxílio Transporte') !!}
                                {!! Form::input('text', 'auxil_transp_freq', null, ['class' => 'form-control', '', 'placeholder' => 'Frequência do Auxílio Transporte'])  !!}
                                {!! $errors->first('auxil_transp_freq','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('auxil_transp_valor') ? 'has-error' :'' }}">
                                {!! Form::label('auxil_transp_valor', 'Valor do Auxílio Transporte') !!}
                                {!! Form::input('number', 'auxil_transp_valor', null, ['class' => 'form-control', 'autofocus', ]) !!}
                                {!! $errors->first('auxil_transp_valor','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('auxil_alim_freq') ? 'has-error' :'' }}">
                                {!! Form::label('auxil_alim_freq', 'Frequência do Auxílio Alimentação') !!}
                                {!! Form::input('text', 'auxil_alim_freq', null, ['class' => 'form-control', '', 'placeholder' => 'Frequência do Auxílio Alimentação'])  !!}
                                {!! $errors->first('auxil_alim_freq','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('auxil_alim_valor') ? 'has-error' :'' }}">
                                {!! Form::label('auxil_alim_valor', 'Valor do Auxílio Alimentação') !!}
                                {!! Form::input('number', 'auxil_alim_valor', null, ['class' => 'form-control', 'autofocus', ]) !!}
                                {!! $errors->first('auxil_alim_valor','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('data_inicio') ? 'has-error' :'' }}">
                                {!! Form::label('data_inicio', 'Data Início') !!}
                                {!! Form::text('data_inicio', '', array('class' => 'datepicker')) !!}
                                {!! $errors->first('data_inicio','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('data_termino') ? 'has-error' :'' }}">
                                {!! Form::label('data_termino', 'Data Término') !!}
                                {!! Form::text('data_termino', '', array('class' => 'datepicker')) !!}
                                {!! $errors->first('data_termino','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('resicao') ? 'has-error' :'' }}">
                                {!! Form::label('resicao', 'Resição') !!}
                                {!! Form::checkbox('resicao', true, false, ['class' => 'form-control', '' ] ) !!}
                                {!! $errors->first('resicao','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('estagio_fechado') ? 'has-error' :'' }}">
                                {!! Form::label('estagio_fechado', 'Estágio Fechado') !!}
                                {!! Form::checkbox('estagio_fechado', true, false, ['class' => 'form-control', '' ] ) !!}
                                {!! $errors->first('estagio_fechado','<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('termo_entregue') ? 'has-error' :'' }}">
                                {!! Form::label('termo_entregue', 'Termo Entregue') !!}
                                {!! Form::checkbox('termo_entregue', true, false, ['class' => 'form-control', '' ] ) !!}
                                {!! $errors->first('termo_entregue','<span class="help-block">:message</span>') !!}
                            </div>

                            {!! Form::submit('Salvar', ['class' => 'btn btn-primary pull-right']) !!}

                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection