<?php

namespace App\Http\Controllers;


use App\Estagio;
use App\Empresa;
use App\Aluno;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\EstagioRequest;

class EstagiosController extends Controller
{
    public function index() {

        $estagios = Estagio::get();

        return view('estagios.lista', ['estagios'=> $estagios]);
    }

    public function registrar() {

        $estagio = new Estagio();
        $empresas = Empresa::pluck('nome_fantasia', 'id')->all();
        $alunos = Aluno::pluck('nome', 'id')->all();

        return view('estagios.registrar', compact('estagio', 'empresas', 'alunos'));
    }

    public function salvar(EstagioRequest $request) {

        $estagio = new Estagio();

        $estagio = $estagio->create($request->all());

        if (\Auth::guard('aluno')) {
            $url = 'aluno/estagios';
        }else{
            $url = 'admin/estagios';
        }

        \Session::flash('mensagem_sucesso','Estagio cadastrado com sucesso!');

        return Redirect::to($url);

    }

    public function editar($id){

        $estagio = Estagio::findOrFail($id);
        $empresas = Empresa::pluck('nome_fantasia', 'id')->all();
        $alunos = Aluno::pluck('nome', 'id')->all();

        return view('estagios.registrar', compact('estagio', 'empresas', 'alunos'));
    }

    public function atualizar($id, EstagioRequest $request){

        $estagio = Estagio::findOrFail($id);

        $estagio->update($request->all());

        if (\Auth::guard('aluno')) {
            $url = 'aluno/estagios';
        }else{
            $url = 'admin/estagios';
        }

        \Session::flash('mensagem_sucesso','Estágio atualizado com sucesso!');

        return Redirect::to($url);

    }

    public function deletar($id){

        $estagio = Estagio::findOrFail($id);

        $estagio->delete();

        if (\Auth::guard('aluno')) {
            $url = 'aluno/estagios';
        }else{
            $url = 'admin/estagios';
        }

        \Session::flash('mensagem_sucesso','Estágio deletado com sucesso!');

        return Redirect::to($url);
    }
}
