<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCadastroFuncionario extends Controller
{
    Public function CadFuncionario(){
        return view('TelaCadastroFuncionario');
    }
}
