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
</head>
<body class="fondo2">
  <?php include 'menu.php'; ?>


  <?php
    include '../conexionConBD.php';
    $id = $_GET["id"];
    $sql = "SELECT * FROM productosenVenta WHERE id=" . $id;
    $resultado = $conexion->query($sql);
    $registro = $resultado->fetch_assoc();
?>


    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">

                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="<?php echo $registro["imagen"]; ?>" width="400px">
                            </div>

                            <div class="col-lg-6 px-xl-10">
                                    <h1 class="mb-0"><?php echo $registro["nombre_producto"]; ?></h1>

                                <ul class="list-unstyled mb-1-9">
                                    <br><br>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">$<?php echo $registro["precio"]; ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600"><?php echo $registro["descripcion"]; ?></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------Productos sugeridos------------------------------->
    <?php        
        $SQLresultadoCategoria = "select * from productosenventa where categoria like '".$registro["categoria"]."' AND id not like '".$registro["id"]."'";
        $resultadoCategoria = $conexion->query($SQLresultadoCategoria);
    ?>

    <div class="alert fondo" role="alert">
    <div align="center">
        <div class="card-deck col-sm-12 col-lg-10" >
        <?php if($resultadoCategoria->num_rows > 0) { 
            while($row = $resultadoCategoria->fetch_assoc()) {
        ?>
            <div class="card">
                <img src="<?php echo $row["imagen"]; ?>" class="card-img-top" width="20px">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row["nombre_producto"]; ?></h5>
                <p class="card-text" align="right">$<?php echo $row["precio"]; ?></p>
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
    <!------------------------------------------------------------------------------------>




  <footer class="text-center">
      <br>  
      2022 &copy; Cetis107 BonIce
  </footer>
  <script src="js/bootstrap.js"></script>
</body>
</html>