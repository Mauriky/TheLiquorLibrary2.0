@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Registro de la venta</h1>
    <form action="{{route('reportes.store')}}" method="POST">

    <div class="form-row">
        <div class="form group col-md-6">
            <label for="nombre">Nombrel del cliente</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form group col-md-2">
            <label for="clienteId">ID Cliente</label>
            <input type="text" placeholder="Ingresa ID del cliente" class="form-control" id="clienteId" name="clienteId">
        </div>
        <div class="form group col-md-2">
            <a class="btn btn-outline-info" href="">Buscar</a>
        </div>
    </div>

    <div class="form-row">
        <div class="form group col-md-6">
            <label for="licorId">Licor ID</label>
            <input type="text" placeholder="Ingresa el ID del licor" class="form-control" id="licorId" name="licorId">
        </div>
        <div class="form group col-md-2">
            <label for="cantidad">Cantidad</label>
            <input type="number" placeholder="Ingresa la cantidad" class="form-control" id="cantidad" min="1">
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