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
    <script type="text/javascript"src='{{ asset('js/tsorter.js') }}'></script>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/LogoComp90.png') }}">
    <title>URC | Rentas</title>
</head>
<header>
    <nav>
        <a href="#" class = "logo "><img src="images/LogoComp80.png" alt="Logo"></a>
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

        <a href="{{route('email.index')}}" class = "administrarv ">Enviar Correo
            <img src="images/mailicono.png" width="15px" height="14px">
        </a>

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

        </div>

    </nav>

</header>

<body style="background-color: white;">
    <h2 style="
position: absolute;
width: 300px;
height: 36px;
left: 350px;
top: 160px;

font-family: Inter;
font-style: normal;
font-weight: bold;
font-size: 30px;
line-height: 36px;

color: #333333;
">Rentas</h2>
<div style="position: absolute;
width: 150px;
height: 5px;
left: 330px;
top: 230px;

background: #ffde00;
border-radius: 5px;"></div>
    <a href="{{route('rentaC.create')}}" class="btn-popup">
        <img src="{{ asset('images/addicon.png')}}" style="position: absolute;
width: 31px;
height: 31px;
left: 25px;
top: 25px;">
        <h4 style="position: absolute;
left: 80px;
top: 10px;">Agregar renta</h4>
    </a>
    <!--    TABLA        -->


<table id="t01"  >
    <thead>
    <tr>
      <th data-tsorter="input-text">Vehiculo</th>
      <th data-tsorter="numeric" > Precio Total</th>
      <th data-tsorter="input-text">Fecha de salida</th>
      <th data-tsorter="input-text">Fecha de entrada</th>


    </tr>
</thead>
<tbody>
    @foreach ($rentasC as $renta)


    <tr>
      <td>{{$renta->vehiculo->Nombre ?? ''}}</td>
      <td>{{$renta->precio_total ?? ''}}</td>
      <td>{{\Carbon\Carbon::parse($renta->fecha_inicio)->format('d-m-Y')}}</td>
      <td>{{\Carbon\Carbon::parse($renta->fecha_fin)->format('d-m-Y')}}</td>
      <td>
        <form action="{{route('rentaC.delete',$renta->id)}}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="btn-borrar" >Eliminar</button>
            </form>
      </td>
    </tr>


    @endforeach
</tbody>
  </table>
  {{--@foreach ($rentas as $renta)
    <div class="relleno">
        <img src="{{asset('storage/images/'. $renta->vehiculo->FotoName) }}" alt="car" style="
        width: 311px;
        height: 219px;
        border-radius: 5px;
        " >
        <h4 id="nombreCar">{{$renta->vehiculo->Nombre ?? ''}}</h4>
        <p id="tipodeCar">{{$renta->vehiculo->Tipo ?? ''}}</p>
        <p id="nPasajeros">{{$renta->vehiculo->N_Pasajeros ?? ''}}</p>
        <p id="precioDia"> <b>{{$renta->vehiculo->Precio ?? ''}}</b>  por dia </p>
        <div id="fechaI">
            <p id="textoFecha">{{\Carbon\Carbon::parse($renta->fecha_inicio)->format('d-m-Y')}}</p>
        </div>
        <img src="images/iconoflechaabajo.png" alt="flecha" id="flechaFecha" >
        <div id="fechaF">
            <p id="textoFecha">{{\Carbon\Carbon::parse($renta->fecha_fin)->format('d-m-Y')}}</p>
        </div>
        <div id="bloqueCliente" >
            <p id="nombreClientee" > {{$renta->cliente->Nombre ?? ''}} </p>

        </div>

    </div>
    @endforeach--}}
    <script type="text/javascript">
        function init() {
      var sorter = tsorter.create('t01');
  }

      window.onload = init;
    </script>


    @include('sweetalert::alert')

</body>
</html>
