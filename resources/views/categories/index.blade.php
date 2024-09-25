@extends('adminlte::page')
@section('title', 'Categoría')
@section('content_header')
    <h1>Categorías</h1>
@stop
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <a href="{{route('categories.create')}}" class="btn btn-primary">Agregar Categoría</a>
    <form action="{{ route('categories.index') }}" method="GET" class="form-inline ml-auto">
        <div class="input-group">
            <input type="text" name="search" class="form-control form-control-sm" placeholder="Buscar categorías..." value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-secondary btn-sm" type="submit">
                    <i class="fas fa-search"></i> Buscar
                </button>
            </div>
        </div>
    </form>
</div>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">ID</th>
            <th>Nombre de la categoría</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>
                        <a href="{{route('categories.edit', $category)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('categories.show', $category)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{route('categories.destroy', $category->id)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta categoría?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
