<nav id="barra-de-control">
    <a href="#">
        <i class="fas fa-cash-register"></i>
        <span>{{ __('Cash Register') }}</span>
         
    </a>

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