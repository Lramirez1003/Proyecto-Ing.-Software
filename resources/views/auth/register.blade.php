<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>URC | Regístrate</title>
    <link rel="stylesheet" href="{{ asset('css/Register.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/LogoComp90.png') }}">
    <script src="{{ asset('js/Register.js') }}"></script>    
</head>

<header>
  <nav>
      <a href="{{route('welcome.index')}}" class = "logo "><img src="{{ asset('images/LogoComp80.png') }}" alt="Logo"></a>
      <a href="{{route('rentasC.index')}}" class = "nav-menu ">Rentar</a>
      <a href="{{asset('about.html')}}" class = "nav-menu ">Nosotros</a>
      <a href="{{route('Learn.index')}}" class = "nav-menu ">Aprender</a>
      <a href="{{route('login')}}" class = "nav-iniciarsesion ">Inicia Sesión</a>
      <a href="{{route('register')}}" class = "nav-registro">Regístrate</a>
  </nav>

</header>

  <hgroup>
    <h1>Regístrate</h1>
      <a href="#"class="header3 "><h3>Unete a nuestra comunidad</h3></a>
  </hgroup>

  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="group">
      <input type="text" id="name" name="name" value="{{ old('name') }}" required ><span class="highlight"></span><span class="bar"></span>
      <label>Nombre y apellido</label>
    </div>
    <div class="group">
      <input type="text" class="@error('cedula') is-invalid @enderror" id="cedula" name="cedula" value="{{ old('cedula')}}" required autocomplete="cedula" ><span class="highlight"></span><span class="bar"></span>
      <label>Cédula</label>

      @error('cedula')
      <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    </div>

    <div class="group">
      <input type="email" class="@error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"><span class="highlight"></span><span class="bar"></span>
      <label>Correo electronico</label>

      @error('email')
      <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    </div>
    
    <div class="group">
      <input type="password" class="@error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password"><span class="highlight"></span><span class="bar"></span>
      <label>Contraseña</label>

      @error('password')
      <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
  @enderror
    </div>

    <div class="group">
      <input type="password" id="password-confirmation" name="password_confirmation" required autocomplete="new-password"><span class="highlight"></span><span class="bar"></span>
      <label>Verificar contraseña</label>
    </div>
    <button type="submit" class="button buttonGold">Regístrate
      <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
    <p>¿Ya tienes cuenta? <a href="{{ route('login') }}" class = "abuenogracias">Inicia sesión</a></p>
  </form>
</body>

<!--pie de pagina-->
    <footer><p>© 2021 Todos los derechos reservados.</p></footer>

</html>
