<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URC | Explorar</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/Register.css')}}">
    <link rel="stylesheet" href="{{asset('css/explorarr.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/LogoComp90.png') }}">
</head>
<header>
    @if (Route::has('login'))
    @auth
    <nav>
 
        <a href="{{route('welcome.index')}}" class = "logo "><img src="images/LogoComp80.png" alt="Logo"></a>
        <a href="{{route('explorar.index')}}" class = "administrarv " >Explorar
         <!--<i class="material-icons">person</i>-->
            <img src="images/exploraricon.png" width="15px" height="14px">
        </a>
        <a href="{{route('rentaC.create')}}" class = "administrarv " >Rentar
            <!--<i class="material-icons">person</i>-->
            <img src="images/iconocar.png" width="11.45px" height="14px">
        </a>

        <a href="{{route('Learn.index')}}" class = "administrarv ">Aprender
         <img src="images/iconoaprender.png" width="13px" height="14px">
        </a>

        <a href="{{route('email.index')}}" class = "administrarv ">Enviar Correo
            <img src="images/mailicono.png" width="15px" height="14px">
         </a>

        <div class="dropdown">
            <img src="{{asset('images/admin 1.png')}}" alt="A">
            <div class="dropdown-content">
                <a href="{{route('homec.index')}}"> <img src="images/iconoverperfilCLiente.png" width="11px" height="14.44px">Cuenta</a>
                <a href="{{route('Ajustes.index')}}"> <img src="images/iconoverrentasCliente.png" width="11px" height="14.44px">Ajustes</a>
                <a href="{{route('logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> 
            <img src="images/iconologout.png" width="14px" height="14.44px"> Cerrar Sesión</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

            </div>

        </div>

    </nav>

    @else
    

    <nav> 
        <a href="{{route('welcome.index')}}" class = "logo "><img src="{{ asset('images/LogoComp80.png') }}" alt="Logo"></a>
        <a href="{{route('rentasC.index')}}" class = "nav-menu ">Rentar</a>
        <a href="{{route('AboutUs.index')}}" class = "nav-menu ">Nosotros</a>
        <a href="#" class = "nav-menu ">Aprender</a>
        <a href="{{route('login')}}" class = "nav-iniciarsesion ">Inicia Sesión</a>
        @if (Route::has('register'))
        
        <a href="{{route('register')}}" class = "nav-registro">Regístrate</a>
        @endif
    </nav>
    @endauth
    @endif
</header>
<body>

<h1 style="position: absolute;
width: 400px;
height: 36px;
left: 640px;
top: 141px;">Nuestros vehiculos</h1>

<div style="position: absolute;
width: 320px;
height: 0px;
left: 620px;
top: 210px;

border: 3px solid #FFEF3E;"></div>

<!--<div id="filtroBUSQUEDA" style="position: absolute;
    width: 301px;
    height: 828px;
    left: 34px;
    top: 270px;">
    <h1 class="t1">Tipo de Vehiculo</h1>
    <div class="vertical-menu">
        <a href="#">Compacto</a>
        <a href="#">Mediano</a>
    </div>

    <h1 class="t1" style="top: 240px">Precio</h1>
    <div class="vertical-menu" style="top: 290px">
        <a href="#">Menor a mayor</a>
        <a href="#">Mayor a menor</a>
    </div>

    <h1 class="t1" style="top: 450px">Marcas</h1>           <!-- Viene mambo de form
    <form action="#">
        <input type="radio" class="botonpos" name="marcacarros" value="kia" >
        <div class="titulobusqueda">Kia</div>

        <input type="radio" class="botonpos" style="top: 550px" name="marcacarros" value="hyundai" >
        <div class="titulobusqueda" style="top: 555px">Hyundai</div>

        <input type="radio" class="botonpos" style="top: 600px"name="marcacarros" value="Volkswagen" >
        <div class="titulobusqueda" style="top: 600px">Volkswagen</div>
    </form>



</div>-->


<section class="container flex text-center">

@foreach ($vehiculoss as $vehiculo)
    

<div class="columna">
    <img  class="foto-vehiculo"src="{{asset('storage/images/'. $vehiculo->FotoName) }}" alt="A" style="width: 311px;
height: 219px;">
    <h3 class="nombreCarro">{{$vehiculo->Nombre ?? ''}}</h3>
    
    <p class="tipoCarro"> Tipo: {{$vehiculo->Tipo ?? ''}}</p>
    
    <p>Numero de pasajeros: {{$vehiculo->N_pasajeros ?? ''}}</p>

	<p>Precio: RD$ {{$vehiculo->Precio ?? ''}} por dia</p>

    <a href="{{route('rentasC.index')}}" class="forma-boton-amarillo">
        <div class="seleccionar-titulo">Seleccionar</div>
    </a>
</div>
@endforeach

</section>


</body>
</html>
