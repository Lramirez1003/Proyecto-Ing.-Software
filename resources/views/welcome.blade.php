<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <title>Ureña Rent-Car</title>
    <link rel="stylesheet" href="{{asset('css/Homepage.css')}}">
</head>
<header>
  <nav>
      <a href="Homepage.html" class = "logo " ><img src="images/LogoComp80.png" alt="Logo"></a>
      <button class="nav-button"onclick="accion()" >Menú</button>
      <a href="#" class = "nav-menu ">Rentar</a>
      <a href="about.html" class = "nav-menu ">Nosotros</a>
      <a href="aprender.html" class = "nav-menu ">Aprender</a>
      <a href="Log-inTemplate.html" class = "nav-iniciarsesion ">Inicia Sesión</a>
      <a href="registrate.html" class = "nav-registro">Regístrate</a>
  </nav>

<body>
    <main id="page-container">
        <h2 class="header2">Haz una reservación!</h2>
        <div id="linea1"></div>
        <!-- BANNER PRINCIPAL -->
        <section class="BannerHome">
            <div class ="FechaElegir" >

                <label class="textoDesde" >Desde:</label>
                <div class="fechaDesde">
                    <input type="date">
                </div>

                <label class="textoHasta">Hasta:</label>
                <div class="fechaHasta">
                    <input type="date">
                </div>

                <h4 class="header4"> Selecciona un tipo de vehiculo</h4>
                <button class="btn-Intermedio"><i class="fa fa-truck"></i> <br/> Intermedio</button>
                <button class="btn-Compacto"><i class="fa fa-car"></i><br/>Compacto</button>
                <div><a href="#" class="btn-seleccionar">Seleccionar</a></div>
            </div>

            <div class="elantraBanner"><img src="images/bannerlogoafuera.JPG" alt="Elantra" width="605" height="398"></div>
        </section>

        <!-- CARRUSEL DE VEHICULOS -->
        <section class="carruselBorde">
            <a href="#" id="btn-VerTodos">Ver todos</a>
            <h2 class="h2Bloques">Explora</h2>
            <div id="linea2"></div>
            <p class="textBloques">Explora los diferentes tipos de carros</p>
            <div class="owl-carousel owl-theme">
               <a href="#"class="nombresVehiculos"> <img src="images/elantra.jpeg" alt="elantra" width="206" height="125">KIA <b>4</b>
                    <i class="material-icons">person</i></a>
                <a href="#" class="nombresVehiculos"><img src="images/volkswaggen.png" alt="jispeta" width="206" height="125">Volswaggen <b>4</b>
                    <i class="material-icons">person</i></a>
                <a href="#"class="nombresVehiculos"><img src="images/avante.JPG" alt="Si" width="206" height="125">Avante <b>4</b>
                    <i class="material-icons">person</i></a>

            </div>
        </section>

        <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay: true,
            autoplayTimeout: 4500,
            autoplayHoverPause:true,
            dots:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })</script>

        <!-- BLOQUE APRENDER -->
         <section id="aprenderBloque">
                <h2 class="h2Bloques">Aprende</h2>
                <div id="linea3"></div>

                <p class="textBloques">Conoce como puedes cuidar mejor tu vehiculo</p>
                <a href="aprender.html" id="btn-Aprender">Aprender</a>
        </section>
            <div id="aprenderFoto"><img src="images/arreglandocarro.png" alt="Aprender" width="445" height="318"></div>

         <!-- BLOQUE NOSOTROS -->
         <div id="conocenosFoto"><img src="images/volkswaggen.png" alt="Conócenos" width="510" height="318"></div>
            <section class="nosotrosBloque">
                <h2 class="h2Bloques">Conocenos</h2>
                <div id="linea4"></div>
                <p class="textBloques">Mira en quienes nos hemos convertido a traves de los años</p>
                <a href="about.html" id="btn-Conocenos">Conócenos</a>

             </section>

    </main>
    <footer><p>© 2021 Todos los derechos reservados.</p></footer>
</body>
</html>
