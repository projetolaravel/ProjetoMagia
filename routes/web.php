<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro-funcionario', 'ControllerCadastroFuncionario@CadFuncionario');

Route::get('/cadastro-coordenador', 'ControllerCadastroCoordenador@CadCoordenador');

Route::get('cadastro-departamento', 'ControllerCadastroDepartamento@Departamento');

Route::get('/cadastro-sala', 'ControllerCadastroSala@Sala');

Route::get('/coordenador', 'ControllerCoordenador@Coordenador');

Route::get('/login-coordenador', 'ControllerLoginCoordenador@LogCoordenador');

Route::get('/home', 'ControllerHome@Home');

Route::get('/login-ministra', 'ControllerLoginMinistra@LogMinistra');

Route::get('/ministra', 'ControllerMinistra@Ministra');

Route::get('/gerenciar-membros', 'ControllerMembros@Membros');

