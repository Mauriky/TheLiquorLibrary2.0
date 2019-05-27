<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cliente = Cliente::all();
        $cliente = Cliente::paginate(5);
        return view('clientes.clienteIndex', compact('cliente'));
    }

    public function __construct(){
        $this->middleware('auth');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('clientes.clienteForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'rfc' => 'required|min:12|max:13',
            'direccion' => 'required|max:50',
            'email' => 'required|max:50',
        ]);

        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->rfc = $request->rfc;
        $cliente->direccion = $request->direccion;
        $cliente->email = $request->email;
     
        $cliente->save();
        
        return  redirect()->route('clientes.index')
        ->with([
            'alerta' => 'Cliente Agregado',
            'alert-class' => 'alert-success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.clienteShow', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */

    public function edit(Cliente $cliente)
    {
        return view('clientes.clienteForm', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->rfc = $request->rfc;
        $cliente->direccion = $request->direccion;
        $cliente->email = $request->email;
     
        $cliente->save();

        return redirect()->route('clientes.index')->with([
            'alerta'=>'Elemento Actualizado',
            'alert-class'=>'alert-success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with([
            'alerta' => 'Elemento Eliminado',
            'alert-class' => 'alert-success'
        ]);
    }
}
