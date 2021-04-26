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
    <title>URC | Clientes</title>
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

        <a href="{{route('Calendario.index')}}" class = "administrarv ">Calendario
            <img src="images/iconocalendar.png" width="15px" height="18px">

        </a>

        <a href="{{ route('clientes.index') }}" class = "circulop"> <img src="{{asset('images/fotocliente.png')}}" alt="clientes" width="44px" height="44.44px"> </a>

        <div class="dropdown">
            <img src="{{asset('images/admin 1.png')}}" alt="A">
            <div class="dropdown-content">
                <a href="{{route('users.index')}}">Usuarios</a>
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
    <h1>Tus clientes</h1>
    <div id="linea1"></div>
    <button class="btn-popup" onclick="openForm()">
        <img src="{{ asset('images/addicon.png')}}" style="position: absolute;
width: 31px;
height: 31px;
left: 25px;
top: 15px;">
        <h4 style="position: absolute;
left: 80px;
top: 0px;">Agregar cliente</h4>
    </button>
    <!--    FORMULARIO PARA AGREGAR cliente        -->
    <div id="myForm">
    <form action="{{route('cliente.create')}}" method="post" enctype="multipart/form-data" class="formulario">
        @csrf

        <h2>Agregando cliente...</h2>
        <div id="nombreVehiculo" class="group">
            <input class="inputTexto" type="text" name="Nombre" required><span class="highlight"></span><span class="bar"></span>
            <label class="labelTexto">Nombre</label>
        </div>

        <div class="group">
            <input class="inputTexto" type="text" name="Telefono" required><span class="highlight"></span><span class="bar"></span>
            <label class="labelTexto">Telefono:</label>
        </div>
        <div class="group">

            <input class="inputTexto" type="text" name="Licencia" required> <span class="highlight"></span><span class="bar"></span>
            <label class="labelTexto">Licencia:</label>

        </div>

        <div class="group">

            <input class="inputTexto" type="email" name="Email"> <span class="highlight"></span><span class="bar"></span>
            <label class="labelTexto">Correo:</label>

        </div>


         
         <button type="reset" value="reset" class="button" style="color: orange;border: 2px solid;
         border-radius: 5px;" onclick="closeForm()" >Cancelar
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
         </button>
         <button type="submit" value="submit" class="button" style="margin-left: 50%;background-color: rgba(255, 167, 81, 1);border-radius: 5px;">Agregar
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
         </button>

    </form>
</div>

<table id="t01"  >   

    <thead>
    <tr>
      <th data-tsorter="input-text">Nombre</th>
      <th data-tsorter="input-text">Telefono</th>
      <th data-tsorter="input-text">Licencia</th>
      <th data-tsorter="input-text">Correo</th>
      
    </tr>
    </thead>
    <tbody>
    @foreach($clientes as $cliente)
    <tr>
      <td>{{$cliente->Nombre}}</td>
      <td>{{$cliente->Telefono}}</td>
      <td>{{$cliente->Licencia}}</td>
      <td>{{$cliente->Email}}</td>
      <td>
        <a href="{{route('cliente.edit',["cliente"=>$cliente])}}" class = "btn-editar " id="Edtar-btn"> Editar </a> <br><br>
        <form action="{{route('cliente.delete',["cliente"=>$cliente])}}" method="post">
        @method('delete')
        @csrf
        <button type="submit" class="btn-borrar" >Borrar</button>
        </form>
      </td>
    </tr>
    @endforeach
    </tbody>

  </table>

  <script type="text/javascript">
    function init() {
  var sorter = tsorter.create('t01');
}
  
  window.onload = init;
</script>

    @include('sweetalert::alert')

</body>
</html>
