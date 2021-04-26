<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URC | Ajustes</title>
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
                <a href="{{route('Ajustes.index')}}"> <img src="images/iconoverrentasCliente.png" width="11px" height="14.44px">Ajustes</a>

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
    <img src="{{asset('images/fotocliente.png')}}" style="position: absolute;
        width: 80px;
        height: 80px;
        left: 240px;
        top: 170px;">
    <h3 id="hola"> <nobr> {{ Auth::user()->name }}</h3>

    <div id="rectanguloPerfil">
        <div id="textoPerfil">Informacion Personal</div>
    </div>

    <div>
        <form action="{{ route('Ajustes.update',Auth::user()) }}" method="post">
            @csrf
            {{method_field('PUT')}}

            <div  >
                <input type="text" class="bloqueGris" name="name" placeholder="Nombre" value="{{Auth::user()->name}}">

            </div>


            <input type="text" class="bloqueGris" style="top: 490px;" name="email" placeholder="Correo Eletronico" value="{{Auth::user()->email}}">

            <input type="text" class="bloqueGris" style="top: 558px;"name="cedula" placeholder="Cedula" value="{{Auth::user()->cedula}}">

             <input type="text" class="bloqueGris" style="top: 630px;"name="licencia" placeholder="Licencia" value="{{Auth::user()->licencia}}">

             <input type="text" class="bloqueGris" style="top: 702px;" name="telefono" placeholder="Telefono" value="{{Auth::user()->telefono}}">

            <button type="submit" value="submit" style="
position: absolute;
width: 156px;
height: 56px;
left: 950px;
top: 190px;

background: #FFEF3E;
border-radius: 5px;">Actualizar datos </button>

        </form>
    </div>

</body>
</html>
