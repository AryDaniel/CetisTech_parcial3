<?php include '../administrarSesion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BonIce</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,500;0,600;1,200&display=swap" rel="stylesheet">
</head>
<style>
    .fondo{
      background: rgb(56,10,205);
      background: linear-gradient(0deg, rgba(56,10,205,1) 0%, rgba(23,201,251,1) 74%);
    }
    .mouse{
      background: rgb(0,0,0);
      background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(0,15,255,1) 100%);
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
  <br><br><br><br>
    
  <!-- 1er card -->


<div class="media position-relative card-custom">
  <img src="img/portada.jpg" class="mr-3" alt="...">
  <div class="media-body card-custom">
    <br><br><br><br>
    <p class="montserrat-light">OFERTAS DEL DIA</p>
    <h5 class="montserrat-bold">25% de descuento en los Samsung Z FLIP del 26 al 29 de Noviembre. Envío gratis desde $ 299
Tienes envío gratis en millones de productos seleccionados. Aplican condiciones.</h5>
    <a href="#" class="montserrat-light">Ver más</a>
  </div>
</div>

    <!-- Fin 1er card -->
  <br><br><br><br>

  <!-- Mouse's -->

<div align="center">
<div class="card-deck col-sm-12 col-lg-6" >
  <div class="card">
    <img src="imagenesVenta/mouse1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Ocelot Gaming OGEM01</h5>
      <p class="card-text">Sensor más preciso: Cuenta con sensor óptico de alta precisión, que permite detectar los movimientos más precisamente al hacer movimientos rápidos.</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary">Mas información</button>
    </div>
  </div>
  <div class="card">
    <img src="imagenesVenta/mouse3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Free Wolf M6</h5>
      <p class="card-text">El nuevo mouse profesional personalizado para juegos 2022, apariencia simple y elegante, diseño ergonómico y aerodinámico, liviano y delgado lo hace ideal para viajar, puede caber fácilmente en un bolso o mochila para portátil.</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary">Mas información</button>
    </div>
  </div>
  <div class="card">
    <img src="imagenesVenta/mouse2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Logitech G502</h5>
      <p class="card-text">Además de las características principales de desempeño y personalización, hay muchos detalles meticulosamente diseñados.</p>
    </div>
    <div class="card-footer">
      <button class="btn btn-primary">Mas información</button>
    </div>
  </div>
</div>
</div>
  
  <!-- PC -->
  


  <!-- 2do carousel -->
  
      





  <br><br><br><br>
  <footer class="text-center">
      <br><br><br><br><br><br>    
      2022 &copy; Cetis107 BonIce
  </footer>
  <script src="js/bootstrap.js"></script>
</body>
</html>