@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if (Auth::guard('aluno'))
                            Meus Estágios
                            <a class="pull-right" href="{{ url('aluno/registrar-estagio') }}">Registrar Estágio</a>
                        @else
                            Estágios
                        @endif

                    </div>

                    <div class="panel-body">

                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                        <table class="table">
                            <th>Bolsa Auxilio</th>
                            <th>Data Inicio</th>
                            <th>Data Termino</th>
                            <th>Ações</th>
                            <tbody>
                            @foreach($estagios as $estagio)
                                <tr>
                                    <td>{{ $estagio->bolsa_auxilio }}</td>
                                    <td>{{ $estagio->data_inicio }}</td>
                                    <td>{{ $estagio->data_termino }}</td>
                                    <td>
                                        <a href="/aluno/estagios/{{ $estagio->id }}/editar" class="btn btn-default btn-sm">Editar</a>
                                        {!! Form::open(['method' => 'DELETE', 'url' => 'aluno/estagios/'.$estagio->id, 'style' => 'display: inline;']) !!}
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
