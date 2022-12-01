<?php include '../administrarSesion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetis Tecnologia</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,500;0,600;1,200&display=swap" rel="stylesheet">
</head>
<style>
    .fondo1{
      background: rgb(110,178,255);
      background: linear-gradient(0deg, rgba(110,178,255,1) 0%, rgba(63,148,244,1) 100%);
    }
    .fondo2{
      background-color: #E7E7E7;
    }
    .card-custom {
      background-color: black;
      color: white;
    }
    .montserrat-light{
      font-family: 'Montserrat', sans-serif;
      font-weight: 200;
    }
    .montserrat-bold{
      font-family: 'Montserrat', sans-serif;
      font-weight: 600;
    }
    .achicar{
      width: '75px';
    }
    .card{
    margin-bottom: 100px;
    }
</style>
<body class="fondo2">
    <?php include 'menu.php'; ?>
    <br><br>


  <div class="media position-relative card-custom">
    <a href="categorias.php?categoria='Telefonós'"><img src="img/portada.jpg" class="mr-3" alt="categorias.php?categoria='telefono'"></a>
    <div class="media-body card-custom">
      <br><br><br><br>
      <p class="montserrat-light">OFERTAS DEL DIA</p>
      <h5 class="montserrat-bold">25% de descuento en los Samsung Z FLIP del 26 al 29 de Noviembre. Envío gratis desde $ 299
        Tienes envío gratis en millones de productos seleccionados. Aplican condiciones.</h5>
      <a href="#" class="montserrat-light">Ver más</a>
    </div>
  </div>
  <br><br>

  <div class="container">
    <div class="card-deck">
      
      <div class="card">
        <a href="categorias.php?categoria='reloj'"><img class="card-img-top" src="img/watch.png"></a>
        <div class="card-body">
          <center>Relojes</center>
        </div>
      </div>

      <div class="card">
        <a href="categorias.php?categoria='mouse'"><img class="card-img-top" src="img/mouse.png"></a>
        <div class="card-body">
          <center>Mouse's</center>
        </div>
      </div>

      <div class="card">
        <a href="categorias.php?categoria='Telefonós'"><img class="card-img-top" src="img/telefono-movil.png"></a>
        <div class="card-body">
          <center>Telefonós</center>
        </div>
      </div>

      <!--
      <div class="card">
        <a href="categorias.php"><img class="card-img-top" src="img/speaker.png"></a>
        <div class="card-body">
          <center>Altavoces</center>
        </div>
      </div>
      -->

      <div class="card">
        <a href="categorias.php?categoria='Auriculares'"><img class="card-img-top" src="img/headphones.png"></a>
        <div class="card-body">
          <center>Audífonos y Audiculares</center>
        </div>
      </div>

      <!--
      <div class="card">
        <a href="categorias.php"><img class="card-img-top" src="img/perifericos.png"></a>
        <div class="card-body">
          <center>Perifericos</center>
        </div>
      </div>
      -->

      <div class="card">
        <a href="categorias.php?categoria='Pantalla'"><img class="card-img-top" src="img/imac.png"></a>
        <div class="card-body">
          <center>Monitores y Pantallas</h5></center>
        </div>
      </div>

      <div class="card">
        <a href="categorias.php?categoria='Altavoces'"><img class="card-img-top" src="img/speaker.png"></a>
        <div class="card-body">
          <center>Altavoces</h5></center>
        </div>
      </div>
      
    </div>
  </div>

  <footer class="text-center">
      <br><br>   
      2022 &copy; Cetis107 BonIce
  </footer>
  <script src="js/bootstrap.js"></script>
</body>
</html>