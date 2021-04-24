<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URC | Perfil</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/PERFILcliente.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/LogoComp90.png') }}">
    <!--NAV BAR-->
    <nav>

        <a href="{{route('welcome.index')}}" class = "logo "><img src="{{{asset('images/LogoComp80.png')}}}" alt="Logo"></a>
        <a href="{{route('explorar.index')}}" class = "administrarv " >Explorar
            <!--<i class="material-icons">person</i>-->
            <img src="{{asset('images/exploraricon.png')}}" width="15px" height="14px">
        </a>
        <a href="{{route('rentasC.index')}}" class = "administrarv " >Rentar
            <!--<i class="material-icons">person</i>-->
            <img src="{{asset('images/iconocar.png')}}" width="11.45px" height="14px">
        </a>

        <a href="{{route('Learn.index')}}" class = "administrarv ">Aprender
            <img src="{{asset('images/iconoaprender.png')}}" width="13px" height="14px">
        </a>

        <a href="{{route('email.index')}}" class = "administrarv ">Enviar Correo
            <img src="{{asset('images/iconomensajes.png')}}" width="15px" height="14px">
        </a>

        <div class="dropdown">
            <img src="{{asset('images/admin 1.png')}}" alt="A">
            <div class="dropdown-content">
            <a href="{{route('homec.index')}}"> <img src="images/iconoverperfilCLiente.png" width="11px" height="14.44px">Cuenta</a>
            <a href="javascript:history.go(0)"> <img src="images/iconoverrentasCliente.png" width="11px" height="14.44px">Ajustes</a>

            <a href="{{route('logout')}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"> 
                <img src="images/iconologout.png" width="14px" height="14.44px"> Cerrar Sesión</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>

        </div>

    </nav>
</head>
<!--CUERPO DEL PERFIL-->
<body>
    <div class="circuloPerfil"><img src="" alt=""></div>
    <h3 id="hola"> <nobr> {{ Auth::user()->name }}</h3>
    <p id="parrafito">A medida que vayas rentando, se te iran sumando puntos hasta poder canjearlos  </p>
    <a href="{{route('Ajustes.edit',Auth::user()->id)}}" id="bloqueDorado" >
        Edita tu perfil
    </a>
    <div id="rectanguloPerfil">
        <div id="textoPerfil">Perfil</div>
    </div>

    <div class="bloqueGris"  >
        <div class="textoBloques">{{Auth::user()->name}}
        </div>
    </div>

    <div class="bloqueGris" style="top: 486px;" >
            <div class="textoBloques">{{Auth::user()->email}}
            </div>
    </div>

    <div class="bloqueGris" style="top: 558px;"  >
        <div class="textoBloques">{{Auth::user()->cedula}}
        </div>
    </div>

    <div class="bloqueGris" style="top: 630px;">
        <div class="textoBloques">{{Auth::user()->licencia}}
        </div>
    </div>

    <div class="bloqueGris" style="top: 702px;" >
        <div class="textoBloques">{{Auth::user()->telefono}}
        </div>
    </div>


</body>
</html>
