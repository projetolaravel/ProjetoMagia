<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coordenador', 'ControllerCoordenador@Coordenador');
Route::get('/login-coordenador', 'ControllerLoginCoordenador@LogCoordenador');
Route::get('/home', 'ControllerHome@Home');
Route::get('/login-ministra', 'ControllerLoginMinistra@LogMinistra');
Route::get('/ministra', 'ControllerMinistra@Ministra');

Route::resource('funcionariosM', 'ControllerGerenciarFuncionariosM');
Route::resource('coordenadores', 'ControllerGerenciarCoordenador');
Route::resource('salaM', 'ControllerSalaM');
Route::resource('departamento', 'ControllerDepartamento');
Route::resource('funcionariosC', 'ControllerGerenciarFuncionariosC');
Route::resource('salaC', 'ControllerSalaC');

