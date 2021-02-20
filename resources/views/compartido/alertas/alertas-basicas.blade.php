@if ($flash = Session::get('exito'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Grandioso!</strong> {{ $flash }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($flash = Session::get('falla'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Ups!</strong> {{ $flash }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($flash = Session::get('pregunta'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Pregunta!</strong> {{ $flash }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($flash = Session::get('aviso'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Aviso!</strong> {{ $flash }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif