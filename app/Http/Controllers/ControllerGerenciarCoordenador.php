<?php

namespace App\Http\Controllers;

use App\Coordenador;
use Illuminate\Http\Request;

class ControllerGerenciarCoordenador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coordenadores = Coordenador::all();
        return view('TelaGerenciarCoordenador', compact('coordenadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coordenadores = Coordenador::all();
        return view('TelaCadastroCoordenador', compact('coordenadores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $coordenadores = new Coordenador();
        $coordenadores->id_depart = $request->input("id_depart");
        $coordenadores->nome = $request->input("nomeCoordenador");
        $coordenadores->sexo = $request->input('nomeSexo');
        $coordenadores->endereco = $request->input('nomeEndereco');
        $coordenadores->rub = $request->input('nomeRub');
        $coordenadores->nick = $request->input('nomeNick');
        $coordenadores->senha = $request->input('nomeSenha');
        $path = $request->file("nomeFoto")->store('images', 'public');
        $coordenadores->foto = $path;
        $coordenadores->save();
        return redirect()->route('coordenadores.index');
        
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
    public function edit(Coordenador $coordenadores)
    {
        return view('TelaEditarCoordenador', compact('coordenadores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coordenador $coordenadores)
    {
        $coordenadores->id_depart = $request->input("id_depart");
        $coordenadores->nome = $request->input("nomeCoordenador");
        $coordenadores->sexo = $request->input('nomeSexo');
        $coordenadores->endereco = $request->input('nomeEndereco');
        $coordenadores->rub = $request->input('nomeRub');
        $coordenadores->nick = $request->input('nomeNick');
        $coordenadores->senha = $request->input('nomeSenha');
        $path = $request->file("nomeFoto")->store('images', 'public');
        $coordenadores->foto = $path;
        $coordenadores->save();
        return redirect()->route('coordenadores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coordenador $coordenadores)
    {
        $coordenadores->delete();
        return redirect()->route('coordenadores.index');
    }
}
