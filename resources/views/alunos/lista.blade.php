@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Alunos
                        @if (Auth::getDefaultDriver() == 'admin')
                            <a class="pull-right" href="{{ url('admin/registrar-aluno') }}">Registrar Aluno</a>
                        @endif
                    </div>

                    <div class="panel-body">

                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                        <table class="table">
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Matricula</th>
                            <th>Ações</th>
                            <tbody>
                            @foreach($alunos as $aluno)
                                <tr>
                                    <td>{{ $aluno->nome}}</td>
                                    <td>{{ $aluno->email}}</td>
                                    <td>{{ $aluno->matricula}}</td>
                                    <td>
                                        @if (Auth::getDefaultDriver() == 'admin')
                                            <a href="/admin/alunos/{{ $aluno->id }}/editar" class="btn btn-default btn-sm">Editar</a>
                                            {!! Form::open(['method' => 'DELETE', 'url' => 'admin/alunos/'.$aluno->id, 'style' => 'display: inline;']) !!}
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
