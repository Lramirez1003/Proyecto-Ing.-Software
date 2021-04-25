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
        <a href="{{route('welcome.index')}}" class = "logo "><img src="images/LogoComp80.png" alt="Logo"></a>
        <a href="{{route('explorar.index')}}" class = "administrarv " >Explorar
            <!--<i class="material-icons">person</i>-->
            <img src="images/exploraricon.png" width="15px" height="14px">
        </a>
        <a href="{{route('rentaC.create')}}" class = "administrarv " >Rentar
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
                <a href="{{route('homec.index')}}"> <img src="images/iconoverperfilCLiente.png" width="11px" height="14.44px">Cuenta</a>
                <a href="{{route('Ajustes.index')}}"> <img src="images/iconoverperfilCLiente.png" width="11px" height="14.44px">Ajustes</a>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                 <img src="{{ asset('images/iconologout.png')}}" width="14px" height="14.44px"> Cerrar Sesión</a>
        
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        
        </div>

        </div>

    </nav>
</header>

<body style="background-color: white;">
    <h1>Tu renta</h1>
    <div id="linea1"></div>
    <!--<button class="btn-popup" onclick="openForm()">
        <img src="{{ asset('images/addicon.png')}}" style="position: absolute;
width: 31px;
height: 31px;
left: 25px;
top: 15px;">
        <h4 style="position: absolute;
left: 80px;
top: 0px;">Agregar renta</h4>
    </button>-->
    <!--    FORMULARIO         -->
    <div>
    <form action="{{$action}}" method="POST" enctype="multipart/form-data" class="formulario">
        @csrf

        <h2>Creando renta...</h2>
        <div class="group">
           
            <select class="inputTexto" name="user_id" id="user_id" required> <span class="highlight"></span><span class="bar"></span>
                <option value="0">Seleccionate</option>
               
                <option value="{{Auth::user()->id}}">{{Auth::user()->name}}</option>

           
            </select>
        </div>

        <div class="group" style="
        left :510px;
        bottom: 100px;
        
        
        ">
            <label for="fecha_inicio">Fecha de salida:</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" required>
        </div>


        <div class="group"style="
        bottom: 60px;
        
        
        ">
            
            <select class="inputTexto" name="vehiculo_id" id="vehiculo_id" required> <span class="highlight"></span><span class="bar"></span>
                <option value="0">Selecciona el vehiculo</option>
                
                
                    @foreach ($vehiculos as $vehiculo)
                    <option value="{{$vehiculo->id}}">{{$vehiculo->Nombre}}</option>
                    @endforeach

               
            </select>
        </div>



        <div class="group" style="
        left :510px;
        bottom: 150px;
        
        
        ">
            <label for="fecha_fin">Fecha de entrada:</label>
            <input type="date" name="fecha_fin" id="fecha_fin" required>
        </div>
        
        <div class="group">
            <input class="inputTexto" type="text" name="total_de_dias" required><span class="highlight"></span><span class="bar"></span>
            <label class="labelTexto">Total de dias:</label>
        </div>
        
         
         <a href="{{ url()->previous() }}"  class="button" style="color: orange;border: 2px solid;
         border-radius: 5px; text-decoration: none; ">Cancelar
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </a>
         <button type="submit" value="submit" class="button" style="margin-left: 50%;background-color: rgba(255, 167, 81, 1);border-radius: 5px;">Agregar
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
         </button>



    </form>
</div>


    @include('sweetalert::alert')

</body>
</html>
