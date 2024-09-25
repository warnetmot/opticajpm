@extends('adminlte::page')
@section('title', 'Inventarios')
@section('content_header')
    <h1>Inventarios</h1>
    {{-- Mejor llamarlo Stock --}}
@stop
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <a href="{{route('inventories.create')}}" class="btn btn-primary">Agregar Inventario</a>
    <form action="{{ route('inventories.index') }}" method="GET" class="form-inline ml-auto">
        <div class="input-group">
            <input type="text" name="search" class="form-control form-control-sm" placeholder="Buscar productos..." value="{{ request('search') }}">
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
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->id }}</td>
                    <td>{{ $inventory->product->name }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>
                        <a href="{{route('inventories.edit', $inventory)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('inventories.show', $inventory)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{route('inventories.destroy', $inventory->id)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este inventario?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
