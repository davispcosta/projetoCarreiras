<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('aluno')->user();

    //dd($users);

    return view('aluno.home');
})->name('home');

