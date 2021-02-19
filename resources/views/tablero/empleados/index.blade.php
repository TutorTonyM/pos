@extends('tablero.es.plantillas.principal')

@section('title', 'Listado Emleados' )

@section('contenido')

<h1 class="titulo-de-pagina">Listado de Empleados</h1>

<div class="table-responsive">
    <table class="table table-striped tabla-presionable">
        <thead>
            <tr>
                <th scope="col">Numero de Empleado</th>
                <th scope="col">P. Nombre</th>
                <th scope="col">S. Nombre</th>
                <th scope="col">P. Apellido</th>
                <th scope="col">S. Apellido</th>
                <th scope="col">Activo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr data-href="{{ route('empleados.show', ['empleado'=>$empleado->id]) }}">
                <th scope="row">{{ $empleado->numero }}</th>
                <td>{{ $empleado->primer_nombre }}</td>
                <td>{{ $empleado->segundo_nombre }}</td>
                <td>{{ $empleado->primer_apellido }}</td>
                <td>{{ $empleado->segundo_apellido }}</td>
                <td>{{ $empleado->activo ? "Si" : "No" }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection