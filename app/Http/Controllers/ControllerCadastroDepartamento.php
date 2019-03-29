<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCadastroDepartamento extends Controller
{
    Public function Departamento(){
        return view('TelaCadastroDepartamento');
    }
}
