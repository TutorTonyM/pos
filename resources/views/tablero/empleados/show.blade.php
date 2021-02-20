@extends('tablero.es.plantillas.principal')

@section('title', 'Empleado' )

@section('contenido')

<h1 class="titulo-de-pagina">Informacion de Empleado</h1>

<div class="row justify-content-center mt-4">
    <div class="col-12 col-md-10 col-lg-8 col-xl-6">
        <div class="card">
            <h5 class="card-header">{{ $empleado->nombre_completo }}</h5>
            <div class="card-body">
                <p>Numero de Empleado: <strong>{{ $empleado->numero }}</strong></p>
                <p>P. Nombre: <strong>{{ $empleado->primer_nombre }}</strong></p>
                <p>S. Nombre: <strong>{{ $empleado->segundo_nombre }}</strong></p>
                <p>P. Apellido: <strong>{{ $empleado->primer_apellido }}</strong></p>
                <p>S. Apellido: <strong>{{ $empleado->segundo_apellido }}</strong></p>
                <p>Activo: <strong>{{ $empleado->activo ? "Si" : "No" }}</strong></p>
                <p>Fecha de Contratacion: <strong>{{ $empleado->fecha_de_contratacion }}</strong></p>
                <p>Direccion: <strong>{{ $empleado->direccion }}</strong></p>
                <p>Ciudad: <strong>{{ $empleado->ciudad }}</strong></p>
                <p>Estado: <strong>{{ $empleado->estado }}</strong></p>
                <p>Codigo Postal: <strong>{{ $empleado->codigo_postal }}</strong></p>
                <p>Telefono Primario: <strong>{{ $empleado->telefono }}</strong></p>
                <p>Telefono Secundario: <strong>{{ is_null($empleado->telefono2) ? "Ninguno" : $empleado->telefono2 }}</strong></p>
            </div>
            <div class="card-footer">
                <a href="{{ route('empleados.edit', ['empleado'=>$empleado->id]) }}" class="btn btn-primary">Editar</a>                
                <button type="button" class="btn btn-danger" onclick="document.getElementById('eliminar-empleado').submit();">Eliminar</button>
                <form id="eliminar-empleado" action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" class="d-none">@method('DELETE')@csrf</form>
            </div>
        </div>
    </div>
</div>

@endsection