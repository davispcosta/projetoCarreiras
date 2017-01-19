<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('aluno')->user();

    //dd($users);

    return view('aluno.home');
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

