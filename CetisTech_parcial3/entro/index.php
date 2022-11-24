<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BonIce</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
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
</style>
<body class="fondo">
  <?php include 'menu.php'; ?>
  <br><br><br><br><br><br><br><br>
    
  <!-- 2do carousel -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/imagen1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/imagen2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/imagen3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>

  </div>

  <br>

  <!-- Mouse's -->
  <div class="mouse alert " role="">
    <br><br>
    <img src="imagenesVenta/mouse1.jpg" class="rounded mx-auto float-left" alt="...">
    <img src="imagenesVenta/mouse3.jpg" class="img-thumbnail rounded mx-auto float-right" alt="...">
    <img src="imagenesVenta/mouse2.jpg" class="rounded mx-auto d-block" alt="...">
    <br><br><br>
  </div>
  
  <!-- PC -->
  <img src="imagenesVenta/altavoces.png" class="rounded float-left" alt="...">
  <img src="imagenesVenta/television1.png" class="rounded mx-auto d-block" alt="...">


  <!-- 2do carousel -->
  <div class="container">
    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-touch="false" data-interval="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/celular2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/pcGamer.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/reloj.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleControlsNoTouching" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleControlsNoTouching" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>
  </div>
      





  <br><br><br><br>
  <footer class="text-center">
      <br><br><br><br><br><br>    
      2022 &copy; Cetis107 BonIce
  </footer>
  <script src="js/bootstrap.js"></script>
</body>
</html>