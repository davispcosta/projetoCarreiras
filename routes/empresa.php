<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('empresa')->user();

    //dd($users);

    return view('empresa.home');
})->name('home');


Route::get('/vagas', 'VagasController@index')->name('vagas');
    Route::get('/registrar-vaga', 'VagasController@registrar');

    Route::post('/salvar-vaga', 'VagasController@salvar');
    Route::patch('/vagas/{vaga}', 'VagasController@atualizar');
    Route::delete('/vagas/{vaga}', 'VagasController@deletar');

    Route::get('/vagas/{vaga}/editar', 'VagasController@editar');

