<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Http\Requests\VagaRequest;
use App\Vaga;
use Illuminate\Support\Facades\Redirect;


class VagasController extends Controller
{
    public function index() {

        $vagas = Vaga::all();

        return view('vagas.lista', ['vagas'=> $vagas]);
    }

    public function registrar() {

        $vaga = new Vaga();
        $empresas = Empresa::pluck('nome_fantasia', 'id')->all();

        return view('vagas.registrar', compact('vaga', 'empresas'));
    }

    public function salvar(VagaRequest $request) {

        $vaga = new Vaga();
        $vaga = $vaga->create($request->all());

        \Session::flash('mensagem_sucesso','Vaga cadastrada com sucesso!');
        return Redirect::to('/vagas');

    }

    public function editar($id){

        $vaga = Vaga::findOrFail($id);

        $empresas = Empresa::pluck('nome_fantasia', 'id')->all();

        return view('vagas.registrar', compact('vaga', 'empresas'));
    }

    public function atualizar($id, VagaRequest $request){

        $vaga = Vaga::findOrFail($id);

        $vaga->update($request->all());

        \Session::flash('mensagem_sucesso','Vaga atualizada com sucesso!');

        return Redirect::to('vagas/'.$vaga->id.'/editar');

    }

    public function deletar($id){

        $vaga = Vaga::findOrFail($id);

        $vaga->delete();

        \Session::flash('mensagem_sucesso','Vaga deletada com sucesso!');

        return Redirect::to('vagas'
        );
    }
}
