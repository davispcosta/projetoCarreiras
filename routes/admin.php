<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');


Route::get('/vagas', 'VagasController@index')->name('vagas');
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



Route::get('/empresas', 'EmpresasController@index');

    Route::get('/registrar-empresa', 'EmpresasController@registrar');

    Route::post('/salvar-empresa', 'EmpresasController@salvar');
    Route::patch('/empresas/{empresa}', 'EmpresasController@atualizar');
    Route::delete('/empresas/{empresa}', 'EmpresasController@deletar');

    Route::get('/empresas/{empresa}/editar', 'EmpresasController@editar');



Route::get('/cursos', 'CursosController@index');

    Route::get('/registrar-curso', 'CursosController@registrar');

    Route::post('/salvar-curso', 'CursosController@salvar');
    Route::patch('/cursos/{curso}', 'CursosController@atualizar');
    Route::delete('/cursos/{curso}', 'CursosController@deletar');

    Route::get('/cursos/{curso}/editar', 'CursosController@editar');




Route::get('/alunos', 'AlunosController@index');

    Route::get('/registrar-aluno', 'AlunosController@registrar');

    Route::post('/salvar-aluno', 'AlunosController@salvar');
    Route::patch('/alunos/{aluno}', 'AlunosController@atualizar');
    Route::delete('/alunos/{aluno}', 'AlunosController@deletar');

    Route::get('/alunos/{aluno}/editar', 'AlunosController@editar');

