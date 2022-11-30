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

<!-- Mouse's -->
<?php           
  include '../conexionConBD.php';
  /* 
      Esto nos dice que lo BD que seleccionamos 
      (en este caso BonIceBD)
      y la tabla es productos
  */
  $sql = "select * from productosenventa where nombre_producto like '%mouse%'";
  $datos = $conexion->query($sql);
?>

<div class="alert fondo" role="alert">
  <div align="center">
    <div class="card-deck col-sm-12 col-lg-10" >
      <?php if($datos->num_rows > 0) { 
          while($row = $datos->fetch_assoc()) {
      ?>
        <div class="card">
            <img src="<?php echo $row["imagen"]; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["nombre_producto"]; ?></h5>
            <p class="card-text"><?php echo $row["descripcion"]; ?></p>
          </div>
          <div class="card-footer">
            <a href="vistaProductos.php?id=<?php echo $row["id"]; ?>" type="button" class="btn btn-primary">Mas información</a>
          </div>
        </div>

      <?php 
          } 
        }
        $conexion->close();
      ?>
    </div>
  </div>
</div>

<!-- Pantallas -->
<?php       
  include '../conexionConBD.php';
  /* 
      Esto nos dice que lo BD que seleccionamos 
      (en este caso BonIceBD)
      y la tabla es productos
  */
  $sql = "select * from productosenventa where nombre_producto like '%pantalla%'";
  $datos = $conexion->query($sql);
?>

<div class="alert fondo" role="alert">
  <div align="center">
    <div class="card-deck col-sm-12 col-lg-10" >
      <?php if($datos->num_rows > 0) { 
          while($row = $datos->fetch_assoc()) {
      ?>
        <div class="card">
            <img src="<?php echo $row["imagen"]; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["nombre_producto"]; ?></h5>
            <p class="card-text"><?php echo $row["descripcion"]; ?></p>
          </div>
          <div class="card-footer">
            <a href="vistaProductos.php?id=<?php echo $row["id"]; ?>" type="button" class="btn btn-primary">Mas información</a>
          </div>
        </div>

      <?php 
          } 
        }
        $conexion->close();
      ?>
    </div>
  </div>
</div>

<!-- Auticulares -->
<?php        
  include '../conexionConBD.php';   
  /* 
      Esto nos dice que lo BD que seleccionamos 
      (en este caso BonIceBD)
      y la tabla es productos
  */
  $sql = "select * from productosenventa where nombre_producto like '%auricular%'";
  $datos = $conexion->query($sql);
?>

<div class="alert fondo" role="alert">
  <div align="center">
    <div class="card-deck col-sm-12 col-lg-10" >
      <?php if($datos->num_rows > 0) { 
          while($row = $datos->fetch_assoc()) {
      ?>
        <div class="card">
            <img src="<?php echo $row["imagen"]; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["nombre_producto"]; ?></h5>
            <p class="card-text"><?php echo $row["descripcion"]; ?></p>
          </div>
          <div class="card-footer">
            <a href="vistaProductos.php?id=<?php echo $row["id"]; ?>" type="button" class="btn btn-primary">Mas información</a>
          </div>
        </div>

      <?php 
          } 
        }
        $conexion->close();
      ?>
    </div>
  </div>
</div>

<!-- IPhone -->
<?php        
  include '../conexionConBD.php';   
  /* 
      Esto nos dice que lo BD que seleccionamos 
      (en este caso BonIceBD)
      y la tabla es productos
  */
  $sql = "select * from productosenventa where nombre_producto like '%iPhone%'";
  $datos = $conexion->query($sql);
?>

<div class="alert fondo" role="alert">
  <div align="center">
    <div class="card-deck col-sm-12 col-lg-10" >
      <?php if($datos->num_rows > 0) { 
          while($row = $datos->fetch_assoc()) {
      ?>
        <div class="card">
            <img src="<?php echo $row["imagen"]; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["nombre_producto"]; ?></h5>
            <p class="card-text"><?php echo $row["descripcion"]; ?></p>
          </div>
          <div class="card-footer">
            <a href="vistaProductos.php?id=<?php echo $row["id"]; ?>" type="button" class="btn btn-primary">Mas información</a>
          </div>
        </div>

      <?php 
          } 
        }
        $conexion->close();
      ?>
    </div>
  </div>
</div>

<!-- Reloj -->
<?php        
  include '../conexionConBD.php';   
  /* 
      Esto nos dice que lo BD que seleccionamos 
      (en este caso BonIceBD)
      y la tabla es productos
  */
  $sql = "select * from productosenventa where nombre_producto like '%reloj%'";
  $datos = $conexion->query($sql);
?>

<div class="alert fondo" role="alert">
  <div align="center">
    <div class="card-deck col-sm-12 col-lg-10" >
      <?php if($datos->num_rows > 0) { 
          while($row = $datos->fetch_assoc()) {
      ?>
        <div class="card">
            <img src="<?php echo $row["imagen"]; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["nombre_producto"]; ?></h5>
            <p class="card-text"><?php echo $row["descripcion"]; ?></p>
          </div>
          <div class="card-footer">
            <a href="vistaProductos.php?id=<?php echo $row["id"]; ?>" type="button" class="btn btn-primary">Mas información</a>
          </div>
        </div>

      <?php 
          } 
        }
        $conexion->close();
      ?>
    </div>
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