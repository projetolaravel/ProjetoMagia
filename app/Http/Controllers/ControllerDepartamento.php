<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class ControllerDepartamento extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depar = Departamento::all();
        return view('TelaGerenciarDepartamento', compact('depar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depar = Departamento::all();
        return view('TelaCadastroDepartamento', compact('depar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    Public function store(Request $request){
        $depar = new Departamento();
        $depar->nome = $request->input('nomeDepartamento');
        $depar->save();
        return redirect()->route('departamento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $depar)
    {
        return view('TelaEditarDepartamento', compact('depar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $depar) 
    {
        $depar->nome = $request->input('nomeDepartamento');
        $depar->save();
        return redirect()->route('departamento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $depar)
    {
        $depar->delete();
        return redirect()->route('departamento.index');
    }
}
