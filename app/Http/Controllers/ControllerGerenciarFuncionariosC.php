<?php

namespace App\Http\Controllers;

use App\Funcionario;
use Illuminate\Http\Request;

class ControllerGerenciarFuncionariosC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('TelaGerenciarFuncionariosC', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $funcionarios = Funcionario::all();
        return view('TelaCadastroFuncionarioCoor', compact('funcionarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $funcionarios = new Funcionario();
        $funcionarios->nome = $request->input("nomeFuncionario");
        $funcionarios->sexo = $request->input('nomeSexo');
        $funcionarios->endereco = $request->input('nomeEndereco');
        $funcionarios->rub = $request->input('nomeRub');
        $path = $request->file("nomeFoto")->store('images', 'public');
        $funcionarios->foto = $path;
        $funcionarios->save();
        return redirect()->route('funcionariosC.index');
        
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
    public function edit(Funcionario $funcionarios)
    {
        return view('TelaEditarFuncionarioCoor', compact('funcionarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario $funcionarios)
    {
        $funcionarios->nome = $request->input("nomeFuncionario");
        $funcionarios->sexo = $request->input('nomeSexo');
        $funcionarios->endereco = $request->input('nomeEndereco');
        $funcionarios->rub = $request->input('nomeRub');
        $path = $request->file("nomeFoto")->store('images', 'public');
        $funcionarios->foto = $path;
        $funcionarios->save();
        return redirect()->route('funcionariosC.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionario $funcionarios)
    {
        $funcionarios->delete();
        return redirect()->route('funcionariosC.index');
    }
}
