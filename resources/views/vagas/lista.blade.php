@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Vagas
                        <a class="pull-right" href="{{ url('registrar-vaga') }}">Registrar Vaga</a>
                    </div>

                    <div class="panel-body">

                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                        <table class="table">
                            <th>Tipo de Estagio</th>
                            <th>Titulo</th>
                            <th>Cargo</th>
                            <th>Ações</th>
                            <tbody>
                            @foreach($vagas as $vaga)
                                <tr>
                                    <td>{{ $vaga->tipo_estagio }}</td>
                                    <td>{{ $vaga->titulo }}</td>
                                    <td>{{ $vaga->cargo }}</td>
                                    <td>
                                        <a href="/vagas/{{ $vaga->id }}/editar" class="btn btn-default btn-sm">Editar</a>
                                        {!! Form::open(['method' => 'DELETE', 'url' => '/vagas/'.$vaga->id, 'style' => 'display: inline;']) !!}
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
