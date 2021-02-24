@extends('tablero.es.plantillas.principal')

@section('title', 'Listado Emleados' )

@section('contenido')

<h1 class="titulo-de-pagina">Listado de Empleados</h1>

<form action="{{ route('buscar.empleados', ['id'=>1]) }}" method="POST">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar" autofocus>
        <button type="submit" class="btn btn-outline-dark"><i class="fas fa-search"></i></button>
    </div>
</form>

@if ($empleados->total() > 0)  
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
    
    <span>{{ $empleados->firstItem().'-'.$empleados->lastItem().' de '.$empleados->total() }}</span>
    <span class="float-lg-right">{{ $empleados->links() }}</span>
@else
    <p class="text-danger text-center"><strong>No hay resultados.</strong></p>
@endif

@endsection