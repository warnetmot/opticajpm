@extends('adminlte::page')
@section('title', 'Detalle Inventario')
@section('content_header')
    <h1>Detalle del Inventario</h1>
@stop
@section('content')
    <div>
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{ $inventory->product->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Descripción: </strong>{{ $inventory->description }}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('inventories.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('inventories.edit', $inventory)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('inventories.destroy', $inventory->id)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta inventario?')">Eliminar</button>
            </form>
        </div>
    </div>
@stop