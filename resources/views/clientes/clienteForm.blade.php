@extends('layouts.app')

@section('content')

<div class ="container">
    
    @include('partials.faltaDatos')

    @if(isset($cliente))
    <h1>Actualizar datos del Cliente</h1> 
      <form action="{{route('clientes.update', $cliente->id)}}" method="POST">
      <input type="hidden" name="_method" value="PATCH">
    @else
    <h1>Registro del Cliente</h1> 
      <form action="{{route('clientes.store')}}" method="POST">
    @endif

    
     @csrf
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" 
      value="{{isset($cliente)?$cliente->nombre : old('nombre')}}">
    </div>
    <div class="form-group col-md-6">
      <label for="apellido">Apellido</label>
      <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido" 
      value="{{isset($cliente)?$cliente->apellido : old('apellido')}}">
    </div>
  </div>
  <div class="form-group">
    <label for="rfc">RFC</label>
    <input type="text" class="form-control" id="rfc" placeholder="ROTM970823NM6" name="rfc" 
    value="{{isset($cliente)?$cliente->rfc : old('rfc')}}">
  </div>
  <div class="form-group">
    <label for="direccion">Dirección</label>
    <input type="text" class="form-control" id="direccion" placeholder="Emiliano Zapata #141" name="direccion" 
    value="{{isset($cliente)?$cliente->direccion: old('direccion') }}">
  </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com" name="email" 
      value="{{isset($cliente)?$cliente->email:old('email')}}">
    </div>

    <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>
    
</div>

@endsection 