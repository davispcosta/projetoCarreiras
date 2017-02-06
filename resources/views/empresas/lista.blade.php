@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Empresas
                        @if (Auth::getDefaultDriver() == 'authaluno')
                        @elseif (Auth::getDefaultDriver() == 'empresa')
                            <a class="pull-right" href="{{ url('empresa/registrar-empresa') }}">Registrar Empresa</a>
                        @else
                            <a class="pull-right" href="{{ url('admin/registrar-empresa') }}">Registrar Empresa</a>
                        @endif
                    </div>

                    <div class="panel-body">

                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                        <table class="table">
                            <th class="table-title">Nome Fantasia</th>
                            <th class="table-title">Telefone</th>
                            <th class="table-title">Logradouro</th>
                            <th class="table-title">Ações</th>
                            <tbody>
                                @foreach($empresas as $empresa)
                                <tr>
                                    <td>{{ $empresa->nome_fantasia }}</td>
                                    <td>{{ $empresa->telefone01}}</td>
                                    <td>{{ $empresa->ender_lograd}}</td>
                                    <td>
                                       @if (Auth::getDefaultDriver() == 'admin')
                                            <a href="/admin/empresas/{{ $empresa->id }}/editar" class="btn btn-default btn-sm">Editar</a>
                                            {!! Form::open(['method' => 'DELETE', 'url' => 'admin/empresas/'.$empresa->id, 'style' => 'display: inline;']) !!}
                                            <button type="submit" class="btn btn-default btn-sm">Excluir</button>
                                            {!! Form::close() !!}
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
