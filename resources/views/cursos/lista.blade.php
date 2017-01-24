@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cursos
                        <a class="pull-right" href="{{ url('admin/registrar-curso') }}">Registrar Curso</a>
                    </div>

                    <div class="panel-body">

                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                        <table class="table">
                            <th>Nome</th>
                            <th>Ações</th>
                            <tbody>
                            @foreach($cursos as $curso)
                                <tr>
                                    <td>{{ $curso->nome }}</td>
                                    <td>
                                        <a href="/admin/cursos/{{ $curso->id }}/editar" class="btn btn-default btn-sm">Editar</a>
                                        {!! Form::open(['method' => 'DELETE', 'url' => 'admin/cursos/'.$curso->id, 'style' => 'display: inline;']) !!}
                                        <button type="submit" class="btn btn-default btn-sm">Excluir</button>
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
