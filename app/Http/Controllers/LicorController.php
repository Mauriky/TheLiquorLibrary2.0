<?php

namespace App\Http\Controllers;

use App\Licor;
use Illuminate\Http\Request;

class LicorController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$licor = Licor::all();
        $licor = Licor::paginate(5);
        return view('licores.licorIndex',compact('licor'));
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
        return view('licores.licorForm');
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
            'sabor' => 'required|max:50',
            'color' => 'required|max:50',
            'porcentaje' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'pais' => 'required'
        ]);

        $licor = new Licor();
        $licor->nombre = $request->nombre;
        $licor->sabor = $request->sabor;
        $licor->color = $request->color;
        $licor->porcentaje_alcohol = $request->porcentaje;
        $licor->precio = $request->precio;
        $licor->stock = $request->stock;
        $licor->pais_origen = $request->pais;

        $licor->save();
       
        return redirect()->route('licores.index')
        ->with([
            'alerta'=>'Licor Agregado',
            'alert-class'=>'alert-success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Licor  $licor
     * @return \Illuminate\Http\Response
     */
    public function show(Licor $licor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Licor  $licor
     * @return \Illuminate\Http\Response
     */
    public function edit(Licor $licore)
    {
        return view('licores.licorForm', compact('licore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Licor  $licor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Licor $licore)
    {
        $licore->nombre = $request->nombre;
        $licore->sabor = $request->sabor;
        $licore->color = $request->color;
        $licore->porcentaje_alcohol = $request->porcentaje;
        $licore->precio = $request->precio;
        $licore->stock = $request->stock;
        $licore->pais_origen = $request->pais;

        $licore->save();
       
        return redirect()->route('licores.index')
        ->with([
            'alerta'=>'Licor Actualizado',
            'alert-class'=>'alert-success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Licor  $licor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licor $licore)
    {
        $licore->delete();
        return redirect()->route('licores.index')->
        with([
            'alerta' => 'Licor Eliminado',
            'alert-class' => 'alert-dark'
        ]);
    }
}
