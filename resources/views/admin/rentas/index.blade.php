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
            <img src="images/iconocar.png" width="16px" height="18px">

        </a>

        <a href="{{ route('rentas.index') }}" class = "administrarv ">Rentas
            <img src="images/carnolmal.png" width="20px" height="16px">

        </a>

        <a href="#" class = "administrarv ">Calendario
            <img src="images/iconocalendar.png" width="15px" height="18px">

        </a>

        <a href="{{route('clientes.index')}}" class = "circulop"> <img src="{{asset('images/fotocliente.png')}}" alt="clientes" width="44px" height="44.44px"> </a>

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
    <h1>Tus rentas</h1>
    <div id="linea1"></div>
    <a href="{{route('renta.create')}}" class="btn-popup">
        <img src="{{ asset('images/addicon.png')}}" style="position: absolute;
width: 31px;
height: 31px;
left: 25px;
top: 25px;">
        <h4 style="position: absolute;
left: 80px;
top: 10px;">Agregar renta</h4>
    </a>
    <!--    FORMULARIO         -->


<table id="t01"  >   
    <tr>
      <th>Cliente</th>
      <th>Vehiculo</th>
      <th>Fecha de salida</th>
      <th>Fecha de entrada</th>
      <th></th>
    </tr>
    @foreach ($rentas as $renta)
        
   
    <tr>
      <td>{{$renta->cliente->Nombre ?? ''}}</td>
      <td>{{$renta->vehiculo->Nombre ?? ''}}</td>
      <td>{{\Carbon\Carbon::parse($renta->fecha_inicio)->format('d-m-Y')}}</td>
      <td>{{\Carbon\Carbon::parse($renta->fecha_fin)->format('d-m-Y')}}</td>
      <td>
        <form action="{{route('renta.delete',$renta->id)}}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="btn-borrar" >Borrar</button>
            </form>
      </td>
    </tr>
    


    @endforeach
  </table>

    @include('sweetalert::alert')

</body>
</html>
