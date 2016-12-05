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
                    <div class="panel-heading">Informe abaixo as informações da empresa
                        <a class="pull-right" href="{{ url('/empresas') }}">Voltar à Lista</a>
                    </div>

                    <div class="panel-body">

                        @if(Request::is('*/editar'))
                            {!! Form::model($empresa, ['method' => 'PATCH','url' => 'empresas/'.$empresa->id]) !!}
                        @else
                            {!!  Form::open(['url' => '/salvar-empresa']) !!}
                        @endif


                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                            {!! Form::label('tipo_empresa', 'Tipo da Empresa:') !!}
                            {!! Form::select('tipo_empresa', array('Unidade Concendente', 'Agente de Integração')) !!}

                            {!! Form::label('razao_social', 'Razão Social') !!}
                            {!! Form::input('text', 'razao_social', null, ['class' => 'form-control', 'autofocus'])  !!}

                            {!! Form::label('nome_fantasia', 'Nome Fantasia') !!}
                            {!! Form::input('text', 'nome_fantasia', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('ramo', 'Ramo da Atividade:') !!}
                            {!! Form::select('ramo', array('Comércio', 'Indústria', 'Serviços', 'ONG', 'Setor Público')) !!}

                        <!-- ------ INÍCIO DO ENDEREÇO ------ -->

                            {!! Form::label('ender_lograd', 'Logradouro') !!}
                            {!! Form::input('text', 'ender_lograd', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('ender_num', 'Número') !!}
                            {!! Form::input('text', 'ender_num', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('ender_bairro', 'Bairro') !!}
                            {!! Form::input('text', 'ender_bairro', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('ender_compl', 'Complemento') !!}
                            {!! Form::input('text', 'ender_compl', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('ender_estado', 'Estado') !!}
                            {!! Form::input('text', 'ender_estado', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('ender_cidade', 'Cidade') !!}
                            {!! Form::input('text', 'ender_cidade', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('ender_cep', 'CEP') !!}
                            {!! Form::input('text', 'ender_cep', null, ['class' => 'form-control'])  !!}

                        <!-- ------ FIM DO ENDEREÇO ------ -->

                            {!! Form::label('telefone01', 'Telefone 1') !!}
                            {!! Form::input('text', 'telefone01', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('telefone02', 'Telefone 2') !!}
                            {!! Form::input('number', 'telefone02', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('email', 'Email') !!}
                            {!! Form::input('text', 'email', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('site', 'Site') !!}
                            {!! Form::input('text', 'site', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('tipo_identificacao', 'Tipo de Identificação') !!}
                            {!! Form::input('text', 'tipo_identificacao', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('num_identificacao', 'Número da Identificação') !!}
                            {!! Form::input('text', 'num_identificacao', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('inscr_estadual', 'Inscrição Estadual/Municipal') !!}
                            {!! Form::input('text', 'inscr_estadual', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('qntdd_estagiarios', 'Quantidade de Estagiários') !!}
                            {!! Form::input('text', 'qntdd_estagiarios', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('qntdd_colab', 'Quantidade de Colaboradores') !!}
                            {!! Form::input('text', 'qntdd_colab', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('qntdd_colab_terc', 'Quantidade de Colaboradores Tercerizados') !!}
                            {!! Form::input('text', 'qntdd_colab_terc', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('seguradora', 'Seguradora') !!}
                            {!! Form::input('text', 'seguradora', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('num_apolice', 'Número da Apólice') !!}
                            {!! Form::input('text', 'num_apolice', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('conveniada', 'Empresa Conveniada') !!}
                            {!! Form::checkbox('text', 'conveniada', true, false, ['class' => 'form-control'])  !!}

                            {!! Form::label('cadastro_entregue', 'Cadastro Entregue?') !!}
                            {!! Form::checkbox('text', 'cadastro_entregue', true, false, ['class' => 'form-control'])  !!}

                            {!! Form::label('logomarca', 'Logomarca') !!}
                            {!! Form::input('text', 'logomarca', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('termo_qntdd_meses', 'Quantidade de meses do termo?') !!}
                            {!! Form::input('text', 'termo_qntdd_meses', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('termo_data', 'Data do termo?') !!}
                            {!! Form::input('text', 'termo_data', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('repres_nome', 'Nome do Representante Legal') !!}
                            {!! Form::input('text', 'repres_nome', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('repres_cargo', 'Cargo do Representante Legal') !!}
                            {!! Form::input('text', 'repres_cargo', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('responsavel_rh_nome', 'Nome do Responsável do RH') !!}
                            {!! Form::input('text', 'responsavel_rh_nome', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('responsavel_rh_email', 'Email do Responsável do RH') !!}
                            {!! Form::input('text', 'responsavel_rh_email', null, ['class' => 'form-control'])  !!}

                            {!! Form::label('responsavel_rh_tel', 'Telefone do Responsável do RH') !!}
                            {!! Form::input('number', 'responsavel_rh_tel', null, ['class' => 'form-control'])  !!}

                        <!-- ------ BOTÃO ------ -->

                            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection