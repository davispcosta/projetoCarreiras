@extends('empresa.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/empresa/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('tipo_empresa') ? 'has-error' :'' }}">
                            {!! Form::label('tipo_empresa', '(obrig.) Tipo da Empresa:') !!}
                            {!! Form::select('tipo_empresa', array('Unidade Concendente', 'Agente de Integração')) !!}
                            {!! $errors->first('tipo_empresa','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('razao_social') ? 'has-error' :'' }}">
                            {!! Form::label('razao_social', '(obrig.) Razão Social') !!}
                            {!! Form::input('text', 'razao_social', null, ['class' => 'form-control', 'autofocus'])  !!}
                            {!! $errors->first('razao_social','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('nome_fantasia') ? 'has-error' :'' }}">
                            {!! Form::label('nome_fantasia', '(obrig.) Nome Fantasia') !!}
                            {!! Form::input('text', 'nome_fantasia', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('nome_fantasia','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('ramo') ? 'has-error' :'' }}">
                            {!! Form::label('ramo', '(obrig.) Ramo da Atividade:') !!}
                            {!! Form::select('ramo', array('Comércio', 'Indústria', 'Serviços', 'ONG', 'Setor Público')) !!}
                            {!! $errors->first('ramo','<span class="help-block">:message</span>') !!}
                        </div>


                        <!-- ------ INÍCIO DO ENDEREÇO ------ -->


                        <div class="form-group {{ $errors->has('ender_lograd') ? 'has-error' :'' }}">
                            {!! Form::label('ender_lograd', '(obrig.) Logradouro') !!}
                            {!! Form::input('text', 'ender_lograd', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('ender_lograd','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('ender_num') ? 'has-error' :'' }}">
                            {!! Form::label('ender_num', '(obrig.) Número') !!}
                            {!! Form::input('text', 'ender_num', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('ender_num','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('ender_bairro') ? 'has-error' :'' }}">
                            {!! Form::label('ender_bairro', '(obrig.) Bairro') !!}
                            {!! Form::input('text', 'ender_bairro', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('ender_bairro','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('ender_compl') ? 'has-error' :'' }}">
                            {!! Form::label('ender_compl', 'Complemento') !!}
                            {!! Form::input('text', 'ender_compl', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('ender_compl','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('ender_estado') ? 'has-error' :'' }}">
                            {!! Form::label('ender_estado', '(obrig.) Estado') !!}
                            {!! Form::input('text', 'ender_estado', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('ender_estado','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('ender_cidade') ? 'has-error' :'' }}">
                            {!! Form::label('ender_cidade', '(obrig.) Cidade') !!}
                            {!! Form::input('text', 'ender_cidade', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('ender_cidade','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('ender_cep') ? 'has-error' :'' }}">
                            {!! Form::label('ender_cep', '(obrig.) CEP') !!}
                            {!! Form::input('text', 'ender_cep', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('ender_cep','<span class="help-block">:message</span>') !!}
                        </div>

                        <!-- ------ FIM DO ENDEREÇO ------ -->

                        <div class="form-group {{ $errors->has('telefone01') ? 'has-error' :'' }}">
                            {!! Form::label('telefone01', '(obrig.) Telefone 1') !!}
                            {!! Form::input('text', 'telefone01', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('telefone01','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('telefone02') ? 'has-error' :'' }}">
                            {!! Form::label('telefone02', 'Telefone 2') !!}
                            {!! Form::input('number', 'telefone02', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('telefone02','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('email') ? 'has-error' :'' }}">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::input('text', 'email', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('password') ? 'has-error' :'' }}">
                            {!! Form::label('password', 'Senha') !!}
                            {!! Form::input('text', 'password', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' :'' }}">
                            {!! Form::label('password_confirmation', 'Confirmar Senha') !!}
                            {!! Form::input('text', 'password_confirmation', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('password_confirmation','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('site') ? 'has-error' :'' }}">
                            {!! Form::label('site', 'Site') !!}
                            {!! Form::input('text', 'site', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('site','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('tipo_identificacao') ? 'has-error' :'' }}">
                            {!! Form::label('tipo_identificacao', 'Tipo de Identificação') !!}
                            {!! Form::input('text', 'tipo_identificacao', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('tipo_identificacao','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('num_identificacao') ? 'has-error' :'' }}">
                            {!! Form::label('num_identificacao', 'Número da Identificação') !!}
                            {!! Form::input('text', 'num_identificacao', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('num_identificacao','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('inscr_estadual') ? 'has-error' :'' }}">
                            {!! Form::label('inscr_estadual', 'Inscrição Estadual/Municipal') !!}
                            {!! Form::input('text', 'inscr_estadual', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('inscr_estadual','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('qntdd_estagiarios') ? 'has-error' :'' }}">
                            {!! Form::label('qntdd_estagiarios', 'Quantidade de Estagiários') !!}
                            {!! Form::input('text', 'qntdd_estagiarios', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('qntdd_estagiarios','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('qntdd_colab') ? 'has-error' :'' }}">
                            {!! Form::label('qntdd_colab', 'Quantidade de Colaboradores') !!}
                            {!! Form::input('text', 'qntdd_colab', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('qntdd_colab','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('qntdd_colab_terc') ? 'has-error' :'' }}">
                            {!! Form::label('qntdd_colab_terc', 'Quantidade de Colaboradores Tercerizados') !!}
                            {!! Form::input('text', 'qntdd_colab_terc', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('qntdd_colab_terc','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('seguradora') ? 'has-error' :'' }}">
                            {!! Form::label('seguradora', 'Seguradora') !!}
                            {!! Form::input('text', 'seguradora', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('seguradora','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('num_apolice') ? 'has-error' :'' }}">
                            {!! Form::label('num_apolice', 'Número da Apólice') !!}
                            {!! Form::input('text', 'num_apolice', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('num_apolice','<span class="help-block">:message</span>') !!}
                        </div>


                        <div class="form-group {{ $errors->has('logomarca') ? 'has-error' :'' }}">
                            {!! Form::label('logomarca', 'Logomarca') !!}
                            {!! Form::input('text', 'logomarca', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('logomarca','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('termo_qntdd_meses') ? 'has-error' :'' }}">
                            {!! Form::label('termo_qntdd_meses', 'Quantidade de meses do termo?') !!}
                            {!! Form::input('text', 'termo_qntdd_meses', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('termo_qntdd_meses','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('termo_data') ? 'has-error' :'' }}">
                            {!! Form::label('termo_data', 'Data do termo?') !!}
                            {!! Form::input('text', 'termo_data', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('termo_data','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('repres_nome') ? 'has-error' :'' }}">
                            {!! Form::label('repres_nome', 'Nome do Representante Legal') !!}
                            {!! Form::input('text', 'repres_nome', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('repres_nome','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('repres_cargo') ? 'has-error' :'' }}">
                            {!! Form::label('repres_cargo', 'Cargo do Representante Legal') !!}
                            {!! Form::input('text', 'repres_cargo', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('repres_cargo','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('responsavel_rh_nome') ? 'has-error' :'' }}">
                            {!! Form::label('responsavel_rh_nome', 'Nome do Responsável do RH') !!}
                            {!! Form::input('text', 'responsavel_rh_nome', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('responsavel_rh_nome','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('responsavel_rh_email') ? 'has-error' :'' }}">
                            {!! Form::label('responsavel_rh_email', 'Email do Responsável do RH') !!}
                            {!! Form::input('text', 'responsavel_rh_email', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('responsavel_rh_email','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('responsavel_rh_tel') ? 'has-error' :'' }}">
                            {!! Form::label('responsavel_rh_tel', 'Telefone do Responsável do RH') !!}
                            {!! Form::input('number', 'responsavel_rh_tel', null, ['class' => 'form-control'])  !!}
                            {!! $errors->first('responsavel_rh_tel','<span class="help-block">:message</span>') !!}
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
