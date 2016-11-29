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

                            {!! Form::label('aluno_id', 'Aluno') !!}
                            {!! Form::select('aluno_id', $alunos, $estagio->aluno_id) !!}

                            {!! Form::label('empresa_id', 'Empresa') !!}
                            {!! Form::select('empresa_id', $empresas, $estagio->empresa_id) !!}

                            {!! Form::label('bolsa_auxilio', 'Bolsa Auxílio') !!}
                            {!! Form::input('number', 'bolsa_auxilio', null, ['class' => 'form-control', 'autofocus', ]) !!}

                            {!! Form::label('auxil_transp_freq', 'Frequência do Auxílio Transporte') !!}
                            {!! Form::input('text', 'auxil_transp_freq', null, ['class' => 'form-control', '', 'placeholder' => 'Frequência do Auxílio Transporte'])  !!}

                            {!! Form::label('auxil_transp_valor', 'Valor do Auxílio Transporte') !!}
                            {!! Form::input('number', 'bolsa_auxilio', null, ['class' => 'form-control', 'autofocus', ]) !!}

                            {!! Form::label('auxil_alim_freq', 'Frequência do Auxílio Alimentação') !!}
                            {!! Form::input('text', 'auxil_alim_freq', null, ['class' => 'form-control', '', 'placeholder' => 'Frequência do Auxílio Alimentação'])  !!}

                            {!! Form::label('auxil_alim_valor', 'Valor do Auxílio Alimentação') !!}
                            {!! Form::input('number', 'bolsa_auxilio', null, ['class' => 'form-control', 'autofocus', ]) !!}

                            {!! Form::label('data_inicio', 'Data Início') !!}
                            {!! Form::text('data_inicio', '', array('class' => 'datepicker')) !!}

                            {!! Form::label('data_termino', 'Data Término') !!}
                            {!! Form::text('data_termino', '', array('class' => 'datepicker')) !!}

                            {!! Form::label('resicao', 'Resição') !!}
                            {!! Form::checkbox('resicao', true, false, ['class' => 'form-control', '' ] ) !!}

                            {!! Form::label('estagio_fechado', 'Estágio Fechado') !!}
                            {!! Form::checkbox('estagio_fechado', true, false, ['class' => 'form-control', '' ] ) !!}

                            {!! Form::label('termo_entregue', 'Termo Entregue') !!}
                            {!! Form::checkbox('termo_entregue', true, false, ['class' => 'form-control', '' ] ) !!}

                            {!! Form::submit('Salvar', ['class' => 'btn btn-primary pull-right']) !!}

                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection