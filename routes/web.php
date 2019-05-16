<?php

Route::get('/', function () {
    return view('index');
})->name('principal.index');

Route::get('/cadastro', function(){
    return view('registro');
})->name('cadastro');

Route::get('/entrar', function() {
    return view('login');
})->name('login');

Route::get('/sobre', function(){
    return view('about');
})->name('sobre');

Route::get('/cadastrapropriedade', function(){
    return view('propriedade');
})->name('propriedade');

Route::get('/recuperarsenha', function(){
    return view('senha');
})->name('recuperaSenha');

Route::get('/relatorio', function(){
    return view('relatorio');
})->name('relatorio');

Route::get('/contato', function(){
    return view('mail');
})->name('contato');


Route::post('/cadastro','ControllerCadastroProprietario@cadastro');
