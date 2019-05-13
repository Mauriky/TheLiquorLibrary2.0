@extends('layouts.app')

@section('content')

<h1 class="offset-5">Licores</h1>
<div class="offset-3 col-6">
  <h5>@include('partials.mensajes')</h5>
{{$licor->links()}}
</div>
<table class="table table-hover table-dark offset-3 col-6">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>País Origen</th>
      <th>Sabor</th>
      <th>Color</th>
      <th>% de Alcohol</th>
      <th>Precio</th>
      <th>Stock</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($licor as $l)
      <tr>
        <th>{{ $l->id }}</th>
        <th>{{ $l->nombre }}</th>
        <th>{{ $l->pais_origen }}</th>
        <th>{{ $l->sabor }}</th>
        <th>{{ $l->color }}</th>
        <th>{{ $l->porcentaje_alcohol }}</th>
        <th>{{ $l->precio }}</th>
        <th>{{ $l->stock }}</th>
        <th>
         
            <div>
              <a class="btn btn-outline-warning btn-sm" href="{{ route('licores.edit',$l->id) }}">Editar</a>
            </div>
          <div >

            <form action="{{ route('licores.destroy', $l->id) }}" method="POST">
              <input type="hidden" name="_method" value="DELETE">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-danger">Borrar</button>
            </form>
            
          </div>
        </th>
      </tr>
    @endforeach
  </tbody>
</table>


@endsection