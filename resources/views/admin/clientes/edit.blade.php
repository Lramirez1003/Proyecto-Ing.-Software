<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/adminVehiculos.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script type="text/javascript"src='{{ asset('js/adminVehiculos.js') }}'></script>


    <title>Ureña Rent-Car</title>
</head>
<header>
    <nav>
        <a href="{{route('home')}}" class = "logo "><img src="{{asset('images/LogoComp80.png')}}" alt="Logo"></a>

        <a href="{{ route('vehiculos.index') }}" class = "administrarv ">Administrar Vehiculos
            <img src="{{asset('images/iconocar.png')}}" width="16px" height="18px">

        </a>

        <a href="#" class = "administrarv ">Rentas
            <img src="{{asset('images/carnolmal.png')}}" width="20px" height="16px">

        </a>

        <a href="#" class = "administrarv ">Calendario
            <img src="{{asset('images/iconocalendar.png')}}" width="15px" height="18px">

        </a>

        <a href="clientesregistrados.html" class = "circulop"> <img src="{{asset('images/fotocliente.png')}}" alt="clientes" width="44px" height="44.44px"> </a>

        <div class="dropdown">
            <img src="{{asset('images/admin 1.png')}}" alt="A">
            <div class="dropdown-content">
                <div id="puntosDropdown">200 puntos</div>
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

<body style="background-color: white;">
    <h1>Tus Clientes</h1>
    <div id="linea1"></div>
    </button>
    <!--    FORMULARIO PARA AGREGAR VEHICULOS        -->
    <div>
        <form action="{{route('cliente.update',["cliente"=>$cliente])}}" method="post" enctype="multipart/form-data" class="formulario">
            @csrf
    
            <h2>Actualizando cliente...</h2>
            <div id="nombreVehiculo" class="group">
                <input class="inputTexto" type="text" name="Nombre" value="{{$cliente->nombre}}"><span class="highlight"></span><span class="bar"></span>
                <label class="labelTexto">Nombre</label>
            </div>
    
            <div class="group">
                <input class="inputTexto" type="text" name="Telefono" value="{{$cliente->telefono}}"><span class="highlight"></span><span class="bar"></span>
                <label class="labelTexto">Telefono:</label>
            </div>
            <div class="group">
    
                <input class="inputTexto" type="text" name="Licencia" value="{{$cliente->licencia}}"> <span class="highlight"></span><span class="bar"></span>
                <label class="labelTexto">Licencia:</label>
    
            </div>
    
            <div class="group">
    
                <input class="inputTexto" type="email" name="Email" value="{{$cliente->email}}"> <span class="highlight"></span><span class="bar"></span>
                <label class="labelTexto">Correo:</label>
    
            </div>
    
    
             

             <button type="submit" value="submit" class="button" style="margin-left: 50%;background-color: rgba(255, 167, 81, 1);border-radius: 5px;">Actualizar
                <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
             </button>
    
        </form>
    </div>

</body>
</html>
