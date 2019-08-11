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

//rotas padrão de usuário
Route::get('/','IndexController@index')->name('main.index');
Route::get('/cadastro','RegisterController@index')->name('main.register');
Route::get('/entrar','Auth\LoginController@index')->name('main.login');
Route::get('/relatorio','DailyReport@index')->name('main.report')->middleware('auth');;

//rotas alternativas de usuario
Route::get('/sobre','AboutUsController@index')->name('about');
Route::get('/contato','ContactUsController@index')->name('contact');
Route::get('/resefinirsenha','ResetPasswordController@index')->name('reset');

//rotas de ações
Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/login', 'Auth\LoginController@login')->name('login');


