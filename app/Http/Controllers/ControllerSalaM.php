<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sala;

class ControllerSalaM extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sala = Sala::all();
        return view('TelaGerenciarSalaMinistra', compact('sala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sala = Sala::all();
        return view('TelaCadastroSalaMinistra', compact('sala'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    Public function store(Request $request)
    {
        $sala = new Sala();
        $sala->nome = $request->input('nomeSala');
        $sala->departamento_id = $request->input('nomeId');
        $sala->save();
        return redirect()->route('salaM.index');
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
    public function edit(Sala $sala)
    {
        return view('TelaEditarSalaMinistra', compact('sala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sala $sala)
    {
        $sala->nome = $request->input('nomeSala');
        $sala->departamento_id = $request->input('nomeId');
        $sala->save();
        return redirect()->route('salaM.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sala $sala)
    {
        $sala->delete();
        return redirect()->route('salaM.index');
    }
}
