@extends('adminlte::page')
@section('title', 'Detalle de la Categoría')
@section('content_header')
    <h1>Detalle de la Categoría</h1>
@stop
@section('content')
    <div>
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{ $category->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Descripción: </strong>{{ $category->description }}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('categories.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('categories.edit', $category)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('categories.destroy', $category->id)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta Categoría?')">Eliminar</button>
            </form>
        </div>
    </div>
@stop