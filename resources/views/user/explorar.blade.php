<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/step24.css')}}">
</head>
<header>
    <nav>

        <a href="#" class = "logo "><img src="images/LogoComp80.png" alt="Logo"></a>
        <a href="#" class = "administrarv " >Explorar
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

        <a href="#" class = "circulop" ></a>

    </nav>
</header>
<body>

<h1 style="position: absolute;
width: 400px;
height: 36px;
left: 640px;
top: 141px;">Nuestros vehiculos</h1>

<div style="position: absolute;
width: 320px;
height: 0px;
left: 620px;
top: 210px;

border: 3px solid #FFEF3E;"></div>

<!--<div id="filtroBUSQUEDA" style="position: absolute;
    width: 301px;
    height: 828px;
    left: 34px;
    top: 270px;">
    <h1 class="t1">Tipo de Vehiculo</h1>
    <div class="vertical-menu">
        <a href="#">Compacto</a>
        <a href="#">Mediano</a>
    </div>

    <h1 class="t1" style="top: 240px">Precio</h1>
    <div class="vertical-menu" style="top: 290px">
        <a href="#">Menor a mayor</a>
        <a href="#">Mayor a menor</a>
    </div>

    <h1 class="t1" style="top: 450px">Marcas</h1>           <!-- Viene mambo de form
    <form action="#">
        <input type="radio" class="botonpos" name="marcacarros" value="kia" >
        <div class="titulobusqueda">Kia</div>

        <input type="radio" class="botonpos" style="top: 550px" name="marcacarros" value="hyundai" >
        <div class="titulobusqueda" style="top: 555px">Hyundai</div>

        <input type="radio" class="botonpos" style="top: 600px"name="marcacarros" value="Volkswagen" >
        <div class="titulobusqueda" style="top: 600px">Volkswagen</div>
    </form>



</div>-->


<section class="container flex">

@foreach ($vehiculoss as $vehiculo)
    

<div>
    <img src="{{asset('storage/images/'. $vehiculo->FotoName) }}" alt="A">
    <p>{{$vehiculo->Nombre}}</p>
    
    <p>{{$vehiculo->Tipo}}</p>
    
    <p>{{$vehiculo->N_pasajeros}}</p>


<p>US$ {{$vehiculo->Precio}} por dia</p>

    <a href="#" class="forma-boton-amarillo">
        <div class="seleccionar-titulo">Seleccionar</div>
    </a>
</div>
@endforeach
</section>


</body>
</html>
