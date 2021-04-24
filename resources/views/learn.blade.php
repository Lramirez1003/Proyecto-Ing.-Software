<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URC | Aprende</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/clienteHOMEPAGE.css')}}">
    <link rel="stylesheet" href="{{asset('css/Register.css')}}">

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
        <a href="{{route('rentasC.index')}}" class = "administrarv " >Rentar
            <!--<i class="material-icons">person</i>-->
            <img src="images/iconocar.png" width="11.45px" height="14px">
        </a>

        <a href="#" class = "administrarv ">Aprender
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
width: 121px;
height: 40px;
left: 700px;
top: 127px;

font-family: Segoe UI;
font-style: normal;
font-weight: bold;
font-size: 30px;
line-height: 40px;
/* identical to box height */


color: #333333;"> Aprende </h1>
<div style="
position: absolute;
width: 149px;
height: 0px;
left: 680px;
top: 190px;

border: 3px solid #FFEF3E;"></div>

<div style="position: absolute;
width: 1260px;
height: 260px;
left: 98px;
top: 226px;

background: rgba(255, 239, 62, 0.1);
border-radius: 5px;
">
    <img src="{{asset('images/arreglandocarro.png')}}" style="position: absolute;
width: 426px;
height: 260px;
left: 0px;
top: 0px;">
    <h3 style="position: absolute;
width: 501px;
height: 29px;
left: 459px;
top: 10px;
font-family: Segoe UI;
font-style: normal;
font-weight: bold;
font-size: 22px;
line-height: 29px;
">Cada cuanto hay que llevar el carro al mecánico?</h3>
    <p style="position: absolute;
width: 741px;
height: 96px;
left: 459px;
top: 78px;

font-family: Segoe UI;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 24px;

color: #333333;
">Revisar el estado de las bujías: estos cables son indispensables
        para que desde el distribuidor se conduzca la electricidad de manera correcta.
        Si alguno de los cables se ve deteriorado o pelado, es muy posible que el motor
        funcione incorrectamente o que no arranque. En este caso, lo mejor es cambiar los cables dañados.</p>
</div>

<div style="position: absolute;
width: 1260px;
height: 260px;
left: 98px;
top: 600px;

background: rgba(255, 239, 62, 0.1);
border-radius: 5px;">
    <img src="{{asset('images/Rectangle 71.png')}}" style="position: absolute;
width: 426px;
height: 260px;
left: 834px;
top: 0px;">
    <h3 style="position: absolute;
width: 501px;
height: 29px;
left: 298px;
top: 31px;
font-family: Segoe UI;
font-style: normal;
font-weight: bold;
font-size: 22px;
line-height: 29px;
text-align: right;

color: #333333;">Cómo saber cual carro comprar?</h3>
    <p style="position: absolute;
width: 721px;
height: 96px;
left: 77px;
top: 82px;

font-family: Segoe UI;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 24px;
text-align: right;

color: #333333;">Comprar un auto es un evento que tiene importancia y está muy vinculado con
        tus necesidades diarias (como ir al trabajo, reuniones, finanzas personales, etc.),
        por esa razón, para elegir un auto debes pensar en varios aspectos que te permitirán tener
        una idea más clara de las características que debe tener.</p>
</div>

<div style="position: absolute;
width: 1260px;
height: 260px;
left: 98px;
top: 1000px;

background: rgba(255, 239, 62, 0.1);
border-radius: 5px;
">
    <img src="{{asset('images/toyota_prius_2019_a.jpg')}}" style="position: absolute;
width: 426px;
height: 260px;
left: 0px;
top: 0px;">
    <h3 style="position: absolute;
width: 501px;
height: 29px;
left: 459px;
top: 10px;
font-family: Segoe UI;
font-style: normal;
font-weight: bold;
font-size: 22px;
line-height: 29px;
">Los 10 carros mas rentables del 2020</h3>
    <p style="position: absolute;
width: 741px;
height: 96px;
left: 459px;
top: 78px;

font-family: Segoe UI;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 24px;

color: #333333;
">Toyota Prius: 93 puntos
  Lexus NX: 91 puntos
  Buick Encore: 91 puntos
  Lexus GX: 90 puntos
  Honda HR-V: 90 puntos
  Toyota Prius Prime: 88 puntos
  Hyundai Kona: 87 puntos
  Audi A5: 86 puntos
  Audi A4: 86 puntos
  Mazda CX-5: 85 puntos</p>
</div>

</body>
</html>
