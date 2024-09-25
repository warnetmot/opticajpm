@extends('adminlte::page')
@section('title', 'Crear Inventario')
@section('content_header')
    <h1>Agregar Inventario</h1>
@stop
@section('content')
    <form action="{{route('inventories.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Producto: </label>
                    <select name="product_id" id="product_id" class="form-control">
                        @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="quantity">Cantidad disponible: </label>
                    <input type="text" id="quantity" name="quantity" class="form-control" required>
                </div>
            </div>
        </div>

        <a href="{{route('inventories.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop