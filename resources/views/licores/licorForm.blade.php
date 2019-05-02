@extends('layouts.app')

@section('content')

<div class ="container">
    
  
      @include('partials.faltaDatos')
    @if(isset($licore))
      <h1>Actualizar datos del Licor</h1>
      <form action="{{route('licores.update',$licore->id)}}" method="POST">
      <input type="hidden" name="_method" value="PATCH">
    @else
      <h1>Registro del Licor</h1>
      <form action="{{route('licores.store')}}" method="POST">
    @endif
    
     @csrf
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre"
      value="{{ isset($licore)?$licore->nombre : old('nombre') }}">
    </div>
    <div class="form-group col-md-6">
      <label for="sabor">Sabor</label>
      <input type="text" class="form-control" id="sabor" placeholder="Sabor" name="sabor" 
      value="{{isset($licore)?$licore->sabor : old('sabor') }}">
    </div>
  </div>
  <div class="form-group">
    <label for="color">Color</label>
    <input type="text" class="form-control" id="color" placeholder="Color" name="color" 
    value="{{isset($licore)?$licore->color: old('color') }}">
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="porcentaje">Porcentaje de alcohol</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
    <div class="input-group-text">%</div>
    <input type="number" class="form-control" id="porcentaje" placeholder="00" name="porcentaje" min="0" max="100"
       value="{{ isset($licore)?$licore->porcentaje_alcohol : old('porcentaje') }}">
    </div>
    </div>
  </div>
    <div class="form-group col-md-4">
      <label for="precio">Precio</label>
      <input type="number" class="form-control" id="precio" placeholder="Precio" name="precio" min="0" 
      value="{{isset($licore)?$licore->precio: old('precio') }}">
    </div>
    <div class="form-group col-md-4">
      <label for="stock">Stock</label>
      <input type="number" class="form-control" id="stock" placeholder="Stock" name="stock" min="1" max="100" 
      value="{{isset($licore)?$licore->stock: old('stock') }}">
    </div>
    </div>
    <div class="form-group col-md-4">
        <label for="pais">País de Origen</label>
        <select id="pais" class="form-control" name="pais"> 
            <option selected value="{{isset($licore)?$licore->pais_origen: old('pais') }}">...</option>
            <option value="Desconocido">Desconocido</option>
            <option value="Afganistán">Afganistán</option>
            <option value="Bélgica">Bélgica</option>
            <option value="Colombia">Colombia</option>
            <option value="Dominica">Dominica</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Francia">Francia</option>
            <option value="Guinea">Guinea</option>    
            <option value="Haití">Haití</option>    
            <option value="India">India</option>   
            <option value="Japón">Japón</option>    
            <option value="Kuwait">Kuwait</option>     
            <option value="Luxemburgo">Luxemburgo</option>
            <option value="México">México</option>     
            <option value="Nigeria">Nigeria</option>      
            <option value="Omán">Omán</option>   
            <option value="Polonia">Polonia</option>      
            <option value="Rusia">Rusia</option>    
            <option value="Samoa">Samoa</option>    
            <option value="Tuvalu">Tuvalu</option>     
            <option value="Ucrania">Ucrania</option>      
            <option value="Uzbekistán">Uzbekistán</option>
            <option value="Venezuela">Venezuela</option>        
            <option value="Yemen">Yemen</option>    
            <option value="Zimbabue">Zimbabue</option>     
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>
    
</div>

@endsection 