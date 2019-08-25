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

//---------------------------------------------------rotas padrão de usuario------------------------------------------------
Route::get('/', 'IndexController@index')
    ->name('main.index');

Route::get('/cadastro', 'RegisterController@index')
    ->name('main.register');

Route::get('/entrar', 'Auth\LoginController@index')
    ->name('main.login');

Route::get('/relatorio', 'DailyReportController@index')
    ->name('main.report')
    ->middleware('auth'); // autenticada

//---------------------------------------------------rotas alternativas de usuario------------------------------------------
Route::get('/sobre', 'AboutUsController@index')
    ->name('about');

Route::get('/contato', 'ContactUsController@index')
    ->name('contact');

Route::get('/resefinirsenha', 'ResetPasswordController@index')
    ->name('reset');

Route::get('/cadastropropriedade', 'PropertyRegisterController@index')
    ->name('propertyregister'); // autenticada

Route::get('/teste', 'GalleryController@index')
    ->name('teste');

//---------------------------------------------------rotas de ações---------------------------------------------------------
Route::get('/logout', 'Auth\LoginController@logout')
    ->name('logout');

Route::post('/logout', 'Auth\LoginController@logout')
    ->name('logout');

Route::get('/login', 'Auth\LoginController@login')
    ->name('login');

Route::post('/login', 'Auth\LoginController@login')
    ->name('login');

Route::post('/cadastro', 'RegisterController@registerUser')
    ->name('registerUser');


