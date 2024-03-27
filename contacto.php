<?php
  session_start();

  // Verificar si hay un mensaje en la sesión
  if(isset($_SESSION['mensaje'])) {
      // Imprimir el mensaje en la consola del navegador
      echo '<script>console.log("' . $_SESSION['mensaje'] . '");</script>';
      
      // Imprimir el mensaje en un alert
      echo '<script>alert("' . $_SESSION['mensaje'] . '");</script>';

      // Limpiar el mensaje de la sesión
      unset($_SESSION['mensaje']);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacto</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />


  
</head>

<body>

  <!--Barra de Navegación-->
  <header class="header">
      <div class="logo">
        <img src="css/img/logo/logo.png" alt="" style="width: 100px; height: 50px; margin-left: 50px; ">
      </div>
      <input type="checkbox" id="toggle">
      <label for="toggle"><img class="menu" src="css/img/logo/menu.png" alt="menu"></label>

      <nav class="navigation">
        <ul>
          <li><a href="inicio.html">Inicio</a></li>
          <li><a href="nosotros.html">Nosotros</a></li>
          <li><a href="">Sustentabilidad</a>
            <ul>
              <li><a href="sustentabilidad/ambiental.html">Ambiental</a></li>
              <li><a href="sustentabilidad/comunidades.html">Comunidades</a></li>
              <li><a href="sustentabilidad/salud.html">Salud</a></li>
              <li><a href="sustentabilidad/seguridad.html">Seguridad</a></li>
            </ul>
          </li>
          <li><a href="#">Recursos</a>
            <ul>
              <li><a href="recursos/noticias.html">Noticias</a></li>
              <li><a href="recursos/galeria.html">Galería</a></li>
              <li><a href="recursos/videos.html">Videos</a></li>
              <li><a href="recursos/publicaciones.html">Publicaciones</a></li>
            </ul>
          </li>
          <li><a href="vacantes.html">Vacantes</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </ul>
      </nav>
    </header>


  <div class="container-split-contacto">
    <div class="left-side-contacto">
      <div class="left-side-content-contacto">
        <img src="css/img/Colaboradores/img18.jpg" alt="Imagen de ejemplo">
        <div class="overlay"></div>
        <div class="text-overlay">
          <p>Ex Hacienda La LLave S/N Unidad Habitacional<br>
          Zimapán, Hidalgo, C.P. 42336<br>
          dania.fuentes@carrizalm.com<br>
          01 (759) 723 9220 Ext. 102</p>

        </div>
      </div>
    </div>
    <div class="right-side-contacto">
      <h3>Para todo tipo de comentarios, dudas e inquietudes;
        por favor completa el siguiente formulario:
      </h3>
      <form action="conexion.php" method="post">
        <div class="form-group-contacto">
          <input type="text" class="form-control" name="nombre" placeholder="Nombre(s)" required>
        </div>
        <div class="form-group-contacto">
          <input type="" class="form-control" name="apellido" placeholder="Apellidos" required>
        </div>
        <div class="form-group-contacto">
          <textarea class="form-control" name="mensaje" rows="3" placeholder="¿Tiene algún comentario que le gustaría compartir?" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>
  
  <div class="container-split-contacto">
    <div class="right-side-contacto">
      <h2>CETICA</h2>
      <h1>CETICA, busca escuchar las necesidades, 
        inquietudes o bien faltas a nuestras políticas 
        o al Código de Ética de la empresa. Cuenta con 
        diversos canales, pensados para satisfacer las 
        necesidades de nuestras partes interesadas, de 
        modo que garantizamos que sea de fácil uso,
        segura y opcionalmente, anónima. 
      </h1>
      <a href="https://www.ethicsglobal.com/"><button class="btn btn-primary">Denunciar</button></a>
      <p>
        Los horarios de atención son: <br>
        Lunes a sábado de 8:00 a.m. a 10:00 p.m. <br>
        Domingo de 9 a.m. a 3:00 p.m. <br>
        Fuera de este horario un buzón de voz tomará su reporte. <br>
      </p>
    </div>
    <div class="left-side-contacto">
      <div class="left-side-content-contacto">
        <img src="css/img/Colaboradores/img7.jpg" alt="Imagen de ejemplo">
        <div class="overlay"></div>
        <div class="text-overlay-title">
          <h2>Línea de atención a Quejas, Reclamos y Sugerencias</h2>
        </div>
        <div class="text-overlay">
          <p>¡Contactanos!<br>
          cetica.ethicsglobal.com<br>
          cetica@ethicsglobal.com<br>
          +52 55 6538 5504</p>
        </div>
      </div>
  </div>
  </div>

  <div class="container-split-contacto">
    <div class="left-side-contacto">
      <div class="left-side-content-contacto">
        <img src="css/img/Contacto/Mapa.png" alt="Imagen de ejemplo">
      </div>
    </div>
    <div class="right-side-contacto">
      <h2>Ubicación</h2>
      <a href=""><button class="btn btn-primary">Mina Monte</button></a>
      <a href=""><button class="btn btn-primary">Planta Beneficio</button></a>
      <a href=""><button class="btn btn-primary">Mina Carrizal</button></a>
      <a href=""><button class="btn btn-primary">Mina Lomo de Toro</button></a>
      <a href=""><button class="btn btn-primary">Oficinas Generales</button></a>
      
    </div>
    </div>

  

    <footer class="footer-distributed">
      <div class="footer-content">
          <div class="footer-left">
              <p>Derechos Reservados</p>
              <p>&copy; 2024 Carrizal Mining</p>
          </div>
          <div class="footer-center">
              <ul class="social-icons">
                  <li><a href="https://www.facebook.com/MiningCarrizal"><img src="css/img/iconos/iconos-redes-01-01.png" alt="Facebook"></a></li>
                  <li><a href="https://www.instagram.com/carrizal_mining/"><img src="css/img/iconos/iconos-redes-01-02.png" alt="Instagram"></a></li>
                  <li><a href="https://www.youtube.com/@CarrizalMining"><img src="css/img/iconos/iconos-redes-01-03.png" alt="YouTube"></a></li>
                  <li><a href="tel:+527721327258"><img src="css/img/iconos/iconos-redes-01-04.png" alt="WhatsApp"></a></li>
                  <li><a href="https://www.tiktok.com/@carrizalmining?is_from_webapp=1&sender_device=pc"><img src="css/img/iconos/iconos-redes-01-05.png" alt="TikTok"></a></li>
                  <!-- Agrega más imágenes de redes sociales según sea necesario -->
              </ul>
          </div>
          <div class="footer-right">
              <div class="enlace-blanco">
                  <p><a href="https://www.carrizalm.com/_files/ugd/921cce_6e7a8fc47c8d44f89fe3618240a22112.pdf">Código de Ética</a></p>
              </div>
          </div>
      </div>
    </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</body>
</html>
