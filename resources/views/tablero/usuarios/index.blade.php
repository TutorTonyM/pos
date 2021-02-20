@extends('tablero.es.plantillas.principal')

@section('title', 'Listado de Usuarios' )

@section('contenido')

<h1 class="titulo-de-pagina">Listado de Usuarios</h1>
<div class="table-responsive">
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nombre de Usuario</th>
            <th scope="col">Correo Electronico</th>
            <th scope="col">Miembro Desde</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->nombre_de_usuario }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->creado_el }}</td>
        </tr>
        @endforeach        
    </tbody>
</table>
</div>

@endsection