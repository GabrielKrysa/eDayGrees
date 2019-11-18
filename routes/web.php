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
Route::get('/relatorio', 'ReportController@index')->name('guest.report')->middleware('auth');
Route::get('/registrarcultivar', 'CultivarCadastradoController@index')->name('guest.registerCultivar')->middleware('auth');

Route::get('/dynamic_dependent', 'DynamicDependent@index');

Route::post('dynamic_dependent/fetch', 'DynamicDependent@fetch')->name('dynamicdependent.fetch');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/popular','CidadesSeederController@run');

Auth::routes();

