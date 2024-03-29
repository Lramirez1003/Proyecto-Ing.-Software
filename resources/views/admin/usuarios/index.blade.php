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
    <title>URC | Usuarios</title>
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
    <h1>Usuarios</h1>
    <div id="linea1"></div>

    <!--    FORMULARIO PARA AGREGAR VEHICULOS        -->
    <div id="myForm">
    <form action="{{route('vehiculos.create')}}" method="post" enctype="multipart/form-data" class="formulario">
        @csrf

        <div id="fotoVehiculo" >
            <p><img id="blah" src="{{ asset('images/insert_photo.svg')}}" alt=" " /></p>
            <input id="inputArchivo"  type="file" name="image" id="btn-file" required  />
            <p >Inserte imagen del vehiculo </p>
        </div>

        <h2>Agregando vehiculo...</h2>
        <div id="nombreVehiculo" class="group">
            <input class="inputTexto" type="text" name="Nombre" required><span class="highlight"></span><span class="bar"></span>
            <label class="labelTexto">Vehiculo</label>
        </div>

        <div class="group">
            <input class="inputTexto" type="text" name="Placa" required><span class="highlight"></span><span class="bar"></span>
            <label class="labelTexto">Placa del vehiculo:</label>
        </div>

        <div class="group">
            <input class="inputTexto" type="text" name="Precio" required><span class="highlight"></span><span class="bar"></span>
            <label class="labelTexto">Precio por dia:</label>
        </div>

        <div class="group">

            <select class="inputTexto" name="Tipo" id="tipoCarro" required> <span class="highlight"></span><span class="bar"></span>
                <option value="0">Elija el tipo de carro</option>
                <option value="Compacto">Compacto</option>
                <option value="Jeepeta">Jeepeta</option>
            </select>

        </div>

        <div id="numeroPasajeros" class="group">
        <input class="inputTexto" name="N_pasajeros"type="number" min="1" max = "6" required><span class="highlight"></span><span class="bar"></span>
        <label for="cantidad" class="labelTexto">Pasajeros</label>
        </div>
       <!-- <h4>Selecciona que mas posee el vehiculo</h4>
         <div id="extras" class="group">
            <input type="checkbox" name="favorite1" value="Aire Acondicionado" /> <i class="material-icons">
                air</i> Aire Acondicionado
            <input type="checkbox" name="favorite2" value="Bluetooth" /> <i class="material-icons">
                bluetooth </i>  Bluetooth
            <input type="checkbox" name="favorite3" value="Radio F/M" /> <i class="material-icons">
                radio</i>  Radio F/M

         </div>-->
         <button type="reset" value="reset" class="button" style="color: orange;border: 2px solid;
         border-radius: 5px;" onclick="closeForm()" >Cancelar
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
         </button>
         <button type="submit" value="submit" class="button" style="margin-left: 50%;background-color: rgba(255, 167, 81, 1);border-radius: 5px;">Agregar
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
         </button>

    </form>
</div>


<table id="t01" style="
    cursor: pointer;
    ">   
    <thead>  
    <tr>
      <th data-tsorter="input-text">Id</th>
      <th data-tsorter="input-text">Nombre</th>
      <th data-tsorter="input-text">Correo</th>
      <th data-tsorter="input-text">Cedula</th>
      <th data-tsorter="input-text">Licencia</th>
      <th data-tsorter="input-text">Telefono</th>
      <th data-tsorter="input-text">Rol</th>
 
      
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        
    
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->cedula}}</td>
      <td>{{$user->licencia}}</td>
      <td>{{$user->telefono}}</td>
      <td>{{ implode(',',$user->roles()->get()->pluck('Nombre')->toArray()) }}</td>
      

      <td>
        <a href="{{route('users.edit',$user->id)}}" class = "btn-editar " id="Edtar-btn"> Editar </a> <br><br>
        <form action="{{route('users.destroy',$user)}}" method="post">
         @csrf
         @method('delete')
        
        <button type="submit" class="btn-borrar" >Borrar</button>
        </form>

      </td>
    </tr>
    @endforeach
    </tbody>


  </table>

  <!-- SORT -->

  <script type="text/javascript">
      function init() {
    var sorter = tsorter.create('t01');
}
    
    window.onload = init;
  </script>

    @include('sweetalert::alert')

</body>
</html>
