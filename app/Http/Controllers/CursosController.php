<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoRequest;
use App\Curso;
use Illuminate\Support\Facades\Redirect;

class CursosController extends Controller {

    public function index() {

        $cursos = Curso::all();

        return view('cursos.lista', ['cursos'=> $cursos]);

    }

    public function registrar() {

        return view('cursos.registrar');
    }

    public function salvar(CursoRequest $request) {

        $curso = new Curso();
        $curso = $curso->create($request->all());

        \Session::flash('mensagem_sucesso','Curso cadastrado com sucesso!');
        return Redirect::to('/cursos');
    }

    public function editar($id){

        $curso = Curso::findOrFail($id);

        return view('cursos.registrar', ['curso' => $curso]);
    }

    public function atualizar($id, CursoRequest $request){

        $curso = Curso::findOrFail($id);

        $curso->update($request->all());


        \Session::flash('mensagem_sucesso','Curso atualizado com sucesso!');

        return Redirect::to('cursos/'.$curso->id.'/editar');

    }

    public function deletar($id){

        $curso = Aluno::findOrFail($id);

        $curso->delete();

        \Session::flash('mensagem_sucesso','Curso deletado com sucesso!');

        return Redirect::to('cursos');
    }
}
