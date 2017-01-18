<?php

namespace App\Http\Controllers\EmpresaAuth;

use App\Empresa;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/empresa/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('empresa.guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'tipo_empresa' => 'required',
            'razao_social' => 'required|min:3',
            'nome_fantasia' => 'required|min:3',
            'ramo' => 'required',
            'ender_lograd' => 'required',
            'ender_num' => 'required',
            'ender_bairro' => 'required',
            'ender_estado' => 'required',
            'ender_cidade' => 'required',
            'ender_cep' => 'required',
            'telefone01' => 'required',
            'email' => 'required|email|max:255|unique:empresas',
            'password' => 'required|min:6|confirmed',
            'tipo_identificacao' => 'required',
            'num_identificacao' => 'required',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Empresa
     */
    protected function create(array $data)
    {
        return Empresa::create([
            'tipo_empresa' => $data['tipo_empresa'],
            'razao_social' => $data['razao_social'],
            'nome_fantasia' => $data['nome_fantasia'],
            'ramo' => $data['ramo'],
            'ender_lograd' => $data['ender_lograd'],
            'ender_num' => $data['ender_num'],
            'ender_bairro' => $data['ender_bairro'],
            'ender_compl' => $data['ender_compl'],
            'ender_estado' => $data['ender_estado'],
            'ender_cidade' => $data['ender_cidade'],
            'ender_cep' => $data['ender_cep'],
            'telefone01' => $data['telefone01'],
            'telefone02' => $data['telefone02'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'site' => $data['site'],
            'tipo_identificacao' => $data['tipo_identificacao'],
            'num_identificacao' => $data['num_identificacao'],
            'inscr_estadual' => $data['inscr_estadual'],
            'qntdd_estagiarios' => $data['qntdd_estagiarios'],
            'qntdd_colab' => $data['qntdd_colab'],
            'qntdd_colab_terc' => $data['qntdd_colab_terc'],
            'seguradora' => $data['seguradora'],
            'num_apolice' => $data['num_apolice'],
            'logomarca' => $data['logomarca'],
            'termo_qntdd_meses' => $data['termo_qntdd_meses'],
            'termo_data' => $data['termo_data'],
            'repres_nome' => $data['repres_nome'],
            'repres_cargo' => $data['repres_cargo'],
            'responsavel_rh_nome' => $data['responsavel_rh_nome'],
            'responsavel_rh_email' => $data['responsavel_rh_email'],
            'responsavel_rh_tel' => $data['responsavel_rh_tel'],
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('empresa.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('empresa');
    }
}
