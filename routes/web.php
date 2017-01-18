<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/empresas', 'EmpresasController@index');

    Route::get('/registrar-empresa', 'EmpresasController@registrar');

    Route::post('/salvar-empresa', 'EmpresasController@salvar');
    Route::patch('/empresas/{empresa}', 'EmpresasController@atualizar');
    Route::delete('/empresas/{empresa}', 'EmpresasController@deletar');

    Route::get('/empresas/{empresa}/editar', 'EmpresasController@editar');


Route::get('/vagas', 'VagasController@index');

    Route::get('/registrar-vaga', 'VagasController@registrar');

    Route::post('/salvar-vaga', 'VagasController@salvar');
    Route::patch('/vagas/{vaga}', 'VagasController@atualizar');
    Route::delete('/vagas/{vaga}', 'VagasController@deletar');

    Route::get('/vagas/{vaga}/editar', 'VagasController@editar');

Route::get('/estagios', 'EstagiosController@index');

    Route::get('/registrar-estagio', 'EstagiosController@registrar');

    Route::post('/salvar-estagio', 'EstagiosController@salvar');
    Route::patch('/estagios/{estagio}', 'EstagiosController@atualizar');
    Route::delete('/estagios/{estagio}', 'EstagiosController@deletar');

    Route::get('/estagios/{estagio}/editar', 'EstagiosController@editar');

Route::get('/cursos', 'CursosController@index');

    Route::get('/registrar-curso', 'CursosController@registrar');

    Route::post('/salvar-curso', 'CursosController@salvar');
    Route::patch('/cursos/{curso}', 'CursosController@atualizar');
    Route::delete('/cursos/{curso}', 'CursosController@deletar');

    Route::get('/cursos/{curso}/editar', 'CursosController@editar');


Route::group(['prefix' => 'aluno'], function () {
  Route::get('/login', 'AlunoAuth\LoginController@showLoginForm');
  Route::post('/login', 'AlunoAuth\LoginController@login');
  Route::post('/logout', 'AlunoAuth\LoginController@logout');

  Route::get('/register', 'AlunoAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AlunoAuth\RegisterController@register');

  Route::post('/password/email', 'AlunoAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AlunoAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AlunoAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AlunoAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'empresa'], function () {
  Route::get('/login', 'EmpresaAuth\LoginController@showLoginForm');
  Route::post('/login', 'EmpresaAuth\LoginController@login');
  Route::post('/logout', 'EmpresaAuth\LoginController@logout');

  Route::get('/register', 'EmpresaAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'EmpresaAuth\RegisterController@register');

  Route::post('/password/email', 'EmpresaAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'EmpresaAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'EmpresaAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'EmpresaAuth\ResetPasswordController@showResetForm');
});
