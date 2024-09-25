@extends('adminlte::page')
@section('title', 'Crear Categoría')
@section('content_header')
    <h1>Agregar Categoría</h1>
@stop
@section('content')
    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Nombre de la categoría: </label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="description">Descripción: </label>
                    <input type="text" id="description" name="description" class="form-control" required>
                </div>
            </div>
        </div>

        <a href="{{route('categories.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop