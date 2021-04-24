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
            <a href="#"> <img src="images/iconoverperfilCLiente.png" width="11px" height="14.44px">   Ver Perfil</a>
            <a href="#"> <img src="images/iconoverrentasCliente.png" width="11px" height="14.44px"> Ver Rentas</a>
            <a href="#"> <img src="images/iconologout.png" width="14px" height="14.44px"> Cerrar Sesión</a>

            </div>

        </div>

    </nav>
</head>
<!--CUERPO DEL PERFIL-->
<body>
    <div class="circuloPerfil"><img src="images/fotoPerfil.png" alt=""></div>
    <h3 id="hola"> <nobr> {{ Auth::user()->name }}</h3>

    <div id="rectanguloPerfil">
        <div id="textoPerfil">Perfil</div>
    </div>

    <div>
        <form action="{{ route('Ajustes.update',Auth::user()) }}" method="post">
            @csrf
            {{method_field('PUT')}}

            <div  >
                <input type="text" class="bloqueGris" name="name" placeholder="Nombre" value="{{Auth::user()->name}}">

            </div>

            <div class="bloqueGris" style="top: 486px;" >
                <input type="text" class="bloqueGris" name="email" placeholder="Correo Eletronico" value="{{Auth::user()->email}}">
            </div>

            <div class="bloqueGris" style="top: 558px;"  >
                <input type="text" class="bloqueGris" name="cedula" placeholder="Cedula" value="{{Auth::user()->cedula}}">
            </div>

            <div class="bloqueGris" style="top: 630px;">
                <input type="text" class="bloqueGris" name="licencia" placeholder="Licencia" value="{{Auth::user()->licencia}}">
            </div>

            <div class="bloqueGris" style="top: 702px;" >
                <input type="text" class="bloqueGris" name="telefono" placeholder="Telefono" value="{{Auth::user()->telefono}}">
            </div>

            <button type="submit" value="submit">Actualiza </button>

        </form>
    </div>

</body>
</html>
