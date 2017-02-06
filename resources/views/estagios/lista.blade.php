@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if (Auth::getDefaultDriver() == 'aluno')
                            Meus Estágios
                            <a class="pull-right" href="{{ url('aluno/registrar-estagio') }}">Registrar Estágio</a>
                        @else
                            Estágios
                            <a class="pull-right" href="{{ url('admin/registrar-estagio') }}">Registrar Estágio</a>
                        @endif

                    </div>

                    <div class="panel-body">

                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                        <table class="table">
                            <th class="table-title">Bolsa Auxilio</th>
                            <th class="table-title">Data Inicio</th>
                            <th class="table-title">Data Termino</th>
                            <th class="table-title">Ações</th>
                            <tbody>
                            @foreach($estagios as $estagio)
                                <tr>
                                    <td>{{ $estagio->bolsa_auxilio }}</td>
                                    <td>{{ $estagio->data_inicio }}</td>
                                    <td>{{ $estagio->data_termino }}</td>
                                    <td>
                                        @if (Auth::getDefaultDriver() == 'aluno')
                                            <a href="/aluno/estagios/{{ $estagio->id }}/editar" class="btn btn-edit btn-sm">Editar</a>
                                            {!! Form::open(['method' => 'DELETE', 'url' => 'authaluno'.$estagio->id, 'style' => 'display: inline;']) !!}
                                            <button type="submit" class="btn btn-delete btn-sm">Excluir</button>
                                            {!! Form::close() !!}
                                        @else
                                            <a href="/admin/estagios/{{ $estagio->id }}/editar" class="btn btn-edit btn-sm">Editar</a>
                                            {!! Form::open(['method' => 'DELETE', 'url' => 'admin'.$estagio->id, 'style' => 'display: inline;']) !!}
                                            <button type="submit" class="btn btn-delete btn-sm">Excluir</button>
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
