<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;


class ClienteController extends Controller{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $clientes = Cliente::all();
       return view('cliente.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.registrar');
       
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente([
            'documento'=>$request->get('documento'),
            'tipoDocumento'=>$request->get('tipoDocumento'),
            'nombres' => $request->get('nombres'),
            'apellidos' => $request->get('apellidos'),
            'direccion' => $request->get('direccion'),
            'telefono' => $request->get('telefono'),
            'genero' => $request->get('genero'),
            'fechaNacimiento' => $request->get('fechaNacimiento'),
            'estadoCivil' => $request->get('estadoCivil')
        ]);

        $cliente->save();
        return redirect('/cliente')->with('sucess','El cliente ha sido registrado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id); //Consultar por un id con eloquent
        return view('cliente/editar', compact('cliente'));
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
        $cliente = Cliente::findOrFail($id);
        $cliente->documento = $request->documento;
        $cliente->tipoDocumento = $request->tipoDocumento;
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->genero = $request->genero;
        $cliente->fechaNacimiento = $request->fechaNacimiento;
        $cliente->estadoCivil = $request->estadoCivil;

        $cliente->update();

        return redirect('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect('/cliente');
    }
}

