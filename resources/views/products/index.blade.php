@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <a href="{{ route('products.create') }}" class="btn btn-primary">Agregar Producto</a>

    <form action="{{ route('products.index') }}" method="GET" class="form-inline ml-auto">
        <div class="input-group">
            <input type="text" name="search" class="form-control form-control-sm" placeholder="Buscar producto..." value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-secondary btn-sm" type="submit">
                    <i class="fas fa-search"></i> Buscar
                </button>
            </div>
        </div>
    </form>
</div>

<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Categoría</th>
            <th>Proveedor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    @if($product->image)
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="width: 50px; height: auto;">
                    @else
                        N/A
                    @endif
                </td>
                <td>{{ number_format($product->price, 2) }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->category->name ?? 'N/A' }}</td>
                <td>{{ $product->supplier->name ?? 'N/A' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop

