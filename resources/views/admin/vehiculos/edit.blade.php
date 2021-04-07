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

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/LogoComp90.png') }}">
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
    <h1>Tus vehiculos</h1>
    <div id="linea1"></div>
    <!--<button class="btn-popup">
        <img src="{{ asset('images/addicon.png')}}" style="position: absolute;
width: 31px;
height: 31px;
left: 25px;
top: 15px;">
        <h4 style="position: absolute;
left: 80px;
top: 0px;">Actualizando</h4>
    </button>-->
    <!--    FORMULARIO PARA AGREGAR VEHICULOS        -->
    <div id="">
    <form action="{{route('vehiculos.update',["vehiculo"=>$vehiculo])}}" method="post" enctype="multipart/form-data" class="formulario" >
        @csrf

       <!-- <div id="fotoVehiculo" >
            <p><img id="blah" src="images/insert_photo.svg" alt=" " /></p>
            <input id="inputArchivo" type="file" name="image" value="{{$vehiculo->FotoName}}" id="btn-file"   />
            <p >Inserte imagen del vehiculo </p>
        </div>-->

        <h2>Actualizando vehiculo...</h2>
        <div id="nombreVehiculo" class="group">
            <input class="inputTexto" type="text" name="Nombre" value="{{$vehiculo->Nombre}}"><span class="highlight"></span><span class="bar"></span>
            <label class="labelTexto">Vehiculo</label>
        </div>

        <div class="group">
            <input class="inputTexto" type="text" name="Precio" value="{{$vehiculo->Precio}}"><span class="highlight"></span><span class="bar"></span>
            <label class="labelTexto">Precio por dia:</label>
        </div>
        <div class="group">

            <select class="inputTexto" name="Tipo" id="tipoCarro" value="{{$vehiculo->Tipo}}"> <span class="highlight"></span><span class="bar"></span>
                <option hidden>Elija el tipo de carro</option>
                <option value="Compacto">Compacto</option>
                <option value="Jeepeta">Jeepeta</option>
            </select>

        </div>

        <div id="numeroPasajeros" class="group">
        <input class="inputTexto" name="N_pasajeros"type="number" min="1" max = "6" value="{{$vehiculo->N_pasajeros}}"><span class="highlight"></span><span class="bar"></span>
        <label for="cantidad" class="labelTexto">Pasajeros</label>
        </div>
        <!--<h4>Selecciona que mas posee el vehiculo</h4>
         <div id="extras" class="group">
            <input type="checkbox" name="favorite1" value="Aire Acondicionado" /> <i class="material-icons">
                air</i> Aire Acondicionado
            <input type="checkbox" name="favorite2" value="Bluetooth" /> <i class="material-icons">
                bluetooth </i>  Bluetooth
            <input type="checkbox" name="favorite3" value="Radio F/M" /> <i class="material-icons">
                radio</i>  Radio F/M

         </div>-->
         <button type="submit" value="submit" class="button" style="margin-left: 50%;background-color: rgba(255, 167, 81, 1);border-radius: 5px;">Actualizar
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
         </button>

    </form>
</div>

</body>
</html>
