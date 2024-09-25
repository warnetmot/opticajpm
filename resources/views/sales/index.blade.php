@extends('adminlte::page')

@section('title', 'Empleado')

@section('content_header')
    <h1>Detalles del Empleado</h1>
@stop

@section('content')
    <a href="{{ route('sales.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo </a>
    <table id="sales" class="table table-bordered shadow-lg mt-12">
        <thead class="tabla-sales  text-white" style="background-color: #515E78;">
            <tr>
                <th class="text-center">Nº</th>
                <th class="text-center">Cliente</th>
                <th class="text-center">Producto</th>
                <th class="text-center">Fecha de venta</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Total</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
                <tr>
                    <td class="text-center">{{ $sale->id }}</td>
                    <td class="text-center">{{ $sale->client->name }}</td>
                    <td class="text-center">{{ $sale->product->name }}</td>
                    <td class="text-center">{{ $sale->date }}</td>
                    <td class="text-center">{{ $sale->quantity}}</td>
                    <td class="text-center">{{ $sale->total }}</td>
                    <td>
                    <a href="{{ route('sales.edit', $sale) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('sales.show', $sale) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('sales.destroy', $sale) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">


@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function(){
                    $('#sales').DataTable({
                        "ordering":false,
                        "language":{
                            "search":       "Buscar",
                            "lengthMenu":   "Mostrar _MENU_ registros por pagina",
                            "info":         "Mostrando pagina _PAGE_de_PAGES_",
                            "paginate":     {
                                                "previus": "Anterior",
                                                "next": "Siguiente",
                                                "first": "Primero",
                                                "last": "Ultimo"
                            }
                        }
                    });
                }); 
    </script>
@endsection