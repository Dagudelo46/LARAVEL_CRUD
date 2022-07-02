<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\medicamento;


class medicamentoController extends Controller{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $medicamento = medicamento::all();
       return view('medicamento.index')->with('medicamento',$medicamento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicamento.registrar');
       
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicamento = new medicamento([
            'precio'=>$request->get('precio'),
            'nombre'=>$request->get('nombre'),
            
        ]);

        $medicamento->save();
        return redirect('/medicamento')->with('sucess','El medicamento ha sido registrado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicamento = medicamento::findOrFail($id); //Consultar por un id con eloquent
        return view('medicamento/editar', compact('medicamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medicamento = medicamento::findOrFail($id);
        $medicamento->precio = $request->precio;
        $medicamento->nombre = $request->nombre;

        $medicamento->update();

        return redirect('/medicamento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicamento $medicamento)
    {
        $medicamento->delete();
        return redirect('/medicamento');
    }
}

