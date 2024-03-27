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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="../css/fvstyle.css">
    <title>Inicio</title>
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
          <li><a href="index.html">Inicio</a></li>
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

<!-- Contenido de la página -->
<div class="container">
    <img src="../css/img/formularioVacantes/_MG_6052.jpg" alt="Descripción de la imagen" class="imagen">
</div>

<!--Barra Secundaria-->
<div class="container">
    <div class="azul">Vacantes</div>
    <div class="gris"></div>
</div>

<div class="container-split-contacto">
  <div class="left-side-contacto">
    <div class="left-side-content-contacto">
      <img src="../css/img/formularioVacantes/img15.jpg" alt="Imagen de ejemplo">
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
    <h3 class="titulo-registro"><center>Registro</center></h3>
    <form action="validar.php" method="post">
      <div class="form-group-contacto">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre(s)">
      </div>
      <div class="form-group-contacto">
        <input type="text" class="form-control" name="apellido" placeholder="Apellido">
      </div>
      <div class="form-group-contacto">
        <input type="email" class="form-control" name="email" placeholder="Email">
      </div>
      <div class="form-group-contacto">
        <input type="text" class="form-control" name="telefono" placeholder="Telefono">
      </div>
      <div class="form-group-contacto">
        <select name="puesto" class="form-control">
          <option value="" disabled selected>Selecciona un puesto de interés</option>
          <option value="Ayudante Perforista">Ayudante Perforista</option>
          <option value="Ayudante General">Ayudante General</option>
          <option value="Cargador Frontal">Cargador Frontal</option>
          <option value="Geologo Jr.">Geólogo Jr.</option>
          <option value="Mecanico Interior Mina">Mecanico Interior Mina</option>
          <option value="Practicante">Practicante</option>
          <option value="Operador Scooptram">Operador Scooptram</option>
          <option value="Perforista">Perforista</option>
          <option value="Sistemas">Sistemas</option>
          <option value="Supervisor Presa de Jales">Supervisor presa de jales</option>
          <option value="Soldador">Soldador</option>
          <option value="Trituración">Trituración</option>
          <option value="Tornero">Tornero</option>
          <option value="Tractorista">Tractorista</option>
        </select>
      </div>
      <div class="form-group-contacto">
        <input type="text" class="form-control" name="otro" placeholder="Otro">
      </div>
      <div class="input-box">
        <input type="file" id="cv" name="cv" accept=".pdf" style="display: none;">
        <label for="cv" class="custom-file-upload">Agregar CV</label>
      </div>
      <br> <!-- Añadir un espacio -->
      <button type="submit" class="btn btn-primary" onclick="submitForm()">Enviar</button>
    </form>
  </div>
</div>



  <!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <div class="footer-left">
            <p>Derechos Reservados</p>
            <p>&copy; 2024 Carrizal Mining</p>
        </div>
        <div class="footer-center">
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/MiningCarrizal"><img src="img/iconos-redes-01-01.png" alt="Facebook"></a></li>
                <li><a href="https://www.instagram.com/carrizal_mining/"><img src="img/iconos-redes-01-02.png" alt="Instagram"></a></li>
                <li><a href="https://www.youtube.com/@CarrizalMining"><img src="img/iconos-redes-01-03.png" alt="YouTube"></a></li>
                <li><a href="tel:+527721327258"><img src="img/iconos-redes-01-04.png" alt="WhatsApp"></a></li>
                <li><a href="https://www.tiktok.com/@carrizalmining?is_from_webapp=1&sender_device=pc"><img src="img/iconos-redes-01-05.png" alt="TikTok"></a></li>
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