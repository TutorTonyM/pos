@extends('tablero.es.plantillas.principal')

@section('title', 'Agregar Empleado' )

@section('contenido')

<h1 class="titulo-de-pagina">Agregar Empleado</h1>

<form action="{{ route('empleados.store') }}" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group mt-3 col-12 col-md-6 col-xl-3">
            <label for="primer_nombre">Primer Nombre</label>
            <input id="primer_nombre" 
                    type="text" 
                    class="form-control {{ $errors->has('primer_nombre') ? ' is-invalid' : '' }}"
                    name="primer_nombre"
                    value="{{ old('primer_nombre') }}">
            @if ($errors->has('primer_nombre'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('primer_nombre') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group mt-3 col-12 col-md-6 col-xl-3">
            <label for="segundo_nombre">Segundo Nombre</label>
            <input id="segundo_nombre" 
                    type="text" 
                    class="form-control {{ $errors->has('segundo_nombre') ? ' is-invalid' : '' }}"
                    name="segundo_nombre"
                    value="{{ old('segundo_nombre') }}">
            @if ($errors->has('segundo_nombre'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('segundo_nombre') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group mt-3 col-12 col-md-6 col-xl-3">
            <label for="primer_apellido">Primer Appellido</label>
            <input id="primer_apellido" 
                    type="text" 
                    class="form-control {{ $errors->has('primer_apellido') ? ' is-invalid' : '' }}"
                    name="primer_apellido"
                    value="{{ old('primer_apellido') }}">
            @if ($errors->has('primer_apellido'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('primer_apellido') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group mt-3 col-12 col-md-6 col-xl-3">
            <label for="segundo_apellido">Segundo Apellido</label>
            <input id="segundo_apellido" 
                    type="text" 
                    class="form-control {{ $errors->has('segundo_apellido') ? ' is-invalid' : '' }}"
                    name="segundo_apellido"
                    value="{{ old('segundo_apellido') }}">
            @if ($errors->has('segundo_apellido'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('segundo_apellido') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group mt-3 col-12 col-xl-6">
            <label for="direccion">Direccion</label>
            <input id="direccion" 
                    type="text" 
                    class="form-control {{ $errors->has('direccion') ? ' is-invalid' : '' }}"
                    name="direccion"
                    value="{{ old('direccion') }}">
            @if ($errors->has('direccion'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('direccion') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group mt-3 col-12 col-md-4 col-xl-3">
            <label for="ciudad">Ciudad</label>
            <input id="ciudad" 
                    type="text" 
                    class="form-control {{ $errors->has('ciudad') ? ' is-invalid' : '' }}"
                    name="ciudad"
                    value="{{ old('ciudad') }}">
            @if ($errors->has('ciudad'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('ciudad') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group mt-3 col-12 col-md-4 col-xl-3">
            <label for="estado">Estado</label>
            <input id="estado" 
                    type="text" 
                    class="form-control {{ $errors->has('estado') ? ' is-invalid' : '' }}"
                    name="estado"
                    value="{{ old('estado') }}">
            @if ($errors->has('estado'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('estado') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group mt-3 col-12 col-md-4 col-xl-4">
            <label for="codigo_postal">Codigo Postal</label>
            <input id="codigo_postal" 
                    type="text" 
                    class="form-control {{ $errors->has('codigo_postal') ? ' is-invalid' : '' }}"
                    name="codigo_postal"
                    value="{{ old('codigo_postal') }}">
            @if ($errors->has('codigo_postal'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('codigo_postal') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group mt-3 col-12 col-md-6 col-xl-4">
            <label for="telefono">Telefono Principal</label>
            <input id="telefono" 
                    type="text" 
                    class="form-control {{ $errors->has('telefono') ? ' is-invalid' : '' }}"
                    name="telefono"
                    value="{{ old('telefono') }}">
            @if ($errors->has('telefono'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('telefono') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group mt-3 col-12 col-md-6 col-xl-4">
            <label for="telefono2">Telefono Secundario</label>
            <input id="telefono2" 
                    type="text" 
                    class="form-control {{ $errors->has('telefono2') ? ' is-invalid' : '' }}"
                    name="telefono2"
                    value="{{ old('telefono2') }}">
            @if ($errors->has('telefono2'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('telefono2') }}</strong>
            </span>
            @endif
        </div>
    </div>    

    <div class="form-group form-check col-12">
        <input type="checkbox" class="form-check-input" id="activo">
        <label class="form-check-label" for="activo">Activo</label>
        @if ($errors->has('activo'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('activo') }}</strong>
        </span>
        @endif
    </div>
    
    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection