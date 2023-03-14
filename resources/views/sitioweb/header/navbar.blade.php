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
                @if (Auth::check())
                    <li>
                        <div class="dropdown">
                            <a class="nav-link" href="#" style="color: black;">{{ Auth::user()->name }}</a>
                            {{-- <div class="dropdown-content">
                               
                                <li class="user-footer">
                                    <a class="btn btn-default btn-flat float-right  btn-block " href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-fw fa-power-off text-red"></i>
                                        Log Out
                                    </a>
                                    <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="nSoP0qifsfxH5Enxyg4GGmd20oN2ZQGhGWi3GT0T">
                                    </form>
                                </li>
                            </div> --}}
                        </div>
                    </li>
                @else
                    <li><a class="nav-link" href="login"><img src="images/user.svg"></a></li>
                @endif
                
                <li><a class="nav-link" href="cart"><img src="images/cart.svg"></a></li>
            </ul>
        </div>
    </div>
        
</nav>

<style>
    .dropdown {
  display: inline-block;
  position: relative;
}
.dropdown-content {
  display: none;
  position: absolute;
  width: 100%;
  overflow: auto;
  box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown-content a {
  display: block;
  color: #000000;
  padding: 5px;
  text-decoration: none;
}
.dropdown-content a:hover {
  color: #FFFFFF;
  background-color: #00A4BD;
}
</style>