<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/PERFILcliente.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/LogoComp90.png') }}">
    <title>URC | Perfil</title>
    <!--NAV BAR-->
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

        <a href="{{route('AboutUs.index')}}" class = "administrarv ">Mensajes
            <img src="images/iconomensajes.png" width="15px" height="14px">
        </a>

        <div class="dropdown">
            <img src="{{asset('images/admin 1.png')}}" alt="A">
            <div class="dropdown-content">
                <a href="{{route('homec.index')}}"> <img src="{{asset('images/iconoverperfilCLiente.png')}}" width="11px" height="14.44px">Cuenta</a>
                <a href="{{route('Ajustes.index')}}"> <img src="{{asset('images/iconoverperfilCLiente.png')}}" width="11px" height="14.44px">Ajustes</a>
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
</head>
<!--CUERPO DEL PERFIL-->
<body>
    <img src="images/fotocliente.png" style="position: absolute;
    width: 80px;
    height: 80px;
    left: 240px;
    top: 170px;">
    <h3 id="hola"> <nobr> {{ Auth::user()->name }}</h3>
    <p id="parrafito">Aqui encontrarás tu informacion personal </p>
    <a href="{{route('Ajustes.edit',Auth::user()->id)}}" id="bloqueDorado" style="text-align: center; ;text-decoration:none" >
        <b>Edita tu perfil</b> 
    </a>
    <div id="rectanguloPerfil">
        <div id="textoPerfil">Informacion Personal</div>
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
