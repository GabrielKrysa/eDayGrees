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

Route::get('/', 'HomeController@index')->name('main.index');

Route::get('/home', 'HomeController@index')->name('main.index');

Route::get('/sobre', 'AboutController@index')->name('main.about');
Route::get('/contato', 'ContactController@index')->name('main.contact');
Route::get('/relatorio', 'ReportController@index')->name('guest.report')->middleware('report.acess');

Route::post('/contato/salvar', 'ContactController@save')->name('guest.saveContact');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/cultivar/cadastro', 'CultivarCadastradoController@index')->name('guest.registerCultivar')->middleware('auth')->middleware('cultivar.limit');
Route::post('/cultivar/salvar', 'CultivarCadastradoController@register')->name('cultivar.salvar')->middleware('auth');


Auth::routes();

