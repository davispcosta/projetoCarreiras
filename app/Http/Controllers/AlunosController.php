<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Aluno;
use Illuminate\Support\Facades\Redirect;


class AlunosController extends Controller
{
    public function index() {

        $alunos = Aluno::all();

        return view('alunos.lista', ['alunos'=> $alunos]);

    }

    public function registrar() {

        return view('alunos.registrar');
    }

    public function salvar(AlunoRequest $request) {

        $aluno = new Aluno();
        $aluno = $aluno->create($request->all());

        \Session::flash('mensagem_sucesso','Empresa cadastrada com sucesso!');
        return Redirect::to('/alunos');
    }

    public function editar($id){

        $aluno = Aluno::findOrFail($id);

        return view('alunos.registrar', ['aluno' => $aluno]);
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

        return Redirect::to('alunos'
        );
    }
}

