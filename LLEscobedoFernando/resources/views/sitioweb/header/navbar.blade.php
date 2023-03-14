<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="/" style="color:rgb(41, 37, 37);">LLEscobedo</a>
        {{-- src="{{ public_path('images/Logoinadware0001.png') }}" --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li><a class="nav-link" href="tienda">Tienda</a></li>
                <li><a class="nav-link" href="servicios">Servicios</a></li>
                <li><a class="nav-link" href="contacto">Contacto</a></li>
                <li><a class="nav-link" href="acercade">Acerca de</a></li>
                
                {{-- <li><a class="nav-link" href="blog.html">Blog</a></li> --}}
                
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="login"><img src="images/user.svg"></a></li>
                <li><a class="nav-link" href="cart"><img src="images/cart.svg"></a></li>
            </ul>
        </div>
    </div>
        
</nav>