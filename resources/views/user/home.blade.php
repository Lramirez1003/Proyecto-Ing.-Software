<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/clienteHOMEPAGE.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/LogoComp90.png') }}">
    <title>URC | Bienvenido</title>
</head>
<header>
    <nav>
        <a href="{{route('welcome.index')}}" class = "logo "><img src="images/LogoComp80.png" alt="Logo"></a>
        <a href="{{route('explorar.index')}}" class = "administrarv " >Explorar
            <!--<i class="material-icons">person</i>-->
            <img src="images/exploraricon.png" width="15px" height="14px">
        </a>
        <a href="{{route('rentasC.index')}}" class = "administrarv " >Rentar
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
            
            <a href="#"> <img src="images/iconoverperfilCLiente.png" width="11px" height="14.44px">Cuenta</a>
            <a href="{{route('Ajustes.index')}}"> <img src="images/iconoverperfilCLiente.png" width="11px" height="14.44px">Ajustes</a>
            
            <a href="{{route('logout')}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"> 
                <img src="images/iconologout.png" width="14px" height="14.44px"> Cerrar Sesión</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

         </div>

    </nav>
</header>
<body>

    <h1 id="hola">Hola<nobr> {{ Auth::user()->name }}! </h1>
    <p id="parrafito">Haz una reserva, comunicate con el dueño o chequea como está tu perfil </p>
    <a href="{{route('rentasC.index')}}" class="rectangulogris">
        <div id="titulo1">
            Haz una reserva ahora!
        </div>
        <div class="lineaamarilla"></div>
        <div class="circuloamarillo"></div>
        <img class= "iconopos" src="images/iconocar.png" width="32px" height="46.44px">
    </a>
    <!-- -->
    <a href="{{route('email.index')}}" class="rectangulogris" style="left: 520px">
        <div id="titulo2">
            Contáctate directamente con el dueño
        </div>
        <div id="lineaamarilla2"></div>
        <div class="circuloamarillo"></div>
        <img class= "iconopos" src="images/mailicono.png" width="37.92px" height="38px">
    </a>
    <!-- -->
    <a href="{{route('Ajustes.index')}}" class="rectangulogris" style="left: 940px">
        <div id="titulo3">
            Chequea tu perfil y rentas!
        </div>
        <div class="lineaamarilla"></div>
        <div class="circuloamarillo"></div>
        <img class="iconopos" src="images/iconoperfilpuntos.png" style="left: 174px " width="61px" height="57px" >
    </a>
    <div>
        <img id="fotocarro" src="images/fotocarrocliente.png">
        <div id="barragris"></div>
        <div id="lineablanca"></div>
    </div>


</body>
<footer>

</footer>
</html>
