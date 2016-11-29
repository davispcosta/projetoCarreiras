<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresaRequest;
use App\Empresa;
use Illuminate\Support\Facades\Redirect;


class EmpresasController extends Controller
{
    public function index() {

        $empresas = Empresa::all();

        return view('empresas.lista', ['empresas'=> $empresas]);

    }

    public function registrar() {

        return view('empresas.registrar');
    }

    public function salvar(EmpresaRequest $request) {

        $empresa = new Empresa();
        $empresa = $empresa->create($request->all());

            \Session::flash('mensagem_sucesso','Empresa cadastrada com sucesso!');
            return Redirect::to('/empresas');
    }

    public function editar($id){

        $empresa = Empresa::findOrFail($id);

        return view('empresas.registrar', ['empresa' => $empresa]);
    }

    public function atualizar($id, EmpresaRequest $request){

        $empresa = Empresa::findOrFail($id);

        $empresa->update($request->all());


            \Session::flash('mensagem_sucesso','Empresa atualizada com sucesso!');

            return Redirect::to('empresas/'.$empresa->id.'/editar');

    }

    public function deletar($id){

        $empresa = Empresa::findOrFail($id);

        $empresa->delete();

        \Session::flash('mensagem_sucesso','Empresa deletada com sucesso!');

        return Redirect::to('empresas'
        );
    }
}
