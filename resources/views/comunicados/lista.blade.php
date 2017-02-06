@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mensagens
                        <a class="pull-right" href="{{ url('admin/registrar-mensagem') }}">Registrar Mensagem</a>
                    </div>

                    <div class="panel-body">

                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                        <table class="table">
                            <th class="table-title">Curso</th>
                            <th class="table-title">Assunto</th>
                            <th class="table-title">Ações</th>
                            <tbody>
                            @foreach($mensagens as $mensagem)
                                <tr>
                                    <td>{{ $mensagem->curso_id }}</td>
                                    <td>{{ $curso->assunto }}</td>
                                    <td>
                                        <a href="/admin/mensagens/{{ $mensagem->id }}/editar" class="btn btn-edit btn-sm">Editar</a>
                                        {!! Form::open(['method' => 'DELETE', 'url' => 'admin/mensagens/'.$curso->id, 'style' => 'display: inline;']) !!}
                                        <button type="submit" class="btn btn-delete btn-sm">Excluir</button>
                                        {!! Form::close() !!}
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
