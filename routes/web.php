<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('principal.index');

Route::get('/cadastro', 'RegisterController@index')->name('cadastro');

Route::get('/entrar', function () {
    return view('login');
})->name('login');

Route::get('/sobre', function () {
    return view('about');
})->name('sobre');

Route::get('/relatorio', "RelatorioController@index")->name('relatorio')->middleware('auth');

Route::get('/contato', function () {
    return view('mail');
})->name('contato');


Route::get('/redefinirsenha', function () {
    return view('redefinirSenha');
})->name('redefinirsenha');

Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/registro', 'RegisterController@Register')->name('registro');
Route::post('/resetPassword', 'ResetPassword@redefinirSenha')->name('resetPassword');
Route::post('/salvarContato', 'ContatoController@salvarContato')->name('salvarContato');

Auth::routes();
Route::post('/login', 'Auth\LoginController@login')->name('login');
