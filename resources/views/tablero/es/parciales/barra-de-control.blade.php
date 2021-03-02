<nav id="barra-de-control">
    <div id="contenedor-de-alternador"><span id="alternador"></span></div>

    <a href="#">
        <i class="fas fa-cash-register"></i>
        <span>{{ __('Cash Register') }}</span>
         
    </a>

    <div class="desplegable">
        <i class="fas fa-users-cog"></i>
        <span>Empleados</span>
        <div class="menu">
            <a href="{{ route('empleados.index') }}">Ver Listado</a>
            <a href="{{ route('empleados.create') }}">Agregar Nuevo</a>
        </div>
    </div>

    <div class="desplegable">
        <i class="fas fa-balance-scale"></i>
        <span>Unidades</span>
        <div class="menu">
            <a href="{{ route('unidades-de-medida.index') }}">Ver Listado</a>
            <a href="{{ route('unidades-de-medida.create') }}">Agregar Nuevo</a>
        </div>
    </div>

    <div class="desplegable">
        <i class="fas fa-boxes"></i>
        <span>{{ __('Products') }}</span>
        <div class="menu">
            <a href="#">{{ __('View Products') }}</a>
            <a href="#">{{ __('Agregar Products') }}</a>
        </div>
    </div>

    <div class="desplegable">
        <i class="fas fa-box-open"></i>
        <span>{{ __('Providers') }}</span>  
        <div class="menu">
            <a href="#">{{ __('View Providers') }}</a>
            <a href="#">{{ __('Agregar Providers') }}</a>
        </div>   
    </div>
</nav>