@extends('layouts.app')

@section('content')

<<h1 class="offset-5">Clientes</h1>

<div class="offset-3 col-6">
<h5>@include('partials.mensajes')</h5>
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
    </tr>
  </thead>
  <tbody>
    @foreach($cliente as $c)
      <tr>
        <th>{{ $c->id }}</th>
        <th>{{ $c->nombre }}</th>
        <th>{{ $c->apellido }}</th>
        <th>{{ $c->rfc }}</th>
        <th>{{ $c->direccion }}</th>
        <th>{{ $c->email }}</th>
        <th>
        <a class="btn btn-outline-warning btn-sm" href="{{ route('clientes.edit', $c->id) }}">Editar</a>
        </th>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection