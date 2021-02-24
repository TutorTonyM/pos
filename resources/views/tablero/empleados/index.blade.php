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
        <a href="{{ route('empleados.index') }}">Limpiar Busqueda</a>
        <a href="#" id="alternador-de-opciones-de-busqueda" class="ml-3">Busqueda Avanzada <i class="fa fa-caret-down"></i></a>
    </div>
    <div class="form-group col-12 no-show" id="contenedor-de-opciones-de-busqueda">
        <input type="hidden" name="todos" value="0">
        <input type="checkbox" name="todos" id="caja-todos" value="1" checked>
        <label for="caja-todos" class="mr-4">Todos</label>

        <input type="hidden" name="numero" value="0">
        <input type="checkbox" class="js-selectivo" name="numero" id="caja-numero-de-empleado" value="1" checked>
        <label for="caja-numero-de-empleado" class="mr-4">Numero de Empleado</label>

        <input type="hidden" name="nombre" value="0">
        <input type="checkbox" class="js-selectivo" name="nombre" id="caja-nombre" value="1" checked>
        <label for="caja-nombre" class="mr-4">Nombre</label>

        <input type="hidden" name="apellido" value="0">
        <input type="checkbox" class="js-selectivo" name="apellido" id="caja-apellido" value="1" checked>
        <label for="caja-apellido" class="mr-4">Apellido</label>

        <input type="hidden" name="contratado_el" value="0">
        <input type="checkbox" class="js-selectivo" name="contratado_el" id="caja-contratado_el" value="1" checked>
        <label for="caja-contratado_el" class="mr-4">Fecha de Contratacion</label>

        <input type="hidden" name="direccion" value="0">
        <input type="checkbox" class="js-selectivo" name="direccion" id="caja-direccion" value="1" checked>
        <label for="caja-direccion" class="mr-4">Direccion</label>

        <input type="hidden" name="ciudad" value="0">
        <input type="checkbox" class="js-selectivo" name="ciudad" id="caja-ciudad" value="1" checked>
        <label for="caja-ciudad" class="mr-4">Ciudad</label>

        <input type="hidden" name="estado" value="0">
        <input type="checkbox" class="js-selectivo" name="estado" id="caja-estado" value="1" checked>
        <label for="caja-estado" class="mr-4">Estado</label>

        <input type="hidden" name="codigo_postal" value="0">
        <input type="checkbox" class="js-selectivo" name="codigo_postal" id="caja-codigo_postal" value="1" checked>
        <label for="caja-codigo_postal" class="mr-4">Codigo Postal</label>

        <input type="hidden" name="telefono" value="0">
        <input type="checkbox" class="js-selectivo" name="telefono" id="caja-telefono" value="1" checked>
        <label for="caja-telefono" class="mr-4">Telefono</label>
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