@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Vagas
                        @if (Auth::getDefaultDriver() == 'authaluno')
                        @elseif (Auth::getDefaultDriver() == 'empresa')
                            <a class="pull-right" href="{{ url('empresa/registrar-vaga') }}">Registrar Vaga</a>

                        @else
                            <a class="pull-right" href="{{ url('admin/registrar-vaga') }}">Registrar Vaga</a>
                        @endif
                    </div>

                    <div class="panel-body">

                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                        @endif

                        <table class="table">
                            <th class="table-title">Tipo de Estagio</th>
                            <th class="table-title">Titulo</th>
                            <th class="table-title">Cargo</th>
                            @if (Auth::getDefaultDriver() != 'aluno')
                            <th class="table-title">Ações</th>
                            @endif
                            <tbody>
                            @foreach($vagas as $vaga)
                                <tr>
                                    <td>{{ $vaga->tipo_estagio }}</td>
                                    <td>{{ $vaga->titulo }}</td>
                                    <td>{{ $vaga->cargo }}</td>
                                    @if (Auth::getDefaultDriver() != 'aluno')
                                    <td>
                                        @if (Auth::getDefaultDriver() == 'admin')
                                          <a href="/admin/vagas/{{ $vaga->id }}/editar" class="btn btn-edit btn-sm">Editar</a>
                                          {!! Form::open(['method' => 'DELETE', 'url' => 'admin/vagas/'.$vaga->id, 'style' => 'display: inline;']) !!}
                                          <button type="submit" class="btn btn-delete btn-sm">Excluir</button>
                                          {!! Form::close() !!}
                                        @elseif (Auth::getDefaultDriver() == 'empresa')
                                          <a href="/empresa/vagas/{{ $vaga->id }}/editar" class="btn btn-edit btn-sm">Editar</a>
                                          {!! Form::open(['method' => 'DELETE', 'url' => 'empresa/vagas/'.$vaga->id, 'style' => 'display: inline;']) !!}
                                          <button type="submit" class="btn btn-delete btn-sm">Excluir</button>
                                          {!! Form::close() !!}
                                        @endif
                                    </td>
                                    @endif
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
