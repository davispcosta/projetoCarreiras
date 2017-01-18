<?php

namespace App\Http\Controllers\AlunoAuth;

use App\Aluno;
use App\Curso;
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
    protected $redirectTo = '/aluno/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('aluno.guest');
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
            'nome' => 'required|max:255',
            'email' => 'required|email|max:255|unique:alunos',
            'password' => 'required|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Aluno
     */
    protected function create(array $data)
    {
        return Aluno::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'endereco' => $data['endereco'],
            'password' => bcrypt($data['password']),
            'telefone' => $data['telefone'],
            'cpf' => $data['cpf'],
            'identidade' => $data['identidade'],
            'semestre' => $data['semestre'],
            'matricula' => $data['matricula'],

        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $aluno = new Aluno();
        $cursos = Curso::pluck('nome', 'id')->all();
        return view('aluno.auth.register', compact('aluno', 'cursos'));
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('aluno');
    }
}
