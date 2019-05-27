@extends('layouts.app')

@section('content')

<<h1 class="offset-5">Cliente</h1>

<div class="offset-3 col-6">
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
    </tr>
  </thead>
  <tbody>
      <tr>
        <th>{{ $cliente->id }}</th>
        <th>{{ $cliente->nombre }}</th>
        <th>{{ $cliente->apellido }}</th>
        <th>{{ $cliente->rfc }}</th>
        <th>{{ $cliente->direccion }}</th>
        <th>{{ $cliente->email }}</th>
        
  </tbody>
</table>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Carga de Archivos</h3>
            </div>
            <div class="card-body">
                @include('archivos.archivoUpload', ['modelo_id' => $cliente->id, 'modelo_type' => 'cliente'])
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listado de Archivos</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    @foreach($cliente->archivos as $archivo)
                        <tr>
                            <td>
                                <a href="{{ route('archivo.show', $archivo->id) }}">{{ $archivo->nombre }}</a>
                            </td>
                            <td>
                                {!! Form::open(['route' => ['archivo.destroy', $archivo->id], 'method' => 'delete']) !!}
                                    <input type="hidden" name="accion" value="borrar">
                                    <button class="btn btn-sm btn-danger form-pill borrar-archivo" type="submit" id="archivo_{{ $archivo->id }}">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Borrar
                                    </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>


@endsection