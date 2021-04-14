<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Envianos un correo!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/clienteHOMEPAGE.css')}}">
    <link rel="stylesheet" href="{{asset('css/Log-inn.css')}}">
    <script type="text/javascript"src="{{asset('js/Log-in.js')}}"></script>
    
    <meta name="description" content="contact form example">
</head>
<header>
    <nav>
        <a href="{{route('welcome.index')}}" class = "logo "><img src="images/LogoComp80.png" alt="Logo"></a>
        <a href="explorarvehiculos.html" class = "administrarv " >Explorar
            <!--<i class="material-icons">person</i>-->
            <img src="{{asset('images/exploraricon.png')}}" width="15px" height="14px">
        </a>
        <a href="step1.html" class = "administrarv " >Rentar
            <!--<i class="material-icons">person</i>-->
            <img src="{{asset('images/iconocar.png')}}" width="11.45px" height="14px">
        </a>

        <a href="{{route('Learn.index')}}" class = "administrarv ">Aprender
            <img src="{{asset('images/iconoaprender.png')}}" width="13px" height="14px">
        </a>

        <a href="#" class = "administrarv ">Enviar Correo
            <img src="{{asset('images/mailicono.png')}}" width="15px" height="14px">
        </a>

        <div class="dropdown">
            <img src="{{asset('images/admin 1.png')}}" alt="A">
            <div class="dropdown-content">
            
            <a href="{{route('homec.index')}}"> <img src="images/iconoverperfilCLiente.png" width="11px" height="14.44px">Cuenta</a>
            <a href="#"> <img src="images/iconoverperfilCLiente.png" width="11px" height="14.44px">Ajustes</a>
            
            <a href="{{route('logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-formu').submit();"> 
                <img src="images/iconologout.png" width="14px" height="14.44px"> Cerrar Sesión</a>

                <form id="logout-formu" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

         </div>
    </nav>
</header>

<body style="background-color: white;">
<!-- TITULO -->
<hgroup>
    <h1>Pongámonos en contacto!</h1>
    <a href="#"class="header3 "><h3> Tienes alguna duda? sugerencia? Escribenos un correo para poder ayudarte</h3></a>
</hgroup>
<!-- FORMULARIO -->
<form class="formulario" id="gform" method="POST" class="pure-form pure-form-stacked" data-email="from_email@example.com"
       action="https://script.google.com/macros/s/AKfycbxuJ_Np3IItER9QTOWY81AjCVu4qkATJ3lzS8i1Yezbjq6vgP4/exec">

    <div class="group">
    <input id="name" name="name" value="{{Auth::user()->name}}"><span class="highlight"></span><span class="bar"></span>
    <label for="name">Name: </label>
    </div>
    <br>

    
    <div class="group">
        
    <textarea id="message" name="message" rows="10" style="width: 315px"
              placeholder="Dinos que tienes en mente..."></textarea>
     
    </div>
    <br>
    <br>

    <div class="group">
    <input id="email" name="email" type="email" value="{{Auth::user()->email}}"
           required  /><span class="highlight"></span><span class="bar"></span>
    <label for="email"><em>Your</em> Email Address:</label>
    </div>
    <br>

    <button  class="button buttonGold" class="button-success pure-button button-xlarge">
        <i class="fa fa-paper-plane"></i> Enviar
    </button>

</form>

<!-- Customise the Thankyou Message People See when they submit the form: -->
<div style="display:none;" id="thankyou_message">
    <h2>
        <em>Thanks</em> for contacting us!
        We will get back to you soon!
    </h2>
</div>



<script data-cfasync="false" type="text/javascript"
        src="{{asset('js/form-submission-handler.js')}}"></script>

<footer><p>© 2021 Todos los derechos reservados.</p></footer>
</body>
</html>
