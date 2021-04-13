<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ureña Santana Rent Car</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/adminHomepage.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/LogoComp90.png') }}">
</head>
<header>
    <nav>

        <a href="#" class = "logo "><img src="{{asset('images/LogoComp80.png')}}" alt="Logo"></a>

        <a href="{{ route('vehiculos.index') }}" class = "administrarv ">Administrar Vehiculos
            <img src="images/iconocar.png" width="16px" height="18px">

        </a>

        <a href="{{ route('rentas.index') }}" class = "administrarv ">Rentas
            <img src="images/carnolmal.png" width="20px" height="16px">

        </a>

        <a href="#" class = "administrarv ">Calendario
            <img src="images/iconocalendar.png" width="15px" height="18px">

        </a>


        <!-- <a href="{{route('clientes.index')}}" class = "circulop"> <img src="{{asset('images/fotocliente.png')}}" alt="clientes" width="44px" height="44.44px"> </a> -->

        <div class="dropdown">
            <img src="{{asset('images/admin 1.png')}}" alt="A">
            <div class="dropdown-content">

                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                 <img src="{{ asset('images/iconologout.png')}}" width="14px" height="14.44px"> Cerrar Sesión</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

        </div>

    </nav>
</header>
<body >
    <h1 id="hola">
        Hola<nobr>   {{ Auth::user()->name }}!
    </h1>
    <p>Observe el calendario, las rentas, administra tus vehiculos  mira quienes forman parte de la comunidad</p>
    <!-- CALENDARIO-->
<a href="{{route('Calendario.index')}}" id="rectangulo1">

    <div id="texto1">
        Calendario
    </div>
    <div id="linea8"></div>
    <div id="subtexto1">Chequea las fechas de tus rentas</div>
    <img id="calendaricono" src="{{ asset('images/iconocalendar.png')}}" alt="Italian Trulli" width="39.6" height="44">

</a>

    <!-- MENSAJES-->
    <a href="https://www.google.com" id="rectangulo2">
        <div id="texto2">
            Correo electronico
        </div>
        <div id="linea9"></div>
        <div id="subtexto2">Revisa lo que te han escrito tus clientes</div>
        <img id="mensajesicono" src="images/mailicono.png" alt="Italian Trulli" width="38.35" height="38.43">

    </a>

<!-- ADMINISTRAR VEHICULO-->

    <a href="{{ route('vehiculos.index') }}" id="rectangulo3">
        <div id="texto3">
            Administrar vehiculo
        </div>
        <div id="linea10"></div>
        <div id="subtexto3">Edita la informacion de tus carros</div>
        <img id="administraricono" src="images/iconoadministrar.png" width="52" height="27.13">

    </a>

    <!-- Mirar las rentas activa -->
    <a href="{{ route('rentas.index') }}" id="rectangulo4">
        <div id="texto4">
            Rentas y Perfil
        </div>
        <div id="linea11"></div>
        <div id="subtexto4">Cheque las rentas pendientes y pasadas y tu perfil</div>
        <img id="caricono" src="images/iconocar.png" alt="Italian Trulli" width="34.67" height="52" >

    </a>



</body>
</html>
