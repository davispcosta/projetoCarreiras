<?php

namespace App\Http\Controllers;

use App\Comunicado;
use App\Curso;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\ComunicadoRequest;

class ComunicadosController extends Controller
{
    public function index() {

        $comunicados = Comunicado::get();

        return view('comunicados.lista', ['comunicados'=> $comunicados]);
    }

    public function registrar() {

        $comunicado = new Comunicado();
        $cursos = Curso::pluck('nome', 'id')->all();

        return view('comunicados.registrar', compact('comunicado', 'cursos'));
    }

    public function salvar(ComunicadoRequest $request) {

        $comunicado = new Comunicado();

        $comunicado = $comunicado->create($request->all());

        \Session::flash('mensagem_sucesso','Comunicado registrado com sucesso!');

        return Redirect::to('admin/comunicados');

    }

    public function editar($id){

        $comunicado = Comunicado::findOrFail($id);
        $cursos = Curso::pluck('nome', 'id')->all();

        return view('comunicados.registrar', compact('comunicado', 'cursos'));
    }

    public function atualizar($id, ComunicadoRequest $request){

        $comunicado = Comunicado::findOrFail($id);

        $comunicado ->update($request->all());

        \Session::flash('mensagem_sucesso','Comunicado atualizado com sucesso!');

        return Redirect::to('admin/comunicados');

    }

    public function deletar($id){

        $comunicado = Comunicado::findOrFail($id);

        $comunicado->delete();

        \Session::flash('mensagem_sucesso','Comunicado deletado com sucesso!');

        return Redirect::to('admin/comunicados');
    }
}
