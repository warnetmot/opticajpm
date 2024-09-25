@extends('adminlte::page')

@section('title', 'Editar Empleado')

@section('content_header')
    <h1>Editar Empleado</h1>
@stop

@section('content')
    <form action="{{ route('sales.update', $sale->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <label for="client_id">Cliente</label>
                <select id="client_id" name="client_id" class="form-control" required>
                    <option value="">Seleccione un cliente</option>
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}" {{ $sale->client_id == $client->id ? 'selected' : '' }}>
                            {{ $client->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label for="product_id">Producto</label>
                <select id="product_id" name="product_id" class="form-control" required>
                    <option value="">Seleccione un Producto</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ $sale->product_id == $product->id ? 'selected' : '' }}>
                            {{ $product->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="date">Fecha de venta</label>
                    <input type="date" id="date" name="date" class="form-control" value="{{ $sale->date }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="quantity">Cantidad</label>
                    <input type="number" id="quantity" name="quantity" class="form-control" value="{{ $sale->quantity }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="number" id="total" name="total" class="form-control" value="{{ $sale->total }}" required>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop
