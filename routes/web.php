<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro-funcionario', function(){
    return view('telaCadastroFuncionario');
});

Route::get('/cadastro-coordenador', function(){
    return view('telaCadastroCoordenador');
});

Route::get('cadastro-departamento', function(){
    return view('telaCadastroDepartamento');
});

Route::get('/cadastro-sala', function(){
    return view('telaCadastroSala');
});

Route::get('/coordenador', function(){
    return view('telaCoordenador');
});

Route::get('/login-coordenador', function(){
    return view('telaLoginCoordenador');
});

Route::get('/home', function(){
    return view('telaHome');
});

Route::get('/login-ministra', function(){
    return view('telaLoginMinistra');
});

Route::get('/ministra', function(){
    return view('telaMinistra');
});

Route::get('/gerenciar-membros', function(){
    return view('telaMembros');
});

