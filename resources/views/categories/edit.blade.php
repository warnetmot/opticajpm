@extends('adminlte::page')
@section('title', 'Editar Categoría')
@section('content_header')
    <h1>Editar Categoría</h1>@stop
@section('content')

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Nombre de la categoría: </label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $category->name }}" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="description">Descripción: </label>
                    <input type="text" id="description" name="description" class="form-control" value="{{ $category->description }}" required>
                </div>
            </div>
        </div>

        <a href="{{route('categories.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
@stop