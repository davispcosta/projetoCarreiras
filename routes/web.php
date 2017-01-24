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
