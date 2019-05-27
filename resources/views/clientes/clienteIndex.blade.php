@extends('layouts.app')

@section('content')

<<h1 class="offset-5">Clientes</h1>

<div class="offset-3 col-6">
<h5>@include('partials.mensajes')</h5>
{{$cliente->links()}}
</div>
<table class="table table-hover table-dark offset-3 col-6">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>RFC</th>
      <th>Direccion</th>
      <th>e-Mail</th>
      <th>Acciones</th>
      <th>Enviar Correo</th>
      <th>Subir Archivos</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cliente as $c)
      <tr>
        <th>{{ $c->id }}</th>
        <th>{{ $c->nombre }}</th>
        <th>{{ $c->apellido }}</th>
        <th>{{ $c->rfc }}</th>
        <!--<th>{{ $c->rfc_mayuscula }}</th>  La cadena lo convierte en mayuscula utilizando el metodo del modelo -->
        <th>{{ $c->direccion }}</th>
        <th>{{ $c->email }}</th>
        <th>
          <a class="btn btn-outline-warning btn-sm" href="{{ route('clientes.edit', $c->id) }}">Editar</a>
          <form action="{{ route('clientes.destroy', $c->id) }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                  @csrf
                  <button type="submit" class="btn btn-sm btn-outline-danger">Borrar</button>
              </form>
        
        </th>
        <th>
          <a class="btn btn-outline-success btn-sm" href="{{ action('MailSeguimientoController@enviaCorreo',$c) }}">Enviar</a>
        </th>
        <th><a class="btn btn-outline-success btn-sm" href="{{ route('clientes.show',$c->id) }}">Subir</a></th>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection