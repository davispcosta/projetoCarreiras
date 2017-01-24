<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Aluno;
use App\Curso;
use Illuminate\Support\Facades\Redirect;


class AlunosController extends Controller
{
    public function index() {

        $alunos = Aluno::all();

        return view('alunos.lista', ['alunos'=> $alunos]);

    }

    public function registrar() {

        $aluno = new Aluno();
        $cursos = Curso::pluck('nome', 'id')->all();

        return view('aluno.auth.register', compact('aluno', 'cursos'));
    }

    public function salvar(AlunoRequest $request) {

        $aluno = new Aluno();
        $aluno = $aluno->create($request->all());

        \Session::flash('mensagem_sucesso','Aluno cadastrado com sucesso!');
        return Redirect::to('/alunos');
    }

    public function editar($id){

        $aluno = Aluno::findOrFail($id);
        $cursos = Curso::pluck('nome', 'id')->all();
        return view('aluno.auth.register', compact('aluno', 'cursos'));
    }

    public function atualizar($id, AlunoRequest $request){

        $aluno = Aluno::findOrFail($id);

        $aluno->update($request->all());


        \Session::flash('mensagem_sucesso','Aluno atualizado com sucesso!');

        return Redirect::to('alunos/'.$aluno->id.'/editar');

    }

    public function deletar($id){

        $aluno = Aluno::findOrFail($id);

        $aluno->delete();

        \Session::flash('mensagem_sucesso','Aluno deletado com sucesso!');

        return Redirect::to('alunos');
    }
}

