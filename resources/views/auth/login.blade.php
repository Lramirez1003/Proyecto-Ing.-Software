<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Ureña Rent-Car</title>
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}">
    <script type="text/javascript"src={{ asset('js/Log-in.js') }}></script>    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/LogoComp90.png') }}">
</head>
<header>
  <nav>
      <a href="{{route('welcome.index')}}" class = "logo "><img src={{ asset('images/LogoComp80.png') }} alt="Logo"></a>
      <a href="#" class = "nav-menu ">Rentar</a>
      <a href="{{asset('about.html')}}" class = "nav-menu ">Nosotros</a>
      <a href="{{route('Learn.index')}}" class = "nav-menu ">Aprender</a>
      <a href="{{route('login')}}" class = "nav-iniciarsesion ">Inicia Sesión</a>
      <!--<a href="{{route('register')}}" class = "nav-registro">Regístrate</a>-->
  </nav>
</header>
<body style="background-color: white;">
  
<hgroup>
  <h1>Inicia Sesion</h1>
  <a href="#"class="header3 "><h3>Vuelve donde te quedaste</h3></a>
</hgroup>
<form  class="formulario" method="POST" action="{{ route('login') }}">
    @csrf
  <div class="group">
    <input id="email" value="{{old('email') }}" name="email" type="email"><span class="highlight"></span><span class="bar"></span>
    <label>Correo electronico</label>
  </div>
  <div class="group">
    <input id="password" value="{{old('password') }}" name="password" type="password"><span class="highlight"></span><span class="bar"></span>
    <label>Contraseña</label>
  </div>
  <button type="submit" class="button buttonGold">{{ __('Entrar') }}
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
  <p>No tienes cuenta? <a href="#" class = "abuenogracias">Registrate</a></p>
  <p><a href="{{route('password.request')}}" class="resetP">Se te olvido la contraseña?</a></p>
</form>
</body>
<footer><p>© 2021 Todos los derechos reservados.</p></footer>
</html>