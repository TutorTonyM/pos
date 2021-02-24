@extends('tablero.es.plantillas.principal')

@section('title', 'Listado Emleados' )

@section('contenido')

<h1 class="titulo-de-pagina">Listado de Empleados</h1>

<form action="{{ route('buscar.empleados', ['id'=>1]) }}" method="POST">
    @csrf
    <div class="form-group col-12">
        <div class="input-group">
            <input id="consulta"
                    type="text"
                    class="form-control {{ $errors->has('consulta') ? ' is-invalid' : '' }}"
                    name="consulta"
                    value="{{ old('consulta') }}"
                    placeholder="Buscar"
                    autofocus>
            <button type="submit" class="btn btn-outline-dark"><i class="fas fa-search"></i></button>
            @if ($errors->has('consulta'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('consulta') }}</strong>
            </span>
            @endif
        </div>
    </div>
</form>

@if (!is_null($empleados) && $empleados->total() > 0)  
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
    <p class="text-danger text-center mt-5"><strong>{{ $errorMessage ?? 'No hay resultados.' }}</strong></p>
@endif

@endsection