@extends('adminlte::page')

@section('title', 'Modificar Empleado')

@section('content_header')
    <h1>Detalles de la Ventsa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>ID de Venta</th>
                        <td>{{ $sale->id }}</td>
                    </tr>
                    <tr>
                        <th>Departamento</th>
                        <td>{{ $sale->client->name }}</td>
                    </tr>
                    <tr>
                        <th>Cargo</th>
                        <td>{{ $sale->product->name }}</td>
                    </tr>
                    <tr>
                        <th>Fecha de Venta</th>
                        <td>{{ $sale->date }}</td>
                    </tr>
                    <tr>
                        <th>Cantidad</th>
                        <td>{{ $sale->quantity }}</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td>{{ $sale->total }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('sales.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> </a>
            <a href="{{ route('sales.edit', $sale) }}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
            <form action="{{ route('sales.destroy', $sale) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>
    </div>
@stop
