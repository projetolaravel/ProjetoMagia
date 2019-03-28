<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHome extends Controller
{
    Public function Home(){
        return view('TelaHome');
    }
}
