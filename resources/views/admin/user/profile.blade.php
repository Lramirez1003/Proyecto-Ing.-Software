<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ureña Rent-Car</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/PERFILcliente.css')}}">
    <!--NAV BAR-->
    <nav>

        <a href="#" class = "logo "><img src="images/LogoComp80.png" alt="Logo"></a>
        <a href="#" class = "administrarv " >Explorar
            <!--<i class="material-icons">person</i>-->
            <img src="images/exploraricon.png" width="15px" height="14px">
        </a>
        <a href="step1.html" class = "administrarv " >Rentar
            <!--<i class="material-icons">person</i>-->
            <img src="images/iconocar.png" width="11.45px" height="14px">
        </a>

        <a href="#" class = "administrarv ">Aprender
            <img src="images/iconoaprender.png" width="13px" height="14px">
        </a>

        <a href="#" class = "administrarv ">Mensajes
            <img src="images/iconomensajes.png" width="15px" height="14px">
        </a>

        <div class="dropdown">
            <img src="images/admin 1.png" alt="A">
            <div class="dropdown-content">
            <div id="puntosDropdown">200 puntos</div>
            <a href="#"> <img src="images/iconoverperfilCLiente.png" width="11px" height="14.44px">   Ver Perfil</a>
            <a href="#"> <img src="images/iconoverrentasCliente.png" width="11px" height="14.44px"> Ver Rentas</a>
            <a href="#"> <img src="images/iconologout.png" width="14px" height="14.44px"> Cerrar Sesión</a>

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
