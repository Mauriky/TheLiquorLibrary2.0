@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Registro de la venta</h1>
    <form action="{{route('reportes.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <div class="col-md-8 ">
            <label for="nombre">Nombrel del cliente</label>
            <select id="nombre" class="form-control mb-4" name="cliente_id">
            @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}" >{{ $cliente->nombre }}</option>
            @endforeach
        </div>
    </div>
    <div class="form group col-md-8">
        <label for="licorId">Licor ID</label>
        <input type="text" placeholder="Ingresa el ID del licor" class="form-control" id="licorId" name="licorId">
    </div>
    <div class="form-group">
        <div class="form group col-md-4">
            <label for="cantidad">Cantidad</label>
            <input type="number" placeholder="Ingresa la cantidad" class="form-control mb-2" id="cantidad" min="1">
        </div>
        <div class="form group col-md-2">
                <a class="btn btn-outline-info" href="">Agregar</a>
        </div>
    </div>
        <br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>Licor</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Precio Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
           
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <a class="btn btn-outline-danger" href="">X</a>
                </th>
            </tr>
        </tbody>
    </table>

    <div class="form-group col-md-4">
        <label for="pago">Estado de la venta</label>
        <select name="pago" id="pago" class="form-control">
            <option select value="NO PAGADO">NO PAGADO</option>
            <option value="PAGADO">PAGADO</option>
        </select>

    </div>

    <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>
</div>

@endsection