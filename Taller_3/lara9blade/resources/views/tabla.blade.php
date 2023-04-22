@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<h2>Contenido de la vista 2</h2>
    <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>Table Name</caption>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Tamaño</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($filas as $fila)
                    <tr>
                        <td>{{ $fila->Nombre }}</td>
                        <td>{{ $fila->Fecha }}</td>
                        <td>{{ $fila->Tamanio }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection